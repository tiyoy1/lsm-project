<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $studentWork->localized_title }} - Student Works - SMK Metland</title>
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
                <h1>{{ $studentWork->localized_title }}</h1>
                <nav class="news-detail-breadcrumb" aria-label="Student works breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>&rsaquo;</span>
                    <a href="{{ route('student-works.index') }}">Student Works</a>
                    <span>&rsaquo;</span>
                    <span class="is-current">{{ \Illuminate\Support\Str::limit($studentWork->localized_title, 90) }}</span>
                </nav>
            </div>
        </header>

        <section class="news-detail-content-wrap">
            <div class="news-detail-layout">
                <article class="news-article-card">
                    <div class="news-article-media">
                        <img src="{{ $studentWork->image_url }}" alt="{{ $studentWork->localized_title }}" loading="lazy" decoding="async">
                        <a
                            href="https://wa.me/?text={{ urlencode($studentWork->localized_title . ' - ' . route('student-works.show', $studentWork->slug)) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="news-share-button"
                            aria-label="Share to WhatsApp">
                            <i class="bi bi-share-fill"></i>
                        </a>
                    </div>
                    <p class="news-article-meta">
                        <i class="bi bi-person-circle"></i> {{ $studentWork->author?->name ?? 'Administrator' }}
                        <span>&bull;</span>
                        <i class="bi bi-calendar4-week"></i> {{ ($studentWork->published_at ?? $studentWork->created_at)->translatedFormat('d M Y H:i') }}
                    </p>
                    <div class="news-article-text">
                        {!! nl2br(e($studentWork->localized_content)) !!}
                    </div>
                </article>

                <aside class="news-detail-sidebar">
                    <section class="news-sidebar-card">
                        <h2>Search</h2>
                        <form action="{{ route('student-works.index') }}" method="GET" class="news-search-form" role="search">
                            <input
                                type="text"
                                name="q"
                                placeholder="Search student works"
                                aria-label="Search student works">
                            <button type="submit" aria-label="Search">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </section>

                    <section class="news-sidebar-card">
                        <h2>Latest Student Works</h2>
                        <div class="news-sidebar-list">
                            @forelse($sidebarStudentWorks as $item)
                                <a href="{{ route('student-works.show', $item->slug) }}" class="news-sidebar-item {{ $item->id === $studentWork->id ? 'is-active' : '' }}">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" loading="lazy" decoding="async">
                                    <div>
                                        <p class="news-sidebar-item-title">{{ \Illuminate\Support\Str::limit($item->localized_title, 68) }}</p>
                                        <p class="news-sidebar-item-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="news-sidebar-empty">Student works will appear here once they are published from the admin panel.</p>
                            @endforelse
                        </div>
                        <a href="{{ route('student-works.index') }}" class="news-sidebar-all">See All</a>
                    </section>
                </aside>
            </div>
        </section>
    </main>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
    @include('partials.whatsapp-fab')
</body>
</html>
