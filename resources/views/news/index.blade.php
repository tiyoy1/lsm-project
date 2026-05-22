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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('ui.news.title') }} - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ $faviconUrl ?: asset('img/LOGO METLAND COLLEGE-02.webp') . '?v=20260305' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; }
        .news-page-body {
            background: #f2fbfb !important;
            font-family: "Outfit", sans-serif;
        }
        nav {
            /* start transparent on page load; darken once user scrolls */
            background: transparent !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            box-shadow: none !important;
            transition: background-color 0.28s ease, backdrop-filter 0.28s ease, box-shadow 0.28s ease !important;
        }

        /* Applied when the page is scrolled */
        .nav-scrolled {
            background-color: rgba(7, 23, 31, 0.58) !important;
            backdrop-filter: blur(10px) !important;
            -webkit-backdrop-filter: blur(10px) !important;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.28) !important;
        }
        .news-page-main {
            padding-top: 60px !important;
            padding-bottom: 80px !important;
            width: min(1200px, 92vw) !important;
            margin: 0 auto !important;
        }
        .news-page-head {
            margin-bottom: 50px !important;
            text-align: center !important;
        }
        .news-page-home-link {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            color: #1ca5a5 !important;
            text-decoration: none !important;
            font-weight: 600 !important;
            font-size: 0.9rem !important;
            margin-bottom: 24px !important;
            transition: all 0.25s ease !important;
            background: rgba(28, 165, 165, 0.06) !important;
            padding: 8px 20px !important;
            border-radius: 999px !important;
            border: 1px solid rgba(28, 165, 165, 0.12) !important;
        }
        .news-page-home-link:hover {
            background: rgba(28, 165, 165, 0.12) !important;
            transform: translateX(-4px) !important;
            color: #0f6c75 !important;
        }
        .news-page-head h1 {
            font-family: 'Sora', sans-serif !important;
            font-weight: 800 !important;
            color: #0f6c75 !important;
            font-size: clamp(2.2rem, 5vw, 3.4rem) !important;
            margin: 0 0 12px 0 !important;
            letter-spacing: -0.8px !important;
            line-height: 1.15 !important;
        }
        .news-page-head p {
            font-family: 'Outfit', sans-serif !important;
            font-size: 1.15rem !important;
            color: #5b7579 !important;
            max-width: 600px !important;
            margin: 0 auto !important;
            line-height: 1.6 !important;
        }
        .news-search-inline {
            max-width: 650px !important;
            /* lift the search box up to overlap the hero slightly */
            margin: -80px auto 50px !important;
            background: #ffffff !important;
            padding: 6px !important;
            border-radius: 999px !important;
            box-shadow: 0 10px 30px rgba(15, 108, 117, 0.05) !important;
            border: 1px solid rgba(28, 165, 165, 0.12) !important;
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
        }
        .news-search-inline input {
            flex: 1 !important;
            height: 48px !important;
            border: none !important;
            background: transparent !important;
            padding: 0 24px !important;
            font-size: 1rem !important;
            color: #0f6c75 !important;
            outline: none !important;
            box-shadow: none !important;
            font-family: 'Outfit', sans-serif !important;
        }
        .news-search-inline input::placeholder {
            color: #9cb2b5 !important;
        }
        .news-search-inline button {
            width: 48px !important;
            height: 48px !important;
            border-radius: 50% !important;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75) !important;
            color: #ffffff !important;
            border: none !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            transition: all 0.25s ease !important;
            box-shadow: 0 4px 12px rgba(28, 165, 165, 0.2) !important;
        }
        .news-search-inline button:hover {
            transform: scale(1.05) !important;
            box-shadow: 0 6px 18px rgba(28, 165, 165, 0.3) !important;
        }
        .news-search-result {
            text-align: center !important;
            font-size: 1.05rem !important;
            color: #5b7579 !important;
            margin-top: -30px !important;
            margin-bottom: 40px !important;
        }
        .news-search-result strong {
            color: #0f6c75 !important;
        }
        .news-clear-search {
            color: #b64858 !important;
            text-decoration: none !important;
            margin-left: 10px !important;
            font-weight: 600 !important;
            font-size: 0.9rem !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 4px !important;
        }
        .news-clear-search:hover {
            text-decoration: underline !important;
        }
        .news-page-grid {
            display: grid !important;
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            gap: 30px !important;
            margin-top: 20px !important;
        }
        @media (max-width: 992px) {
            .news-page-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }
        }
        @media (max-width: 600px) {
            .news-page-grid {
                grid-template-columns: 1fr !important;
                gap: 24px !important;
            }
        }
        .news-page-card {
            background: #ffffff !important;
            border: 1px solid rgba(28, 165, 165, 0.06) !important;
            border-radius: 20px !important;
            overflow: hidden !important;
            box-shadow: 0 12px 35px rgba(15, 108, 117, 0.03) !important;
            transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1) !important;
            display: flex !important;
            flex-direction: column !important;
            height: 100% !important;
        }
        .news-page-card:hover {
            transform: translateY(-8px) !important;
            box-shadow: 0 24px 48px rgba(15, 108, 117, 0.08) !important;
            border-color: rgba(28, 165, 165, 0.2) !important;
        }
        .news-page-media {
            position: relative !important;
            height: 230px !important;
            overflow: hidden !important;
        }
        .news-page-media img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            transition: transform 0.6s ease !important;
        }
        .news-page-card:hover .news-page-media img {
            transform: scale(1.08) !important;
        }
        .news-page-tag {
            position: absolute !important;
            top: 16px !important;
            right: 16px !important;
            bottom: auto !important;
            background: rgba(28, 165, 165, 0.95) !important;
            color: #ffffff !important;
            font-size: 0.72rem !important;
            font-weight: 700 !important;
            padding: 5px 12px !important;
            border-radius: 999px !important;
            letter-spacing: 0.05em !important;
            text-transform: uppercase !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12) !important;
        }
        .news-page-content {
            padding: 24px !important;
            display: flex !important;
            flex-direction: column !important;
            flex: 1 !important;
        }
        .news-page-content h2 {
            font-family: 'Sora', sans-serif !important;
            font-weight: 700 !important;
            color: #0d464c !important;
            font-size: 1.25rem !important;
            line-height: 1.4 !important;
            margin: 0 0 12px 0 !important;
            transition: color 0.25s ease !important;
        }
        .news-page-card:hover .news-page-content h2 {
            color: #1ca5a5 !important;
        }
        .news-page-meta {
            color: #7b989c !important;
            font-size: 0.85rem !important;
            gap: 12px !important;
            margin-bottom: 16px !important;
            display: flex !important;
            align-items: center !important;
            flex-wrap: wrap !important;
        }
        .news-page-meta i {
            color: #1ca5a5 !important;
        }
        .news-page-content p {
            color: #5b7579 !important;
            font-size: 0.95rem !important;
            line-height: 1.65 !important;
            margin: 0 0 24px 0 !important;
            flex: 1 !important;
        }
        .news-page-btn {
            align-self: flex-start !important;
            margin-top: auto !important;
            padding: 10px 24px !important;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75) !important;
            border-radius: 999px !important;
            color: #ffffff !important;
            font-size: 0.88rem !important;
            font-weight: 600 !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 6px !important;
            text-decoration: none !important;
            transition: all 0.25s ease !important;
            box-shadow: 0 4px 15px rgba(28, 165, 165, 0.15) !important;
        }
        .news-page-btn:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 20px rgba(28, 165, 165, 0.25) !important;
            color: #ffffff !important;
        }
        .news-page-pagination {
            margin-top: 50px !important;
            gap: 10px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }
        .news-page-page {
            min-width: 42px !important;
            height: 42px !important;
            border-radius: 50% !important;
            border: 1px solid rgba(28, 165, 165, 0.15) !important;
            color: #0f6c75 !important;
            background: #ffffff !important;
            transition: all 0.25s ease !important;
            font-size: 0.92rem !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-weight: 600 !important;
            text-decoration: none !important;
        }
        .news-page-page:hover:not(.is-disabled):not(.is-active) {
            background: rgba(28, 165, 165, 0.08) !important;
            color: #1ca5a5 !important;
            border-color: #1ca5a5 !important;
        }
        .news-page-page.is-active {
            background: linear-gradient(135deg, #1ca5a5, #0f6c75) !important;
            border-color: transparent !important;
            color: #ffffff !important;
            box-shadow: 0 4px 12px rgba(28, 165, 165, 0.25) !important;
        }
        .news-page-page.is-disabled {
            color: #b3c5c7 !important;
            border-color: rgba(28, 165, 165, 0.08) !important;
            background: rgba(28, 165, 165, 0.02) !important;
            pointer-events: none !important;
        }
        .news-page-empty {
            background: #ffffff !important;
            border: 1px solid rgba(28, 165, 165, 0.1) !important;
            border-radius: 20px !important;
            padding: 60px 40px !important;
            box-shadow: 0 10px 30px rgba(15, 108, 117, 0.04) !important;
            max-width: 600px !important;
            margin: 40px auto 0 !important;
            text-align: center !important;
        }
        .news-page-empty h2 {
            color: #0d464c !important;
            font-family: 'Sora', sans-serif !important;
            font-weight: 700 !important;
            margin: 0 0 12px 0 !important;
        }
        .news-page-empty p {
            color: #5b7579 !important;
            font-size: 1.05rem !important;
            margin: 0 !important;
        }

        /* ── News Hero Section ── */
        .news-hero {
            position: relative;
            /* match home hero: full viewport height */
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0a1a22;
        }
        .news-hero-media {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0.75;
        }
        .news-hero-media .swiper,
        .news-hero-media .swiper-wrapper,
        .news-hero-media .swiper-slide {
            width: 100%;
            height: 100%;
        }
        .news-hero-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .news-hero-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(4, 18, 24, 0.2), rgba(5, 16, 22, 0.7)),
                radial-gradient(circle at 45% 35%, rgba(0, 0, 0, 0.1), rgba(5, 18, 24, 0.72));
            z-index: 1;
        }
        .news-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #f4fbff;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            width: min(92vw, 780px);
            padding: 2.4rem 2.8rem;
            animation: newsHeroReveal 650ms ease-out forwards;
            transform: translateY(6px);
            opacity: 0;
        }
        .news-hero-eyebrow {
            margin: 0;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.32rem;
            text-transform: uppercase;
            color: rgba(225, 249, 252, 0.95);
        }
        .news-hero-title {
            margin: 0;
            font-size: clamp(2.2rem, 6vw, 4.5rem);
            line-height: 1.05;
            font-family: "Outfit", sans-serif;
            font-weight: 800;
            letter-spacing: -0.02em;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.55), 0 0 16px rgba(66, 176, 176, 0.2);
        }
        .news-hero-title span {
            color: #5fe2e2;
        }
        .news-hero-content p {
            font-size: 1.1rem;
            color: rgba(225, 249, 252, 0.85);
            max-width: 550px;
            line-height: 1.6;
        }
        .news-hero-btn {
            color: #ffffff;
            text-decoration: none;
            padding: 11px 26px;
            border-radius: 999px;
            border: 1px solid #50d6d6;
            overflow: hidden;
            transition: all 0.2s ease;
            letter-spacing: 0.08em;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            background: linear-gradient(120deg, #50d6d6, #2fa1a8);
            box-shadow: 0 8px 18px rgba(11, 92, 92, 0.32);
        }
        .news-hero-btn:hover {
            opacity: 0.85;
            box-shadow: 0 12px 24px rgba(24, 126, 126, 0.45);
            color: #ffffff;
        }
        @keyframes newsHeroReveal {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @media (max-width: 600px) {
            .news-hero {
                min-height: 55vh;
            }
            .news-hero-content {
                padding: 1.5rem;
            }
        }
        /* Reveal animation for news cards when scrolled into view */
        .news-page-grid .news-page-card {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity 480ms cubic-bezier(.2,.9,.2,1), transform 480ms cubic-bezier(.2,.9,.2,1);
        }
        .news-page-grid .news-page-card.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        /* Responsive: remove negative lift on small screens */
        @media (max-width: 768px) {
            .news-search-inline {
                margin: 0 auto 20px !important;
                width: calc(100% - 32px) !important;
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
        }
    </style>
</head>
<body class="news-page-body">
    <nav>
        <div class="logo">
            <img src="{{ $logoUrl ?: asset('img/LOGO METLAND COLLEGE-02.webp') }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async">Metland College
        </div>
        <ul id="primary-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    About <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="{{ route('Profile') }}">Campus Profile</a></li>
                    <li><a href="{{ route('vision-mission') }}">Vision & Mission</a></li>
                    <li><a href="{{ route('sejarah') }}">History</a></li>
                </ul>
            </li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    Career <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="{{ route('LPK') }}">LPK</a></li>
                    <li><a href="{{ route('LKP') }}">LKP</a></li>
                </ul>
            </li>
            <li><a href="{{ route('news.index') }}">News</a></li>
            <li><a href="{{ route('testi') }}">Reviews</a></li>
            <li class="nav-mobile-only"><a href="{{ route('ppdb.create') }}">Join Us</a></li>
            <li><a href="{{ url('/') }}#partnership">Partnership</a></li>
        </ul>
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
            <button type="button" onclick="window.location.href='{{ route('ppdb.create') }}'">Join Us</button>
        </div>
        <div class="lang-switch" aria-label="Pengalih bahasa">
            <a href="{{ route('language.switch', 'id') }}" class="{{ app()->getLocale() === 'id' ? 'is-active' : '' }}">ID</a>
            <a href="{{ route('language.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'is-active' : '' }}">EN</a>
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

    {{-- ── NEWS HERO SECTION ── --}}
    <section class="news-hero">
        <div class="news-hero-media">
            <div class="swiper news-hero-swiper" style="width: 100%; height: 100%;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="SMK Metland Cileungsi" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland cibitung.webp') }}" alt="SMK Metland Cibitung" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/Kertajati.webp') }}" alt="Kertajati" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        <div class="news-hero-overlay" aria-hidden="true"></div>
        <div class="news-hero-content">
            <p class="news-hero-eyebrow">"Latest Updates & Announcements"</p>
            <h1 class="news-hero-title">Metland College <br><span>NEWS</span></h1>
            <p>Stay up to date with the latest news, events, activities, and important announcements from Metland College.</p>
            <a href="#news-content" class="news-hero-btn">See more</a>
        </div>
    </section>

    <main class="news-page-main" id="news-content">
        <header class="news-page-head">
            <h2>{{ __('ui.news.title') }}</h2>
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
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
        </form>
        <div class="news-categories" style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: -20px; margin-bottom: 40px; justify-content: center; align-items: center;">
            <a href="{{ route('news.index', ['q' => request('q')]) }}" style="padding: 8px 20px; border-radius: 20px; background-color: {{ !request('category') ? '#0f6c75' : '#ffffff' }}; color: {{ !request('category') ? '#ffffff' : '#5b7579' }}; text-decoration: none; font-weight: 500; font-size: 0.95rem; border: 1px solid {{ !request('category') ? '#0f6c75' : 'rgba(28, 165, 165, 0.2)' }}; transition: all 0.25s ease; box-shadow: {{ !request('category') ? '0 4px 12px rgba(15, 108, 117, 0.2)' : 'none' }};">All</a>
            <a href="{{ route('news.index', ['category' => 'career', 'q' => request('q')]) }}" style="padding: 8px 20px; border-radius: 20px; background-color: {{ request('category') == 'career' ? '#0f6c75' : '#ffffff' }}; color: {{ request('category') == 'career' ? '#ffffff' : '#5b7579' }}; text-decoration: none; font-weight: 500; font-size: 0.95rem; border: 1px solid {{ request('category') == 'career' ? '#0f6c75' : 'rgba(28, 165, 165, 0.2)' }}; transition: all 0.25s ease; box-shadow: {{ request('category') == 'career' ? '0 4px 12px rgba(15, 108, 117, 0.2)' : 'none' }};">Career</a>
            <a href="{{ route('news.index', ['category' => 'award', 'q' => request('q')]) }}" style="padding: 8px 20px; border-radius: 20px; background-color: {{ request('category') == 'award' ? '#0f6c75' : '#ffffff' }}; color: {{ request('category') == 'award' ? '#ffffff' : '#5b7579' }}; text-decoration: none; font-weight: 500; font-size: 0.95rem; border: 1px solid {{ request('category') == 'award' ? '#0f6c75' : 'rgba(28, 165, 165, 0.2)' }}; transition: all 0.25s ease; box-shadow: {{ request('category') == 'award' ? '0 4px 12px rgba(15, 108, 117, 0.2)' : 'none' }};">Award</a>
        </div>
        @if(!empty($search))
            <p class="news-search-result">{{ __('ui.news.search_result_for', ['query' => $search]) }}</p>
        @endif

        @if($news->count())
            <section class="news-page-grid" aria-label="{{ __('ui.news.list_aria') }}">
                @foreach($news as $item)
                    <article class="news-page-card">
                        <div class="news-page-media">
                            <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" loading="lazy" decoding="async">
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

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var newsHeroEl = document.querySelector('.news-hero-swiper');
            if (newsHeroEl && typeof Swiper !== 'undefined') {
                new Swiper(newsHeroEl, {
                    slidesPerView: 1,
                    loop: true,
                    speed: 3500,
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                });
            }

            // Navbar: start transparent, darken on scroll
            var navEl = document.querySelector('nav');
            function updateNavScroll() {
                if (!navEl) return;
                if (window.scrollY > 20) {
                    navEl.classList.add('nav-scrolled');
                } else {
                    navEl.classList.remove('nav-scrolled');
                }
            }
            // Initialize state and bind scroll handler
            updateNavScroll();
            window.addEventListener('scroll', function() { requestAnimationFrame(updateNavScroll); });

            // Reveal news cards when they scroll into view
            var newsCards = document.querySelectorAll('.news-page-card');
            if (newsCards.length) {
                if ('IntersectionObserver' in window) {
                    var obs = new IntersectionObserver(function(entries, observer) {
                        entries.forEach(function(entry) {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                observer.unobserve(entry.target);
                            }
                        });
                    }, { threshold: 0.12 });
                    newsCards.forEach(function(card) { obs.observe(card); });
                } else {
                    newsCards.forEach(function(card) { card.classList.add('is-visible'); });
                }
            }
        });
    </script>
    <a
        class="whatsapp-fab"
        href="https://wa.me/{{ $whatsappNumber }}"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat via WhatsApp"
        title="Chat via WhatsApp"
    >
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
        <span class="whatsapp-fab-tooltip">Hubungi kami!</span>
    </a>
</body>
</html>

