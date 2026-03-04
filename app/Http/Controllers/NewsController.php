<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('author')->latest()->paginate(10);
        return view('admin.news.index', compact('news'));
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
    public function update(Request $request, News $news)
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
