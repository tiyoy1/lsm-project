<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->localized_title }} - {{ __('ui.news.title') }} SMK Metland</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}?v=20260305">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="news-page-body">
    <main class="news-detail-page">
        <header class="news-detail-hero">
            <div class="news-detail-hero-inner">
                <h1>{{ $news->localized_title }}</h1>
                <nav class="news-detail-breadcrumb" aria-label="{{ __('ui.news.breadcrumb_aria') }}">
                    <a href="{{ url('/') }}">{{ __('ui.nav.home') }}</a>
                    <span>&rsaquo;</span>
                    <a href="{{ route('news.index') }}">{{ __('ui.nav.news') }}</a>
                    <span>&rsaquo;</span>
                    <span class="is-current">{{ \Illuminate\Support\Str::limit($news->localized_title, 90) }}</span>
                </nav>
            </div>
        </header>

        <section class="news-detail-content-wrap">
            <div class="news-detail-layout">
                <article class="news-article-card">
                    <div class="news-article-media">
                        <img src="{{ $news->image_url }}" alt="{{ $news->localized_title }}">
                        <a
                            href="https://wa.me/?text={{ urlencode($news->localized_title . ' - ' . route('news.show', $news->slug)) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="news-share-button"
                            aria-label="{{ __('ui.news.share_whatsapp') }}">
                            <i class="bi bi-share-fill"></i>
                        </a>
                    </div>
                    <p class="news-article-meta">
                        <i class="bi bi-person-circle"></i> {{ $news->author?->name ?? __('ui.news.admin') }}
                        <span>&bull;</span>
                        <i class="bi bi-calendar4-week"></i> {{ ($news->published_at ?? $news->created_at)->translatedFormat('d M Y H:i') }}
                    </p>
                    <div class="news-article-text">
                        {!! nl2br(e($news->localized_content)) !!}
                    </div>
                </article>

                <aside class="news-detail-sidebar">
                    <section class="news-sidebar-card">
                        <h2>{{ __('ui.news.search_title') }}</h2>
                        <form action="{{ route('news.index') }}" method="GET" class="news-search-form" role="search">
                            <input
                                type="text"
                                name="q"
                                placeholder="{{ __('ui.news.search_placeholder') }}"
                                aria-label="{{ __('ui.news.search_placeholder') }}">
                            <button type="submit" aria-label="{{ __('ui.news.search_title') }}">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </section>

                    <section class="news-sidebar-card">
                        <h2>{{ __('ui.news.latest_sidebar_title') }}</h2>
                        <div class="news-sidebar-list">
                            @forelse($sidebarNews as $item)
                                <a href="{{ route('news.show', $item->slug) }}" class="news-sidebar-item {{ $item->id === $news->id ? 'is-active' : '' }}">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}">
                                    <div>
                                        <p class="news-sidebar-item-title">{{ \Illuminate\Support\Str::limit($item->localized_title, 68) }}</p>
                                        <p class="news-sidebar-item-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="news-sidebar-empty">{{ __('ui.news.empty_desc') }}</p>
                            @endforelse
                        </div>
                        <a href="{{ route('news.index') }}" class="news-sidebar-all">{{ __('ui.news.see_all') }}</a>
                    </section>
                </aside>
            </div>
        </section>
    </main>
</body>
</html>
