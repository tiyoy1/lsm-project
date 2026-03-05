<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    private function visibleNewsQuery(): Builder
    {
        $published = News::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());

        if ($published->exists()) {
            return News::with('author')
                ->whereNotNull('published_at')
                ->where('published_at', '<=', now());
        }

        return News::with('author');
    }

    public function publicIndex(Request $request)
    {
        $search = trim((string) $request->query('q', ''));
        $newsQuery = $this->visibleNewsQuery();

        if ($search !== '') {
            $keywords = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);

            $newsQuery->where(function (Builder $query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $likeKeyword = '%' . $keyword . '%';

                    $query->where(function (Builder $subQuery) use ($likeKeyword) {
                        $subQuery->where('title', 'like', $likeKeyword)
                            ->orWhere('title_en', 'like', $likeKeyword)
                            ->orWhere('content', 'like', $likeKeyword)
                            ->orWhere('content_en', 'like', $likeKeyword);
                    });
                }
            });
        }

        $news = $newsQuery
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->paginate(9)
            ->withQueryString();

        return view('news.index', compact('news', 'search'));
    }

    public function publicShow(News $news)
    {
        $isPublished = !is_null($news->published_at) && $news->published_at->lte(now());
        $hasPublishedNews = News::query()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->exists();

        if ($hasPublishedNews && !$isPublished) {
            abort(404);
        }

        $sidebarNews = $this->visibleNewsQuery()
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->take(6)
            ->get();

        return view('news.show', compact('news', 'sidebarNews'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim((string) $request->query('q', ''));
        $news = News::with('author')
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('title', 'like', '%' . $search . '%')
                        ->orWhere('title_en', 'like', '%' . $search . '%')
                        ->orWhere('content', 'like', '%' . $search . '%')
                        ->orWhere('content_en', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.news.index', compact('news', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news', 'public');
            $validated['image'] = $path;
        }

        $validated['author_id'] = auth()->id();

        // Create news
        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validated = $request->validated();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $path = $request->file('image')->store('news', 'public');
            $validated['image'] = $path;
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // Delete associated image
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
