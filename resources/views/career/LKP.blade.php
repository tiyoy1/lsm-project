<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKP - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/LOGO METLAND COLLEGE-02.webp') }}?v=20260305">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
            <img src="{{ asset("img\LOGO METLAND COLLEGE-02.webp") }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
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
            <li class="nav-mobile-only"><a href="{{ route('ppdb.create') }}" data-en="Join Us" data-id="Bergabung">Join Us</a></li>
            <li><a href="{{ url('/') }}#partnership" data-en="Partnership" data-id="Kemitraan">Partnership</a></li>
        
            <li class="nav-mobile-only nav-mobile-lang notranslate">
                <button type="button" onclick="setLanguage('id')" id="mobile-lang-btn-id" class="nav-lang-toggle" data-lang="id">
                    <i class="bi bi-translate"></i> Ganti ke Indonesia
                </button>
                <button type="button" onclick="setLanguage('en')" id="mobile-lang-btn-en" class="nav-lang-toggle" data-lang="en" style="display:none;">
                    <i class="bi bi-translate"></i> Switch to English
                </button>
            </li>
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
            <button type="button" onclick="window.location.href='{{ route('ppdb.create') }}'" data-en="Join Us" data-id="Bergabung" class="notranslate">Join Us</button>
        </div>
        <div class="lang-switch notranslate" aria-label="Language switcher">
            <button type="button" onclick="setLanguage('id')" id="lang-btn-id" class="desktop-lang-toggle" data-lang="id">
                <i class="bi bi-translate"></i> Ganti ke Indonesia
            </button>
            <button type="button" onclick="setLanguage('en')" id="lang-btn-en" class="desktop-lang-toggle" data-lang="en" style="display:none;">
                <i class="bi bi-translate"></i> Switch to English
            </button>
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
                </div>
            </div>
        </div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-content">
            <p class="hero-eyebrow">"Training & Course Institution"</p>
            <h1 class="hero-title">Welcome to <br><span>LKP</span></h1>
            <p>Metland College LKP is a training institution that provides education and training for students who want to work abroad.</p>
            <div class="hero-actions">
                <a href="#about-lkp" class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <style>
        /* ===================== LKP SECTION ===================== */
        .lkp-main {
            padding: 100px 0 80px;
            background: #f2fbfb;
            position: relative;
            overflow: hidden;
        }
        .lkp-main::before {
            content: '';
            position: absolute;
            top: -200px; right: -200px;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(28,165,165,0.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .lkp-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
        }

        /* Header */
        .lkp-intro-header {
            text-align: center;
            margin-bottom: 70px;
        }
        .lkp-eyebrow {
            display: inline-block;
            background: linear-gradient(90deg, #1ca5a5, #0f6c75);
            color: #fff;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            padding: 6px 20px;
            border-radius: 50px;
            margin-bottom: 20px;
        }
        .lkp-main-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2.2rem, 5vw, 3.2rem);
            font-weight: 800;
            color: #021a22;
            line-height: 1.15;
            margin-bottom: 18px;
        }
        .lkp-main-title span {
            background: linear-gradient(120deg, #1ca5a5, #0f6c75);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .lkp-main-desc {
            font-size: 1.1rem;
            color: #4a6368;
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Language Sub-header */
        .lkp-lang-subheader {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
            margin-bottom: 50px;
        }
        .lkp-lang-subheader::before,
        .lkp-lang-subheader::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(28,165,165,0.3));
        }
        .lkp-lang-subheader::after {
            background: linear-gradient(90deg, rgba(28,165,165,0.3), transparent);
        }
        .lkp-lang-subheader-text {
            font-family: 'Outfit', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            color: #0f6c75;
            letter-spacing: 2px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        /* Language Cards Grid */
        .lkp-lang-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
            margin-bottom: 80px;
        }

        /* Individual Language Card */
        .lkp-lang-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(10, 40, 50, 0.07);
            border: 1px solid rgba(28,165,165,0.12);
            transition: transform 0.4s cubic-bezier(0.175,0.885,0.32,1.275), box-shadow 0.4s ease, border-color 0.4s ease;
            position: relative;
        }
        .lkp-lang-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 24px 55px rgba(10, 40, 50, 0.14);
            border-color: rgba(28,165,165,0.4);
        }

        /* Card Top Banner with flag */
        .lkp-card-banner {
            height: 110px;
            display: flex;
            align-items: center;
            padding: 0 28px;
            gap: 18px;
            position: relative;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .lkp-card-banner::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.42);
        }
        .lkp-card-flag {
            width: 64px;
            height: 44px;
            object-fit: cover;
            border-radius: 6px;
            position: relative;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(0,0,0,0.4);
            flex-shrink: 0;
        }
        .lkp-card-num {
            font-family: 'Outfit', sans-serif;
            font-size: 4rem;
            font-weight: 900;
            color: rgba(255,255,255,0.18);
            position: absolute;
            right: 20px;
            bottom: -10px;
            z-index: 1;
            line-height: 1;
            pointer-events: none;
        }
        .lkp-card-lang-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.5rem;
            font-weight: 800;
            color: #fff;
            position: relative;
            z-index: 2;
            text-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }

        /* Card Body */
        .lkp-card-body {
            padding: 26px 28px 30px;
        }
        .lkp-card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .lkp-card-body ul li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.97rem;
            color: #2d4a50;
            font-weight: 500;
            line-height: 1.4;
        }
        .lkp-card-body ul li::before {
            content: '•';
            color: #1ca5a5;
            font-weight: 900;
            flex-shrink: 0;
            font-size: 1.1rem;
            margin-top: 1px;
        }

        /* Country-specific banner flag images */
        .lkp-lang-card.english .lkp-card-banner { background-image: url('https://flagcdn.com/w640/gb.png'); }
        .lkp-lang-card.mandarin .lkp-card-banner { background-image: url('https://flagcdn.com/w640/cn.png'); }
        .lkp-lang-card.jepang .lkp-card-banner { background-image: url('https://flagcdn.com/w640/jp.png'); }
        .lkp-lang-card.jerman .lkp-card-banner { background-image: url('https://flagcdn.com/w640/de.png'); }
        .lkp-lang-card.korea .lkp-card-banner { background-image: url('https://flagcdn.com/w640/kr.png'); }
        .lkp-lang-card.arab .lkp-card-banner { background-image: url('https://flagcdn.com/w640/sa.png'); }

        /* =================== BOARDING SECTION =================== */
        

        /* ============ ALUMNI TESTI SECTION ============ */
        .alumni-testi {
            padding: 100px 0;
            background: #f2fbfb;
            position: relative;
            overflow: hidden;
        }
        .alumni-testi::before {
            content: '';
            position: absolute;
            top: -150px; left: 50%;
            transform: translateX(-50%);
            width: 800px; height: 500px;
            background: #f2fbfb;
            pointer-events: none;
        }
        .alumni-testi-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        .alumni-testi-head { text-align: center; margin-bottom: 64px; }
        .alumni-testi-head .section-badge { cursor: default; }
        .alumni-testi-title {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            color: #021a22;
            margin-bottom: 14px;
            line-height: 1.2;
        }
        .alumni-testi-title span {
            background: linear-gradient(120deg, #5fe2e2, #1ca5a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .alumni-testi-desc {
            color: #4a6368;
            font-size: 1.05rem;
            max-width: 580px;
            margin: 0 auto;
            line-height: 1.7;
        }
        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .testi-card {
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
        .testi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(10,40,50,0.12);
            border-color: rgba(28,165,165,0.4);
        }
        .testi-card.is-featured {
            grid-row: span 2;
            background: linear-gradient(160deg, #e8f9f9, #d0f0f0);
            border-color: rgba(28,165,165,0.3);
        }
        .testi-card::before {
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
        .testi-stars { display: flex; gap: 3px; color: #f5a623; font-size: 0.9rem; }
        .testi-quote { font-size: 0.97rem; color: #2d4a50; line-height: 1.75; flex: 1; }
        .testi-card.is-featured .testi-quote { font-size: 1.05rem; }
        .testi-dest {
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
        .testi-dest img { width: 18px; height: 13px; object-fit: cover; border-radius: 2px; }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 14px;
            border-top: 1px solid rgba(28,165,165,0.15);
            padding-top: 18px;
        }
        .testi-avatar {
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
        .testi-author-info h4 { font-size: 0.97rem; font-weight: 700; color: #021a22; margin: 0 0 3px; }
        .testi-author-info p { font-size: 0.8rem; color: #557278; margin: 0; }
        @media (max-width: 900px) {
            .testi-grid { grid-template-columns: 1fr 1fr; }
            .testi-card.is-featured { grid-row: span 1; }
        }
        @media (max-width: 600px) {
            .testi-grid { grid-template-columns: 1fr; }
        }
    </style>


    <section class="lkp-main" id="about-lkp">
      <div class="lkp-shell">

        {{-- ===== Header ===== --}}
        <div class="lkp-intro-header">
            <div class="lkp-eyebrow">Metland College LKP</div>
            <h2 class="lkp-main-title">Foreign Language<br><span> Training Course</span></h2>
            <p class="lkp-main-desc">Metland College LKP provides foreign language courses and training to prepare you to work abroad confidently.</p>
        </div>

        {{-- ===== Language Sub-Header ===== --}}
        <div class="lkp-lang-subheader">
            <span class="lkp-lang-subheader-text">Language Options</span>
        </div>

        {{-- ===== Language Cards ===== --}}
        <div class="lkp-lang-grid">

            {{-- 1. English --}}
            <div class="lkp-lang-card english">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/gb.png" alt="English Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">English</span>
                    <span class="lkp-card-num">1</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>English Course</li>
                        <li>TOEFL Test Focus</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

            {{-- 2. Mandarin --}}
            <div class="lkp-lang-card mandarin">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/cn.png" alt="China Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">Mandarin</span>
                    <span class="lkp-card-num">2</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>Mandarin Course</li>
                        <li>HSK Test Focus</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

            {{-- 3. Jepang --}}
            <div class="lkp-lang-card jepang">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/jp.png" alt="Japan Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">Japanese</span>
                    <span class="lkp-card-num">3</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>Japanese Course</li>
                        <li>JFT Basic A2 / JLPT N4 Focus</li>
                        <li>SSW Exam Preparation*</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

            {{-- 4. Jerman --}}
            <div class="lkp-lang-card jerman">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/de.png" alt="Germany Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">German</span>
                    <span class="lkp-card-num">4</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>German Course</li>
                        <li>A1, A2, and B1 Focus</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

            {{-- 5. Korea --}}
            <div class="lkp-lang-card korea">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/kr.png" alt="Korea Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">Korean</span>
                    <span class="lkp-card-num">5</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>Korean Course</li>
                        <li>TOPIK II Test Focus</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

            {{-- 6. Arab --}}
            <div class="lkp-lang-card arab">
                <div class="lkp-card-banner">
                    <img src="https://flagcdn.com/w160/sa.png" alt="Saudi Arabia Flag" class="lkp-card-flag" loading="lazy" decoding="async">
                    <span class="lkp-card-lang-name">Arabic</span>
                    <span class="lkp-card-num">6</span>
                </div>
                <div class="lkp-card-body">
                    <ul>
                        <li>Arabic Course</li>
                        <li>ALPT B2 Test Focus</li>
                        <li>Interview Mentoring</li>
                    </ul>
                </div>
            </div>

        </div>{{-- /lkp-lang-grid --}}
      </div>
    </section>

    <section class="career-section" id="career-section">
        <div class="career-shell">
            <div class="career-head">
                <span class="section-badge">Training Method</span>
                <h2 class="section-title">From <span>Basic</span> to  <span>Professional</span></h2>
                <p class="section-desc">Structured learning, focus on practice, and supported by industry mentors until ready to enter the workforce.</p>
            </div>
            <div class="career-timeline">
                <span class="career-line" aria-hidden="true"></span>
                <article class="career-step is-left">
                    <span class="career-pill">First Step!</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-journal-bookmark"></i></div>
                        <div>
                            <h3>Pre-Screening Interview</h3>
                            <p>In this early stage, participants undergo a selection process in the form of an interview. The goal is to assess the readiness, interest, and potential of participants before entering the main program.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-right">
                    <span class="career-pill">Second Step!</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-translate"></i></div>
                        <div>
                            <h3>Language Training</h3>
                            <p>After passing selection, participants learn the target language intensively according to their chosen country destination. Focus on conversation, grammar, and vocabulary relevant to the work environment.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-left">
                    <span class="career-pill">Third Step!</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h3>Skill Training</h3>
                            <p>At this stage, participants enter core skill training in their respective fields. The material is technical and practical, ensuring participants have ready-to-use skills in the workforce.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-right">
                    <span class="career-pill">Fourth Step!</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div>
                            <h3>Test Preparation</h3>
                            <p>Participants are prepared to face official language proficiency exams (TOEFL, HSK, JLPT, etc.) and administrative documents required for working abroad, including document and passport preparation.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-left">
                    <span class="career-pill is-finish">Graduate</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-mortarboard"></i></div>
                        <div>
                            <h3>Final Interview</h3>
                            <p>The final stage is the final interview with the client company or employer abroad. This serves as the final assessment to determine if participants are ready for placement.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="alumni-testi" id="alumni-testi">
      <div class="alumni-testi-shell">
        <div class="alumni-testi-head">
            <div class="section-badge">Alumni Reviews</div>
            <h2 class="alumni-testi-title">What Our <span>Alumni Say</span></h2>
            <p class="alumni-testi-desc">Listen to real stories from Metland College LKP alumni who have successfully worked and built careers abroad.</p>
        </div>

        <div class="testi-grid">

            {{-- Card 1 — Featured --}}
            <div class="testi-card is-featured">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag" loading="lazy" decoding="async">
                    Working in Japan
                </div>
                <p class="testi-quote">"I took the Japanese course at LKP Metland and passed JLPT N4 within 6 months. The instructors are very patient and the learning methods are highly effective. I am now working in Osaka and can communicate fluently with Japanese colleagues. Thank you, LKP Metland!"</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #BC002D, #8a001f);">FA</div>
                    <div class="testi-author-info">
                        <h4>Fauzan Alfarizi</h4>
                        <p>Manufacturing Technician — Osaka, Japan</p>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/de.png" alt="Germany Flag" loading="lazy" decoding="async">
                    Working in Germany
                </div>
                <p class="testi-quote">"The German course here is very structured. I managed to pass B1 and immediately got a job in Berlin as a healthcare worker."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #DD0000, #8a0000);">NR</div>
                    <div class="testi-author-info">
                        <h4>Nadia Rahmawati</h4>
                        <p>Nurse — Berlin Hospital, Germany</p>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/kr.png" alt="Korea Flag" loading="lazy" decoding="async">
                    Working in Korea
                </div>
                <p class="testi-quote">"The interview mentoring from LKP was very helpful. I was able to answer the Korean HR's questions confidently and was finally hired."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #003478, #001a3d);">RS</div>
                    <div class="testi-author-info">
                        <h4>Rizal Santoso</h4>
                        <p>Production Operator — Seoul, South Korea</p>
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/sa.png" alt="Saudi Arabia Flag" loading="lazy" decoding="async">
                    Working in Saudi Arabia
                </div>
                <p class="testi-quote">"Learning Arabic at LKP Metland gave me great confidence. I am now working in Riyadh and am appreciated for being able to speak the local language."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #006C35, #003d1e);">YP</div>
                    <div class="testi-author-info">
                        <h4>Yusuf Priyadi</h4>
                        <p>Administrative Staff — Riyadh, Saudi Arabia</p>
                    </div>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/cn.png" alt="China Flag" loading="lazy" decoding="async">
                    Working in China
                </div>
                <p class="testi-quote">"In 5 months I successfully passed HSK 3. The learning method is fun and not boring. Now I work in Shanghai as an interpreter."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #DE2910, #8f1a0a);">DW</div>
                    <div class="testi-author-info">
                        <h4>Dewi Wulandari</h4>
                        <p>Interpreter — Shanghai, China</p>
                    </div>
                </div>
            </div>

        </div>
      </div>
    </section>

        @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>

