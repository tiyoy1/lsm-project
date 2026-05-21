<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Latest news and updates from Metland College">
    <title>News - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/LOGO METLAND COLLEGE-02.png') }}?v=20260305">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" media="print" onload="this.media='all'; this.onload=null;" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script defer src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset("img\LOGO METLAND COLLEGE-02.png") }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async">Metland College
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
    <section class="hero">
        <div class="hero-media">
            <div class="swiper hero-swiper" style="width: 100%; height: 100%;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="SMK Metland Cileungsi" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland cibitung.png') }}" alt="SMK Metland Cibitung" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/Kertajati.png') }}" alt="Kertajati" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-content">
            <p class="hero-eyebrow">"Latest Updates & Announcements"</p>
            <h1 class="hero-title">Metland College <br><span>NEWS</span></h1>
            <p>Stay up to date with the latest news, events, activities, and important announcements from Metland College.</p>
            <div class="hero-actions">
                <a href="#content-section" class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <!-- NEWS CONTENT SECTION -->
    <section class="news-content-section" id="content-section">
        <div class="news-content-shell">
            <div class="news-content-header">
                <div class="news-content-header-text">
                    <span class="section-badge">Latest News</span>
                    <h2 class="section-title">Campus Updates & <span>Announcements</span></h2>
                    <p class="section-desc">Discover the latest events, achievements, and important announcements from Metland College.</p>
                </div>
                <form action="{{ route('news.index') }}" method="GET" class="news-content-search" role="search">
                    <div class="news-search-box">
                        <i class="bi bi-search"></i>
                        <input type="text" name="q" value="{{ request('q') }}" placeholder="Search news..." aria-label="Search news">
                        @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                    </div>
                    <button type="submit" class="news-search-btn">Search</button>
                </form>
            </div>
            
            <div class="news-categories" style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 1.5rem; margin-bottom: 2rem; justify-content: center; align-items: center;">
                <span style="font-weight: 600; color: #4b5563; font-size: 0.95rem; margin-right: 5px;"><i class="bi bi-tags-fill" style="margin-right: 4px; color: #0d9488;"></i> Categories:</span>
                <a href="{{ route('news.index', ['q' => request('q')]) }}" class="news-category-badge" style="padding: 6px 16px; border-radius: 20px; background-color: {{ !request('category') ? '#0d9488' : '#f3f4f6' }}; color: {{ !request('category') ? '#fff' : '#4b5563' }}; text-decoration: none; font-weight: 500; font-size: 0.85rem; border: 1px solid {{ !request('category') ? '#0d9488' : '#e5e7eb' }}; transition: all 0.2s ease;">All</a>
                <a href="{{ route('news.index', ['category' => 'career', 'q' => request('q')]) }}" class="news-category-badge" style="padding: 6px 16px; border-radius: 20px; background-color: {{ request('category') == 'career' ? '#0d9488' : '#f3f4f6' }}; color: {{ request('category') == 'career' ? '#fff' : '#4b5563' }}; text-decoration: none; font-weight: 500; font-size: 0.85rem; border: 1px solid {{ request('category') == 'career' ? '#0d9488' : '#e5e7eb' }}; transition: all 0.2s ease;">Career</a>
                <a href="{{ route('news.index', ['category' => 'award', 'q' => request('q')]) }}" class="news-category-badge" style="padding: 6px 16px; border-radius: 20px; background-color: {{ request('category') == 'award' ? '#0d9488' : '#f3f4f6' }}; color: {{ request('category') == 'award' ? '#fff' : '#4b5563' }}; text-decoration: none; font-weight: 500; font-size: 0.85rem; border: 1px solid {{ request('category') == 'award' ? '#0d9488' : '#e5e7eb' }}; transition: all 0.2s ease;">Award</a>
                <a href="{{ route('news.index', ['category' => 'ketenagakerjaan', 'q' => request('q')]) }}" class="news-category-badge" style="padding: 6px 16px; border-radius: 20px; background-color: {{ request('category') == 'ketenagakerjaan' ? '#0d9488' : '#f3f4f6' }}; color: {{ request('category') == 'ketenagakerjaan' ? '#fff' : '#4b5563' }}; text-decoration: none; font-weight: 500; font-size: 0.85rem; border: 1px solid {{ request('category') == 'ketenagakerjaan' ? '#0d9488' : '#e5e7eb' }}; transition: all 0.2s ease;">Ketenagakerjaan</a>
                <a href="{{ route('news.index', ['category' => 'prestasi', 'q' => request('q')]) }}" class="news-category-badge" style="padding: 6px 16px; border-radius: 20px; background-color: {{ request('category') == 'prestasi' ? '#0d9488' : '#f3f4f6' }}; color: {{ request('category') == 'prestasi' ? '#fff' : '#4b5563' }}; text-decoration: none; font-weight: 500; font-size: 0.85rem; border: 1px solid {{ request('category') == 'prestasi' ? '#0d9488' : '#e5e7eb' }}; transition: all 0.2s ease;">Prestasi</a>
            </div>

            @if(request('q'))
                <p class="news-search-result-text">
                    <i class="bi bi-funnel"></i> Showing results for "<strong>{{ request('q') }}</strong>"
                    <a href="{{ route('news') }}" class="news-clear-search"><i class="bi bi-x-circle"></i> Clear</a>
                </p>
            @endif

            @php
                $newsCollection = $latestNews instanceof \Illuminate\Pagination\LengthAwarePaginator ? $latestNews : collect($latestNews);
                $newsItems = $newsCollection instanceof \Illuminate\Pagination\LengthAwarePaginator ? $newsCollection->items() : $newsCollection->all();
                $featuredArticle = count($newsItems) > 0 ? $newsItems[0] : null;
                $gridArticles = array_slice($newsItems, 1);
            @endphp

            @if($featuredArticle)
                {{-- FEATURED ARTICLE --}}
                <article class="news-hero-card">
                    <div class="news-hero-card-media">
                        <img src="{{ $featuredArticle->image_url }}" alt="{{ $featuredArticle->localized_title }}">
                        <span class="news-hero-tag"><i class="bi bi-newspaper"></i> Featured</span>
                    </div>
                    <div class="news-hero-card-body">
                        <div class="news-hero-meta-row">
                            <span class="news-hero-author"><i class="bi bi-person-circle"></i> {{ $featuredArticle->author?->name ?? 'Admin' }}</span>
                            <span class="news-hero-date"><i class="bi bi-calendar4-week"></i> {{ ($featuredArticle->published_at ?? $featuredArticle->created_at)->translatedFormat('d M Y') }}</span>
                        </div>
                        <h3>{{ $featuredArticle->localized_title }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($featuredArticle->localized_content), 260) }}</p>
                        <a href="{{ route('news.show', $featuredArticle->slug) }}" class="news-hero-read-btn">
                            Read Full Article <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>

                {{-- NEWS GRID --}}
                @if(count($gridArticles) > 0)
                    <div class="news-grid">
                        @foreach($gridArticles as $item)
                            <article class="news-card">
                                <div class="news-card-media">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}">
                                    <span class="news-card-tag">News</span>
                                </div>
                                <div class="news-card-body">
                                    <p class="news-card-meta">
                                        <span><i class="bi bi-person-circle"></i> {{ $item->author?->name ?? 'Admin' }}</span>
                                        <span><i class="bi bi-calendar4-week"></i> {{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</span>
                                    </p>
                                    <h4>{{ \Illuminate\Support\Str::limit($item->localized_title, 72) }}</h4>
                                    <p class="news-card-excerpt">{{ \Illuminate\Support\Str::limit(strip_tags($item->localized_content), 120) }}</p>
                                    <a href="{{ route('news.show', $item->slug) }}" class="news-card-link">
                                        Read More <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif

                {{-- PAGINATION --}}
                @if($latestNews instanceof \Illuminate\Pagination\LengthAwarePaginator && $latestNews->hasPages())
                    <nav class="news-pagination" aria-label="News pagination">
                        @if($latestNews->onFirstPage())
                            <span class="news-page-link is-disabled"><i class="bi bi-chevron-left"></i> Previous</span>
                        @else
                            <a href="{{ $latestNews->previousPageUrl() }}" class="news-page-link"><i class="bi bi-chevron-left"></i> Previous</a>
                        @endif

                        @foreach($latestNews->getUrlRange(1, $latestNews->lastPage()) as $page => $url)
                            @if($page == $latestNews->currentPage())
                                <span class="news-page-link is-active">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="news-page-link">{{ $page }}</a>
                            @endif
                        @endforeach

                        @if($latestNews->hasMorePages())
                            <a href="{{ $latestNews->nextPageUrl() }}" class="news-page-link">Next <i class="bi bi-chevron-right"></i></a>
                        @else
                            <span class="news-page-link is-disabled">Next <i class="bi bi-chevron-right"></i></span>
                        @endif
                    </nav>
                @endif

            @else
                {{-- EMPTY STATE --}}
                <div class="news-empty-state">
                    <div class="news-empty-icon">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <h3>No News Published Yet</h3>
                    <p>Stay tuned! Our latest news and announcements will appear here once published.</p>
                    <a href="{{ url('/') }}" class="news-empty-btn">Back to Home</a>
                </div>
            @endif

            <div class="news-view-all-wrap">
                <a href="{{ route('news') }}" class="news-view-all-btn">
                    <i class="bi bi-grid-3x3-gap"></i> View All News Archive
                </a>
            </div>
        </div>
    </section>

        @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>

