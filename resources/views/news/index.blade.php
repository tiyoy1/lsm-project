<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('ui.news.title') }} - SMK Metland</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="news-page-body">
    <main class="news-page-main">
        <header class="news-page-head">
            <a href="{{ url('/') }}" class="news-page-home-link"><i class="bi bi-arrow-left"></i> {{ __('ui.news.back_home') }}</a>
            <h1>{{ __('ui.news.title') }}</h1>
            <p>{{ __('ui.news.latest_subtitle') }}</p>
        </header>
        <form action="{{ route('news.index') }}" method="GET" class="news-search-inline" role="search">
            <input
                type="text"
                name="q"
                value="{{ $search ?? '' }}"
                placeholder="{{ __('ui.news.search_placeholder') }}"
                aria-label="{{ __('ui.news.search_placeholder') }}">
            <button type="submit" aria-label="{{ __('ui.news.search_title') }}">
                <i class="bi bi-search"></i>
            </button>
        </form>
        @if(!empty($search))
            <p class="news-search-result">{{ __('ui.news.search_result_for', ['query' => $search]) }}</p>
        @endif

        @if($news->count())
            <section class="news-page-grid" aria-label="{{ __('ui.news.list_aria') }}">
                @foreach($news as $item)
                    <article class="news-page-card">
                        <div class="news-page-media">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('img/hero2.JPG') }}" alt="{{ $item->localized_title }}">
                            <span class="news-page-tag">{{ __('ui.news.tag') }}</span>
                        </div>
                        <div class="news-page-content">
                            <h2>{{ $item->localized_title }}</h2>
                            <p class="news-page-meta">
                                <i class="bi bi-person-circle"></i> {{ $item->author?->name ?? __('ui.news.admin') }}
                                <span>&bull;</span>
                                <i class="bi bi-calendar4-week"></i> {{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y H:i') }}
                            </p>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->localized_content), 220) }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="news-page-btn">{{ __('ui.news.read_more') }}</a>
                        </div>
                    </article>
                @endforeach
            </section>

            @if($news->hasPages())
                <nav class="news-page-pagination" aria-label="{{ __('ui.news.title') }} pagination">
                    @if($news->onFirstPage())
                        <span class="news-page-page is-disabled">{{ __('ui.news.pagination_prev') }}</span>
                    @else
                        <a href="{{ $news->previousPageUrl() }}" class="news-page-page">{{ __('ui.news.pagination_prev') }}</a>
                    @endif

                    @foreach($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                        @if($page == $news->currentPage())
                            <span class="news-page-page is-active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="news-page-page">{{ $page }}</a>
                        @endif
                    @endforeach

                    @if($news->hasMorePages())
                        <a href="{{ $news->nextPageUrl() }}" class="news-page-page">{{ __('ui.news.pagination_next') }}</a>
                    @else
                        <span class="news-page-page is-disabled">{{ __('ui.news.pagination_next') }}</span>
                    @endif
                </nav>
            @endif
        @else
            <section class="news-page-empty">
                <h2>{{ __('ui.news.empty_title') }}</h2>
                <p>{{ __('ui.news.empty_desc') }}</p>
            </section>
        @endif
    </main>
</body>
</html>



