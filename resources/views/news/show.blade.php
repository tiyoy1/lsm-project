@php
    $contactSetting = $contactSetting ?? \App\Models\ContactSetting::query()->latest('id')->first();
    $latestNews = $latestNews ?? \App\Models\News::query()->published()->orderByDesc('published_at')->orderByDesc('id')->take(4)->get();
    
    $faviconUrl = null;
    if (filled($contactSetting?->favicon)) {
        $faviconUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($contactSetting->favicon);
    }
    
    $logoUrl = null;
    if (filled($contactSetting?->logo)) {
        $logoUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($contactSetting->logo);
    }

    $whatsappNumber = preg_replace('/\D+/', '', (string) (($contactSetting?->whatsapp ?? '') ?: '6281809999180'));
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->localized_title }} - News - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ $faviconUrl ?: asset('img/logo-metland-school.png') . '?v=20260305' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <style>
        .news-page-body {
            background: #f2fbfb !important;
            font-family: "Outfit", sans-serif;
        }
        nav {
            background-color: rgba(7, 23, 31, 0.58) !important;
            backdrop-filter: blur(10px) !important;
            -webkit-backdrop-filter: blur(10px) !important;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.28) !important;
            transition: background-color 0.28s ease, backdrop-filter 0.28s ease, box-shadow 0.28s ease !important;
        }
        .news-detail-page {
            background: #f2fbfb !important;
            padding-bottom: 80px !important;
        }
        .news-detail-hero {
            margin: 0 !important;
            padding: 140px 24px 40px !important;
            background: linear-gradient(180deg, #e6f7f7 0%, #f2fbfb 100%) !important;
            border-bottom: 1px solid rgba(28, 165, 165, 0.08) !important;
        }
        .news-detail-hero-inner {
            width: min(1200px, 92vw) !important;
            margin: 0 auto !important;
            text-align: center !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            gap: 16px !important;
        }
        .news-detail-hero h1 {
            font-family: 'Sora', sans-serif !important;
            font-weight: 800 !important;
            color: #0f6c75 !important;
            font-size: clamp(1.8rem, 4vw, 2.8rem) !important;
            line-height: 1.25 !important;
            letter-spacing: -0.5px !important;
            text-transform: none !important;
            margin: 0 !important;
            max-width: 900px !important;
        }
        .news-detail-breadcrumb {
            background: rgba(28, 165, 165, 0.05) !important;
            padding: 8px 20px !important;
            border-radius: 999px !important;
            border: 1px solid rgba(28, 165, 165, 0.1) !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            font-size: 0.88rem !important;
            margin: 0 !important;
            color: #7b989c !important;
            font-family: 'Outfit', sans-serif !important;
        }
        .news-detail-breadcrumb a {
            color: #1ca5a5 !important;
            text-decoration: none !important;
            font-weight: 600 !important;
            transition: all 0.2s ease !important;
        }
        .news-detail-breadcrumb a:hover {
            color: #0f6c75 !important;
            text-decoration: none !important;
        }
        .news-detail-breadcrumb span {
            color: #9cb2b5 !important;
        }
        .news-detail-breadcrumb .is-current {
            color: #5b7579 !important;
            font-weight: 500 !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            max-width: 280px !important;
            display: inline-block !important;
            vertical-align: bottom !important;
        }
        @media (max-width: 576px) {
            .news-detail-breadcrumb .is-current {
                max-width: 120px !important;
            }
        }
        .news-detail-content-wrap {
            width: min(1200px, 92vw) !important;
            margin: 0 auto !important;
            padding-top: 40px !important;
        }
        .news-detail-layout {
            display: grid !important;
            grid-template-columns: minmax(0, 1.8fr) minmax(320px, 1fr) !important;
            gap: 40px !important;
            align-items: start !important;
        }
        @media (max-width: 992px) {
            .news-detail-layout {
                grid-template-columns: 1fr !important;
                gap: 40px !important;
            }
        }
        .news-article-card {
            background: #ffffff !important;
            border: 1px solid rgba(28, 165, 165, 0.06) !important;
            border-radius: 24px !important;
            padding: 32px !important;
            box-shadow: 0 15px 40px rgba(15, 108, 117, 0.03) !important;
        }
        @media (max-width: 576px) {
            .news-article-card {
                padding: 20px !important;
                border-radius: 20px !important;
            }
        }
        .news-article-media {
            position: relative !important;
            border-radius: 20px !important;
            overflow: hidden !important;
            box-shadow: 0 10px 30px rgba(15, 108, 117, 0.06) !important;
            margin-bottom: 24px !important;
            aspect-ratio: 16 / 9 !important;
            background: #e6f2f2 !important;
        }
        .news-article-media img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            transition: transform 0.6s ease !important;
        }
        .news-article-card:hover .news-article-media img {
            transform: scale(1.03) !important;
        }
        .news-share-button {
            position: absolute !important;
            right: 20px !important;
            bottom: 20px !important;
            width: 52px !important;
            height: 52px !important;
            border-radius: 50% !important;
            background: linear-gradient(135deg, #25D366, #128C7E) !important;
            color: #ffffff !important;
            border: none !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3) !important;
            transition: all 0.25s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
            text-decoration: none !important;
            font-size: 1.2rem !important;
            z-index: 5 !important;
        }
        .news-share-button:hover {
            transform: translateY(-4px) scale(1.05) !important;
            color: #ffffff !important;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.45) !important;
        }
        .news-article-meta {
            margin: 0 0 24px 0 !important;
            display: flex !important;
            align-items: center !important;
            gap: 16px !important;
            flex-wrap: wrap !important;
            color: #7b989c !important;
            font-size: 0.9rem !important;
            border-bottom: 1px dashed rgba(28, 165, 165, 0.15) !important;
            padding-bottom: 16px !important;
        }
        .news-article-meta i {
            color: #1ca5a5 !important;
            font-size: 1rem !important;
        }
        .news-article-meta span {
            color: rgba(28, 165, 165, 0.2) !important;
        }
        .news-article-text {
            color: #2b4549 !important;
            line-height: 1.8 !important;
            font-size: 1.08rem !important;
            font-family: 'Outfit', sans-serif !important;
        }
        .news-article-text p {
            margin-bottom: 1.5rem !important;
        }
        .news-article-text strong {
            color: #0f6c75 !important;
            font-weight: 700 !important;
        }
        .news-detail-sidebar {
            display: flex !important;
            flex-direction: column !important;
            gap: 30px !important;
        }
        .news-sidebar-card {
            background: #ffffff !important;
            border: 1px solid rgba(28, 165, 165, 0.06) !important;
            border-radius: 24px !important;
            padding: 28px !important;
            box-shadow: 0 15px 40px rgba(15, 108, 117, 0.03) !important;
        }
        .news-sidebar-card h2 {
            margin: 0 0 20px 0 !important;
            color: #0f6c75 !important;
            font-family: 'Sora', sans-serif !important;
            font-weight: 700 !important;
            font-size: 1.25rem !important;
            text-transform: none !important;
            border-bottom: 2px solid rgba(28, 165, 165, 0.1) !important;
            padding-bottom: 12px !important;
            letter-spacing: -0.3px !important;
        }
        .news-search-form {
            background: #f7fdfd !important;
            border: 1px solid rgba(28, 165, 165, 0.12) !important;
            border-radius: 999px !important;
            padding: 4px 4px 4px 18px !important;
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
        }
        .news-search-form input {
            flex: 1 !important;
            height: 40px !important;
            border: none !important;
            background: transparent !important;
            padding: 0 !important;
            font-size: 0.95rem !important;
            color: #0f6c75 !important;
            outline: none !important;
            box-shadow: none !important;
            font-family: 'Outfit', sans-serif !important;
            width: 100% !important;
        }
        .news-search-form input::placeholder {
            color: #9cb2b5 !important;
        }
        .news-search-form button {
            width: 40px !important;
            height: 40px !important;
            border-radius: 50% !important;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75) !important;
            color: #ffffff !important;
            border: none !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition: all 0.25s ease !important;
            box-shadow: 0 4px 10px rgba(28, 165, 165, 0.15) !important;
        }
        .news-search-form button:hover {
            transform: scale(1.05) !important;
            box-shadow: 0 6px 14px rgba(28, 165, 165, 0.25) !important;
        }
        .news-sidebar-list {
            display: flex !important;
            flex-direction: column !important;
            gap: 18px !important;
        }
        .news-sidebar-item {
            display: flex !important;
            align-items: center !important;
            gap: 16px !important;
            text-decoration: none !important;
            padding-bottom: 16px !important;
            border-bottom: 1px solid rgba(28, 165, 165, 0.06) !important;
            transition: all 0.25s ease !important;
        }
        .news-sidebar-item:last-child {
            border-bottom: none !important;
            padding-bottom: 0 !important;
        }
        .news-sidebar-item:hover {
            transform: translateX(6px) !important;
        }
        .news-sidebar-item img {
            width: 72px !important;
            height: 72px !important;
            border-radius: 14px !important;
            object-fit: cover !important;
            box-shadow: 0 4px 12px rgba(15, 108, 117, 0.06) !important;
        }
        .news-sidebar-item > div {
            flex: 1 !important;
        }
        .news-sidebar-item-title {
            font-family: 'Sora', sans-serif !important;
            font-weight: 600 !important;
            font-size: 0.92rem !important;
            color: #0d464c !important;
            line-height: 1.4 !important;
            margin: 0 0 6px 0 !important;
            transition: color 0.25s ease !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .news-sidebar-item:hover .news-sidebar-item-title,
        .news-sidebar-item.is-active .news-sidebar-item-title {
            color: #1ca5a5 !important;
        }
        .news-sidebar-item-date {
            font-family: 'Outfit', sans-serif !important;
            font-size: 0.8rem !important;
            color: #7b989c !important;
            margin: 0 !important;
        }
        .news-sidebar-all {
            display: block !important;
            text-align: center !important;
            margin-top: 20px !important;
            padding: 12px !important;
            background: rgba(28, 165, 165, 0.05) !important;
            border-radius: 999px !important;
            color: #1ca5a5 !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            transition: all 0.25s ease !important;
            font-size: 0.88rem !important;
            border: 1px solid rgba(28, 165, 165, 0.1) !important;
        }
        .news-sidebar-all:hover {
            background: linear-gradient(135deg, #1ca5a5, #0f6c75) !important;
            color: #ffffff !important;
            border-color: transparent !important;
            box-shadow: 0 6px 18px rgba(28, 165, 165, 0.2) !important;
        }
        .news-sidebar-empty {
            color: #7b989c !important;
            font-size: 0.95rem !important;
            text-align: center !important;
            margin: 0 !important;
        }
    </style>
</head>
<body class="news-page-body">
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ $logoUrl ?: asset('img/logo-metland-school.png') }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
            </a>
        </div>
        <ul id="primary-nav" class="notranslate">
            <li><a href="{{ url('/') }}" data-en="Home" data-id="Beranda">Home</a></li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    <span data-en="About" data-id="Tentang">About</span> <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="{{ route('Profile') }}" data-en="Campus Profile" data-id="Profil Kampus">Campus Profile</a></li>
                    <li><a href="{{ route('vision-mission') }}" data-en="Vision & Mission" data-id="Visi & Misi">Vision & Mission</a></li>
                    <li><a href="{{ route('sejarah') }}" data-en="History" data-id="Sejarah">History</a></li>
                </ul>
            </li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    <span data-en="Career" data-id="Karier">Career</span> <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="{{ route('LPK') }}">LPK</a></li>
                    <li><a href="{{ route('LKP') }}">LKP</a></li>
                </ul>
            </li>
            <li><a href="{{ route('news.index') }}" data-en="News" data-id="Berita">News</a></li>
            <li><a href="{{ route('testi') }}" data-en="Reviews" data-id="Ulasan">Reviews</a></li>
            <li class="nav-mobile-only"><a href="{{ route('registration.create') }}" data-en="Join Us" data-id="Bergabung">Join Us</a></li>
            <li><a href="{{ url('/') }}#partnership" data-en="Partnership" data-id="Kemitraan">Partnership</a></li>
        
            <li class="nav-mobile-only nav-mobile-lang notranslate">
                <button type="button" onclick="setLanguage('id')" id="mobile-lang-btn-id" class="nav-lang-toggle" data-lang="id">
                    <i class="bi bi-translate"></i> Ganti ke Bahasa
                </button>
                <button type="button" onclick="setLanguage('en')" id="mobile-lang-btn-en" class="nav-lang-toggle" data-lang="en" style="display:none;">
                    <i class="bi bi-translate"></i> Switch to Language
                </button>
            </li>
        </ul>
        <div class="nav-right">
        <div class="sosmed-icon">
            <a href="https://www.youtube.com/@MetlandAcademy" target="_blank" rel="noopener noreferrer" class="icon-youtube" aria-label="YouTube SMK Metland">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@metlandcollege?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class="icon-tiktok" aria-label="TikTok SMK Metland">
                <i class="bi bi-tiktok"></i>
            </a>
            <a href="https://www.instagram.com/metland.college?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="icon-instagram" aria-label="Instagram SMK Metland">
                <i class="bi bi-instagram"></i>
            </a>
        </div>
        <div class="ppdb-btn">
            <button type="button" onclick="window.location.href='{{ route('registration.create') }}'" data-en="Join Us" data-id="Bergabung" class="notranslate">Join Us</button>
        </div>
        <div class="lang-switch notranslate" aria-label="Language switcher">
            <button type="button" onclick="setLanguage('id')" id="lang-btn-id" class="desktop-lang-toggle" data-lang="id">
                <i class="bi bi-translate"></i> Ganti ke Bahasa
            </button>
            <button type="button" onclick="setLanguage('en')" id="lang-btn-en" class="desktop-lang-toggle" data-lang="en" style="display:none;">
                <i class="bi bi-translate"></i> Switch to Language
            </button>
        </div>
    </div>
        <div class="nav-mobile-actions" aria-label="Mobile navigation controls">
            <a href="{{ route('news.index') }}" class="nav-mobile-search" aria-label="Search news">
                <i class="bi bi-search"></i>
            </a>
            <button type="button" class="nav-mobile-menu" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-nav">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>

    <main class="news-detail-page">
        <header class="news-detail-hero">
            <div class="news-detail-hero-inner">
                <h1>{{ $news->localized_title }}</h1>
                <nav class="news-detail-breadcrumb" aria-label="News breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>&rsaquo;</span>
                    <a href="{{ route('news.index') }}">News</a>
                    <span>&rsaquo;</span>
                    <span class="is-current">{{ \Illuminate\Support\Str::limit($news->localized_title, 90) }}</span>
                </nav>
            </div>
        </header>

        <section class="news-detail-content-wrap">
            <div class="news-detail-layout">
                <article class="news-article-card">
                    <div class="news-article-media">
                        <img src="{{ $news->image_url }}" alt="{{ $news->localized_title }}" loading="lazy" decoding="async">
                        <a
                            href="https://wa.me/?text={{ urlencode($news->localized_title . ' - ' . route('news.show', $news->slug)) }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="news-share-button"
                            aria-label="Share to WhatsApp">
                            <i class="bi bi-share-fill"></i>
                        </a>
                    </div>
                    <p class="news-article-meta">
                        <i class="bi bi-person-circle"></i> {{ $news->author?->name ?? 'Administrator' }}
                        <span>&bull;</span>
                        <i class="bi bi-calendar4-week"></i> {{ ($news->published_at ?? $news->created_at)->translatedFormat('d M Y H:i') }}
                    </p>
                    <div class="news-article-text">
                        {!! $news->localized_content !!}
                    </div>
                </article>

                <aside class="news-detail-sidebar">
                    <section class="news-sidebar-card">
                        <h2>Search</h2>
                        <form action="{{ route('news.index') }}" method="GET" class="news-search-form" role="search">
                            <input
                                type="text"
                                name="q"
                                placeholder="Search news"
                                aria-label="Search news">
                            <button type="submit" aria-label="Search">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </section>

                    <section class="news-sidebar-card">
                        <h2>Latest News</h2>
                        <div class="news-sidebar-list">
                            @forelse($sidebarNews as $item)
                                <a href="{{ route('news.show', $item->slug) }}" class="news-sidebar-item {{ $item->id === $news->id ? 'is-active' : '' }}">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" loading="lazy" decoding="async">
                                    <div>
                                        <p class="news-sidebar-item-title">{{ \Illuminate\Support\Str::limit($item->localized_title, 68) }}</p>
                                        <p class="news-sidebar-item-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="news-sidebar-empty">News content will appear here once it is published from the admin panel.</p>
                            @endforelse
                        </div>
                        <a href="{{ route('news.index') }}" class="news-sidebar-all">See All</a>
                    </section>
                </aside>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    @include('partials.whatsapp-fab')
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>
