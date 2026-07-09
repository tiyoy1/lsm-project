<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Testimonials and reviews from alumni of Metland College">
    <title>Testimonials - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/logo-metland-school.png') }}?v=20260305">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" media="print" onload="this.media='all'; this.onload=null;">
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
            <a href="{{ url('/') }}">
                <img src="{{ asset("img/logo-metland-school.png") }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
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
    <section class="hero">
        <div class="hero-media">
            <div class="swiper hero-swiper" style="width: 100%; height: 100%;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="SMK Metland Cileungsi" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/SMK Metland cibitung.webp') }}" alt="SMK Metland Cibitung" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/Kertajati.webp') }}" alt="Kertajati" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/horison_ultima_bekasi.webp') }}" alt="Horison Ultima Bekasi" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/seva_seminyak_badung.webp') }}" alt="Seva Seminyak Badung" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-content">
            <p class="hero-eyebrow">"What They Say About Us"</p>
            <h1 class="hero-title">Alumni<br><span>REVIEWS</span></h1>
            <p>Hear from our alumni and students about their experiences, achievements, and journeys with Metland College.</p>
            <div class="hero-actions">
                <a href="#content-section" class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <style>
        /* ============ TESTI PAGE — QUOTE GRID ============ */
        .testi-page {
            padding: 100px 0 80px;
            background: #f2fbfb;
            position: relative;
            overflow: hidden;
        }
        .testi-page::before {
            content: '';
            position: absolute;
            top: -200px; right: -200px;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(28,165,165,0.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .testi-page-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .testi-page-head { text-align: center; margin-bottom: 64px; }
        .testi-page-head .section-badge { cursor: default; }
        .testi-page-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            color: #021a22;
            margin-bottom: 14px;
            line-height: 1.2;
        }
        .testi-page-title span {
            background: linear-gradient(120deg, #5fe2e2, #1ca5a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .testi-page-desc {
            color: #4a6368;
            font-size: 1.05rem;
            max-width: 620px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Reuse testi-grid / testi-card from LKP (already in style.css or inline) */
        .testi-page .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .testi-page .testi-card {
            background: #ffffff;
            border: 1px solid rgba(28,165,165,0.15);
            border-radius: 20px;
            padding: 32px 28px;
            position: relative;
            transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
            display: flex;
            flex-direction: column;
            gap: 18px;
            box-shadow: 0 6px 24px rgba(10,40,50,0.06);
        }
        .testi-page .testi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(10,40,50,0.12);
            border-color: rgba(28,165,165,0.4);
        }
        .testi-page .testi-card.is-featured {
            grid-row: span 2;
            background: linear-gradient(160deg, #e8f9f9, #d0f0f0);
            border-color: rgba(28,165,165,0.3);
        }
        .testi-page .testi-card::before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 5rem;
            line-height: 1;
            color: rgba(28,165,165,0.12);
            position: absolute;
            top: 14px;
            right: 22px;
            pointer-events: none;
        }
        .testi-page .testi-stars { display: flex; gap: 3px; color: #f5a623; font-size: 0.9rem; }
        .testi-page .testi-quote { font-size: 0.97rem; color: #2d4a50; line-height: 1.75; flex: 1; }
        .testi-page .testi-card.is-featured .testi-quote { font-size: 1.05rem; }
        .testi-page .testi-dest {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(28,165,165,0.1);
            border: 1px solid rgba(28,165,165,0.25);
            border-radius: 50px;
            padding: 4px 12px;
            font-size: 0.78rem;
            font-weight: 600;
            color: #0f6c75;
            width: fit-content;
        }
        .testi-page .testi-dest img { width: 18px; height: 13px; object-fit: cover; border-radius: 2px; }
        .testi-page .testi-author {
            display: flex;
            align-items: center;
            gap: 14px;
            border-top: 1px solid rgba(28,165,165,0.15);
            padding-top: 18px;
        }
        .testi-page .testi-avatar {
            width: 46px; height: 46px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Outfit', sans-serif;
            font-size: 1.1rem;
            font-weight: 800;
            color: #fff;
            flex-shrink: 0;
        }
        .testi-page .testi-author-info h4 { font-size: 0.97rem; font-weight: 700; color: #021a22; margin: 0 0 3px; }
        .testi-page .testi-author-info p { font-size: 0.8rem; color: #557278; margin: 0; }

        /* Category Filter Tabs */
        .testi-filter-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }
        .testi-filter-btn {
            appearance: none;
            border: 1px solid rgba(28,165,165,0.3);
            background: #fff;
            color: #0f6c75;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .testi-filter-btn:hover {
            background: rgba(28,165,165,0.08);
            border-color: rgba(28,165,165,0.5);
        }
        .testi-filter-btn.is-active {
            background: linear-gradient(135deg, #1ca5a5, #0f6c75);
            color: #fff;
            border-color: transparent;
            box-shadow: 0 6px 18px rgba(28,165,165,0.3);
        }

        @media (max-width: 900px) {
            .testi-page .testi-grid { grid-template-columns: 1fr 1fr; }
            .testi-page .testi-card.is-featured { grid-row: span 1; }
        }
        @media (max-width: 600px) {
            .testi-page { padding: 80px 0 60px; }
            .testi-page-head { margin-bottom: 24px; }
            .testi-page-title { font-size: clamp(1.5rem, 6vw, 2rem); }
            .testi-page-desc { font-size: 0.9rem; }

            /* Filters: single-row horizontal scroll */
            .testi-filter-tabs {
                flex-wrap: nowrap;
                overflow-x: auto;
                justify-content: flex-start;
                padding-bottom: 10px;
                scrollbar-width: none;
                gap: 8px;
            }
            .testi-filter-tabs::-webkit-scrollbar { display: none; }
            .testi-filter-btn {
                white-space: nowrap;
                flex-shrink: 0;
                font-size: 0.8rem;
                padding: 7px 16px;
            }

            /* Cards: single column, no horizontal scroll */
            .testi-page .testi-grid {
                display: grid;
                grid-template-columns: 1fr;
                overflow-x: visible;
                gap: 16px;
                padding-bottom: 0;
            }
            .testi-page .testi-card {
                min-width: unset;
                width: 100%;
                scroll-snap-align: unset;
                flex-shrink: unset;
                padding: 22px 18px;
            }
            .testi-page .testi-card.is-featured { grid-row: span 1; }
            .testi-page .testi-quote { font-size: 0.9rem; }
            .testi-page .testi-card.is-featured .testi-quote { font-size: 0.93rem; }
        }

        /* ============ WHY CHOOSE SECTION (Complement) ============ */
        .why-choose-section {
            padding: 90px 0 100px;
            background: #061e26;
            position: relative;
            overflow: hidden;
        }
        .why-choose-section::before {
            content: '';
            position: absolute;
            top: -120px; right: -120px;
            width: 500px; height: 500px;
            pointer-events: none;
        }
        .why-choose-section::after {
            content: '';
            position: absolute;
            bottom: -100px; left: -100px;
            width: 400px; height: 400px;
            pointer-events: none;
        }
        .why-choose-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .why-choose-head {
            text-align: center;
            margin-bottom: 60px;
        }
        .why-choose-head .section-badge { cursor: default; }
        .why-choose-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 14px;
            line-height: 1.2;
        }
        .why-choose-title span {
            background: linear-gradient(120deg, #5fe2e2, #1ca5a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .why-choose-desc {
            color: #81c5c7;
            font-size: 1.05rem;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Stats Row */
        .why-choose-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 60px;
        }
        .why-stat-card {
            text-align: center;
            padding: 36px 20px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            transition: transform 0.35s ease, border-color 0.35s ease, background 0.35s ease;
        }
        .why-stat-card:hover {
            transform: translateY(-6px);
            border-color: rgba(95,226,226,0.3);
            background: rgba(95,226,226,0.06);
        }
        .why-stat-num {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.2rem, 5vw, 3rem);
            font-weight: 900;
            background: linear-gradient(120deg, #5fe2e2, #1ca5a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 6px;
            display: block;
        }
        .why-stat-label {
            color: #9cd1d3;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Feature Highlights Grid */
        .why-choose-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .why-feature-card {
            padding: 34px 28px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            transition: transform 0.35s ease, border-color 0.35s ease, background 0.35s ease;
        }
        .why-feature-card:hover {
            transform: translateY(-6px);
            border-color: rgba(95,226,226,0.3);
            background: rgba(95,226,226,0.06);
        }
        .why-feature-icon {
            width: 54px; height: 54px;
            background: linear-gradient(135deg, #1ca5a5, #5fe2e2);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(28,165,165,0.35);
        }
        .why-feature-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: #fff;
            margin: 0 0 10px;
        }
        .why-feature-card p {
            color: #8fbfc1;
            font-size: 0.93rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 900px) {
            .why-choose-stats { grid-template-columns: repeat(2, 1fr); }
            .why-choose-features { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .why-choose-stats { grid-template-columns: 1fr 1fr; gap: 14px; }
            .why-choose-features { grid-template-columns: 1fr; }
            .why-choose-section { padding: 70px 0 80px; }
            .why-stat-card { padding: 26px 16px; }
        }

        /* ============ ALUMNI REVIEWS INFO SECTION ============ */
        .alumni-reviews-info {
            padding: 20px 1.25rem 30px;
            background: #f2fbfb;
            position: relative;
            text-align: center;
        }

        .alumni-reviews-shell {
            width: min(1180px, 92vw);
            margin: 0 auto;
        }

        .alumni-reviews-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .alumni-reviews-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 7px 16px;
            border-radius: 999px;
            font-size: 0.78rem;
            letter-spacing: 0.1em;
            font-weight: bold;
            text-transform: uppercase;
            color: #1b7f86;
            border: 1px solid rgba(39, 167, 173, 0.35);
            background: rgba(112, 223, 227, 0.26);
        }

        .alumni-reviews-title {
            margin: 8px 0;
            color: #1a3a3f;
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .alumni-reviews-title span {
            color: #0e8389;
        }

        .alumni-reviews-desc {
            margin: 0;
            color: #5a7880;
            font-size: 1rem;
            line-height: 1.65;
            max-width: 720px;
            margin: 12px auto 0;
        }

        @media (max-width: 768px) {
            .alumni-reviews-info {
                padding: 15px 1.25rem 20px;
            }

            .alumni-reviews-title {
                font-size: 1.8rem;
            }

            .alumni-reviews-desc {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 480px) {
            .alumni-reviews-info {
                padding: 12px 1.25rem 15px;
            }

            .alumni-reviews-title {
                font-size: 1.5rem;
            }

            .alumni-reviews-desc {
                font-size: 0.9rem;
            }
        }
    </style>

    {{-- ======= ALUMNI REVIEWS DESCRIPTION SECTION ======= --}}
    <section class="alumni-reviews-info">
        <div class="alumni-reviews-shell">
            <div class="alumni-reviews-header">
            </div>
        </div>
    </section>

    {{-- ======= TESTIMONIAL GRID SECTION ======= --}}
    <section class="testi-page" id="content-section">
      <div class="testi-page-shell">
        <div class="testi-page-head">
            <div class="section-badge">Alumni Reviews</div>
            <h2 class="testi-page-title">What Our <span>Alumni Say</span></h2>
            <p class="testi-page-desc">Real stories from Metland College graduates who have built successful careers in hospitality, language proficiency, and international work placements.</p>
        </div>

        {{-- Filter Tabs --}}
        <div class="testi-filter-tabs">
            <button class="testi-filter-btn is-active" data-filter="all">All</button>
            <button class="testi-filter-btn" data-filter="hospitality">Hospitality</button>
            <button class="testi-filter-btn" data-filter="language">Language Course</button>
            <button class="testi-filter-btn" data-filter="international">International</button>
        </div>

        <div class="testi-grid">

            {{-- Card 1 — Featured (Hospitality) --}}
            <div class="testi-card is-featured" data-category="hospitality">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <i class="bi bi-building"></i>
                    Hospitality Graduate
                </div>
                <p class="testi-quote">"Belajar di Metland College benar-benar mengubah hidup saya. Dari yang awalnya tidak tahu apa-apa tentang hospitality, sekarang saya sudah bisa bekerja di hotel bintang 5. Praktik langsung di Hotel Metland SMARA Kertajati memberikan pengalaman nyata yang tidak bisa didapat di tempat lain. Guru-guru di sini sangat suportif dan selalu mendorong kami untuk terus berkembang."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #1ca5a5, #0f6c75);">RP</div>
                    <div class="testi-author-info">
                        <h4>Rafi Pratama</h4>
                        <p>Front Desk Officer — Hotel Ayana Midplaza</p>
                    </div>
                </div>
            </div>

            {{-- Card 2 (Language) --}}
            <div class="testi-card" data-category="language">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag" loading="lazy" decoding="async">
                    Bekerja di Jepang
                </div>
                <p class="testi-quote">"Saya ikut kursus Bahasa Jepang di LKP Metland dan dalam 6 bulan berhasil lulus JLPT N4. Sekarang saya sudah bekerja di Osaka dan bisa berkomunikasi dengan lancar."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #BC002D, #8a001f);">FA</div>
                    <div class="testi-author-info">
                        <h4>Fauzan Alfarizi</h4>
                        <p>Teknisi Manufaktur — Osaka, Jepang</p>
                    </div>
                </div>
            </div>

            {{-- Card 3 (International) --}}
            <div class="testi-card" data-category="international">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/de.png" alt="Germany Flag" loading="lazy" decoding="async">
                    Bekerja di Jerman
                </div>
                <p class="testi-quote">"Kursus Bahasa Jerman di sini sangat terstruktur. Saya berhasil lulus B1 dan langsung dapat kerja di Berlin sebagai tenaga kesehatan."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #DD0000, #8a0000);">NR</div>
                    <div class="testi-author-info">
                        <h4>Nadia Rahmawati</h4>
                        <p>Perawat — Rumah Sakit Berlin, Jerman</p>
                    </div>
                </div>
            </div>

            {{-- Card 4 (Hospitality) --}}
            <div class="testi-card" data-category="hospitality">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <i class="bi bi-cup-hot"></i>
                    F&B Service Graduate
                </div>
                <p class="testi-quote">"Materi praktiknya relevan dengan industri, jadi saat lulus saya lebih percaya diri masuk dunia kerja. Training di teaching factory sangat membantu."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #2e7d32, #1b5e20);">DM</div>
                    <div class="testi-author-info">
                        <h4>Dimas Mahendra</h4>
                        <p>F&B Supervisor — The Ritz-Carlton Jakarta</p>
                    </div>
                </div>
            </div>

            {{-- Card 5 (International) --}}
            <div class="testi-card" data-category="international">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/kr.png" alt="Korea Flag" loading="lazy" decoding="async">
                    Bekerja di Korea
                </div>
                <p class="testi-quote">"Pendampingan interview dari LKP sangat membantu. Saya bisa menjawab pertanyaan HRD Korea dengan percaya diri dan akhirnya diterima kerja."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #003478, #001a3d);">RS</div>
                    <div class="testi-author-info">
                        <h4>Rizal Santoso</h4>
                        <p>Operator Produksi — Seoul, Korea Selatan</p>
                    </div>
                </div>
            </div>

            {{-- Card 6 (Hospitality) --}}
            <div class="testi-card" data-category="hospitality">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <i class="bi bi-door-open"></i>
                    Housekeeping Graduate
                </div>
                <p class="testi-quote">"Kegiatan organisasi dan ekstrakurikuler mengajarkan saya kerja tim, komunikasi, dan kepemimpinan. Sekarang saya menjadi Head of Housekeeping."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #6a1b9a, #4a0072);">AR</div>
                    <div class="testi-author-info">
                        <h4>Alya Ramadhani</h4>
                        <p>Head Housekeeping — Shangri-La Hotel</p>
                    </div>
                </div>
            </div>

            {{-- Card 7 — Featured (Language) --}}
            <div class="testi-card is-featured" data-category="language">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/cn.png" alt="China Flag" loading="lazy" decoding="async">
                    Bekerja di China
                </div>
                <p class="testi-quote">"Dalam 5 bulan saya berhasil lulus HSK 3. Metode belajarnya menyenangkan dan tidak membosankan. Sekarang saya kerja di Shanghai sebagai interpreter. LKP Metland memberikan fondasi bahasa yang sangat kuat dan juga mempersiapkan mental kami untuk beradaptasi di lingkungan kerja internasional. Highly recommended!"</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #DE2910, #8f1a0a);">DW</div>
                    <div class="testi-author-info">
                        <h4>Dewi Wulandari</h4>
                        <p>Interpreter — Shanghai, Tiongkok</p>
                    </div>
                </div>
            </div>

            {{-- Card 8 (International) --}}
            <div class="testi-card" data-category="international">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/sa.png" alt="Saudi Arabia Flag" loading="lazy" decoding="async">
                    Bekerja di Arab Saudi
                </div>
                <p class="testi-quote">"Belajar bahasa Arab di LKP Metland memberi saya kepercayaan diri. Saya kini bekerja di Riyadh dan dihargai karena bisa berbahasa lokal."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #006C35, #003d1e);">YP</div>
                    <div class="testi-author-info">
                        <h4>Yusuf Priyadi</h4>
                        <p>Staf Administrasi — Riyadh, Arab Saudi</p>
                    </div>
                </div>
            </div>

            {{-- Card 9 (Hospitality) --}}
            <div class="testi-card" data-category="hospitality">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <div class="testi-dest">
                    <i class="bi bi-mortarboard"></i>
                    SMK Metland Alumni
                </div>
                <p class="testi-quote">"SMK Metland memberikan pengalaman belajar yang seimbang antara teori, praktik, dan karakter. Saya bangga menjadi alumni."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #1565c0, #0d47a1);">FS</div>
                    <div class="testi-author-info">
                        <h4>Fikri Saputra</h4>
                        <p>Concierge — Kempinski Hotel Jakarta</p>
                    </div>
                </div>
            </div>

        </div>
      </div>
	    </section>

        {{-- ======= SUBMIT TESTIMONIAL FORM (PUBLIC) ======= --}}
        <section class="container" id="submit" style="max-width: 980px; margin: 0 auto 80px;">
            <div class="testi-page-head" style="margin-bottom: 28px;">
                <div class="testi-page-badge">Submit</div>
                <h2 class="testi-page-title">Submit Your <span>Testimonial</span></h2>
                <p class="testi-page-desc notranslate" data-id="Testimoni kamu akan tampil setelah ditinjau dan disetujui admin." data-en="Your testimonial will appear after being reviewed and approved by the admin.">Testimoni kamu akan tampil setelah ditinjau dan disetujui admin.</p>
            </div>

            @if(session('testimonial_success'))
                <div class="alert alert-success">{{ session('testimonial_success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('testi.store') }}" method="POST" enctype="multipart/form-data" class="card shadow-sm">
                @csrf
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Name</label>
                            <input class="form-control" name="name" value="{{ old('name') }}" required maxlength="255" placeholder="Full name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Photo (optional)</label>
                            <input class="form-control" type="file" name="photo" accept="image/*">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Program</label>
                            <div class="d-flex gap-4 mt-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program-lkp" value="LKP" @checked(old('program') === 'LKP')>
                                    <label class="form-check-label" for="program-lkp">LKP</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="program" id="program-lpk" value="LPK" @checked(old('program') === 'LPK')>
                                    <label class="form-check-label" for="program-lpk">LPK</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Current Job (optional)</label>
                            <input class="form-control" name="current_job" value="{{ old('current_job') }}" maxlength="255" placeholder="Current role">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Company (optional)</label>
                            <input class="form-control" name="company" value="{{ old('company') }}" maxlength="255" placeholder="Company name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">*Rating</label>
                            <select class="form-select" name="rating" required>
                                @for($i = 5; $i >= 1; $i--)
                                    <option value="{{ $i }}" @selected((int) old('rating', 5) === $i)>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Testimonial</label>
                            <textarea class="form-control" name="testimonial" rows="6" required maxlength="4000" placeholder="Write your testimonial...">{{ old('testimonial') }}</textarea>
                        </div>
                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </section>

	    {{-- ======= WHY CHOOSE SECTION (Complement) ======= --}}
	    <section class="why-choose-section">
	        <div class="why-choose-shell">
            <div class="why-choose-head">
                <div class="section-badge">Why Choose Us</div>
                <h2 class="why-choose-title">Trusted by <span>Hundreds of Alumni</span></h2>
                <p class="why-choose-desc">Numbers don't lie. Here's why Metland College is the top choice for hospitality and language training.</p>
            </div>

            {{-- Stats --}}
            <div class="why-choose-stats">
                <div class="why-stat-card">
                    <span class="why-stat-num">500+</span>
                    <span class="why-stat-label">Successful Alumni</span>
                </div>
                <div class="why-stat-card">
                    <span class="why-stat-num">15+</span>
                    <span class="why-stat-label">Partner Hotels</span>
                </div>
                <div class="why-stat-card">
                    <span class="why-stat-num">6</span>
                    <span class="why-stat-label">Language Programs</span>
                </div>
                <div class="why-stat-card">
                    <span class="why-stat-num">98%</span>
                    <span class="why-stat-label">Satisfaction Rate</span>
                </div>
            </div>

            {{-- Feature Highlights --}}
            <div class="why-choose-features">
                <div class="why-feature-card">
                    <div class="why-feature-icon"><i class="bi bi-award"></i></div>
                    <h4>Industry-Certified Training</h4>
                    <p>All our programs are certified and recognized by national and international hospitality standards.</p>
                </div>
                <div class="why-feature-card">
                    <div class="why-feature-icon"><i class="bi bi-globe-americas"></i></div>
                    <h4>Global Work Placement</h4>
                    <p>We connect our graduates to career opportunities in Japan, Germany, Korea, China, Saudi Arabia, and more.</p>
                </div>
                <div class="why-feature-card">
                    <div class="why-feature-icon"><i class="bi bi-people"></i></div>
                    <h4>Dedicated Mentorship</h4>
                    <p>Each student gets personal guidance from experienced industry mentors throughout their learning journey.</p>
                </div>
            </div>
        </div>
    </section>

        @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script>
    <script src="{{ asset("js/script.js") }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js" defer></script>
    <script>
        // Testimonial Filter Tabs
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.testi-filter-btn');
            const cards = document.querySelectorAll('.testi-page .testi-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('is-active'));
                    btn.classList.add('is-active');

                    const filter = btn.dataset.filter;

                    cards.forEach(card => {
                        const category = card.dataset.category;
                        if (filter === 'all' || category === filter) {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(12px) scale(0.97)';
                            card.style.display = '';
                            requestAnimationFrame(() => {
                                setTimeout(() => {
                                    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0) scale(1)';
                                }, 50);
                            });
                        } else {
                            card.style.transition = 'opacity 0.25s ease, transform 0.25s ease';
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(8px) scale(0.97)';
                            setTimeout(() => { card.style.display = 'none'; }, 260);
                        }
                    });
                });
            });
        });
    </script>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
    @include('partials.whatsapp-fab')
</body>
</html>
