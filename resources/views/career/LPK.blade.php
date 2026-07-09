<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK - Metland College</title>
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
    @php
        $careerSteps = [
            [
                'step' => 'First Step!',
                'title' => 'Pre-Screening Interview',
                'icon' => 'bi-journal-bookmark',
                'summary' => 'Initial stage to assess the readiness, interests, and potential of participants before entering the main LPK program.',
                'details' => [
                    'Participant registration is done through the official Metland College portal or directly on campus.',
                    'Participants submit an updated CV and supporting academic or professional documents for initial evaluation.',
                    'Pre-screening interview assesses the suitability of age, work interests, and participant profile with industry needs.',
                    'Placement focus is prepared for overseas job opportunities such as Japan, Germany, Bulgaria, Romania, and Croatia.',
                    'Participants also receive product knowledge education regarding the program, facilities, and available training schemes.',
                ],
                'footer' => 'The output of this stage is participants who pass the initial selection and are ready to enter language briefing and industrial training.',
            ],
            [
                'step' => 'Second Step!',
                'title' => 'English for Industry',
                'icon' => 'bi-people',
                'summary' => 'Work language briefing for professional communication before participants enter the core training.',
                'details' => [
                    'LPK Management sets the training date and sends official summons letters to participants.',
                    'The training venue is coordinated with partner industries so participants understand the location and practice flow.',
                    'Participants attend departure preparations, including meeting points, mobilization times, and luggage.',
                    'A welcoming and dining together event is held to build bonding among participants.',
                    'Participants receive training venue orientation and dormitory check-in before entering intensive learning.',
                ],
                'footer' => 'This stage ensures participants are mentally, administratively, and socially ready before the core training begins.',
            ],
            [
                'step' => 'Third Step!',
                'title' => 'Skill Training',
                'icon' => 'bi-briefcase',
                'summary' => 'Competency-based training focusing on practical skills, periodic evaluation, and foreign language intensification.',
                'details' => [
                    'Day 1 includes PBK program orientation, curriculum introduction, discipline, competency targets, and instructors.',
                    'Day 2 implements a buddy system so participants support each other in the adaptation process.',
                    'Day 3 serves as a vocational practice kick-off using the teaching factory method for hospitality and culinary arts.',
                    'Skill training runs for 3 months with foreign language intensification for 2 months.',
                    'Evaluations are conducted periodically on Day 7, 14, 21, and 28, accompanied by evidence submission to the assessor team.',
                ],
                'footer' => 'Participants are shaped into work-ready individuals strong in technical aspects, discipline, and language.',
            ],
            [
                'step' => 'Fourth Step!',
                'title' => 'On Job Training (OJT)',
                'icon' => 'bi-building',
                'summary' => 'Deployment of participants to partner industries to practice competencies in a real work environment.',
                'details' => [
                    'Participants are placed in partner industries, both domestically and internationally, for hands-on practice.',
                    'The internship duration lasts for 6 months as a familiarization with professional work.',
                    'Participants begin processing international departure documents such as passports, visas, and competency certificates.',
                    'Medical check-ups and legalization of work documents are prepared so the placement process runs smoothly.',
                ],
                'footer' => 'This stage serves as the main bridge from training to real work experience in the industry.',
            ],
            [
                'step' => 'Final Step',
                'title' => 'Final Interview',
                'icon' => 'bi-mortarboard',
                'summary' => 'The final stage consists of industry interviews and departure briefing before job placement.',
                'details' => [
                    'Participants attend a final interview with a user or industry representative from the destination country.',
                    'The pre-departure briefing covers the destination country culture, discipline, labor laws, and mental readiness.',
                    'Participants receive final instructions regarding deployment or departure to the work location.',
                    'This stage determines the participant readiness to be recruited or placed professionally.',
                ],
                'footer' => 'This final stage prepares participants for job placement and full professional departure.',
            ],
        ];
    @endphp
    <nav>
        <div class="logo">
            <img src="{{ asset('img/LOGO METLAND COLLEGE-02.webp') }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
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
                    <i class="bi bi-translate"></i> Ganti ke Bahasa
                </button>
                <button type="button" onclick="setLanguage('en')" id="mobile-lang-btn-en" class="nav-lang-toggle" data-lang="en" style="display:none;">
                    <i class="bi bi-translate"></i> Switch to Language
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
                <i class="bi bi-translate"></i> Ganti ke Bahasa
            </button>
            <button type="button" onclick="setLanguage('en')" id="lang-btn-en" class="desktop-lang-toggle" data-lang="en" style="display:none;">
                <i class="bi bi-translate"></i> Switch to Language
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
            <p class="hero-eyebrow">"Job Training Institution"</p>
            <h1 class="hero-title">Welcome to <br><span>LPK</span></h1>
            <p>Metland College LPK is a job training institution that provides education and training for students who want to work in hospitality.</p>
            <div class="hero-actions">
                <a href="#about-lpk"     class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <style>
        .lpk-section {
            padding: 100px 0;
            background: #f2fbfb;
            color: #0a1a22;
            position: relative;
        }
        .lpk-container {
            width: min(1200px, 92vw);
            margin: 0 auto;
        }

        .section-badge-lpk {
            display: inline-block;
            padding: 8px 24px;
            background: linear-gradient(120deg, rgba(88, 210, 210, 0.15), rgba(88, 210, 210, 0.05));
            border: 2px solid rgba(88, 210, 210, 0.3);
            border-radius: 999px;
            color: #2d8f8f;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 24px;
            font-size: 0.85rem;
        }
        
        /* Intro Section */
        .lpk-intro {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 120px;
        }
        .lpk-intro-text {
            position: relative;
        }
        .lpk-intro-text h2 {
            font-size: 2.8rem;
            font-family: "Outfit", sans-serif;
            color: #021a22; /* very dark tone */
            margin-bottom: 24px;
            font-weight: 800;
            line-height: 1.2;
        }
        .lpk-intro-text h2 span {
            background: linear-gradient(120deg, #1ca5a5, #0f6c75);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .lpk-intro-text p {
            font-size: 1.15rem;
            color: #4a6368;
            line-height: 1.8;
            margin-bottom: 35px;
        }
        
        .lpk-benefits {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .lpk-benefits li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 1.05rem;
            color: #083239;
            font-weight: 600;
            line-height: 1.4;
        }
        .lpk-benefits li i {
            color: #329ba2;
            font-size: 1.4rem;
            margin-top: -2px;
            background: rgba(50, 155, 162, 0.15);
            height: 32px;
            width: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .lpk-image-wrapper {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            padding: 20px;
            box-shadow: 0 24px 48px rgba(8, 50, 57, 0.2);
        }
        
        .lpk-image-swiper {
            width: 100%;
            height: 500px;
            border-radius: 16px;
            overflow: hidden;
        }

        .lpk-image-swiper .swiper-slide {
            overflow: hidden;
        }

        .lpk-image-wrapper .lpk-intro-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .lpk-image-wrapper:hover .lpk-intro-image {
            transform: scale(1.05);
        }

        .lpk-image-pagination {
            bottom: 18px !important;
        }

        .lpk-image-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: rgba(28, 165, 165, 0.28);
            opacity: 1;
            transition: transform 0.25s ease, width 0.25s ease, background-color 0.25s ease;
        }

        .lpk-image-pagination .swiper-pagination-bullet-active {
            width: 28px;
            border-radius: 999px;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75);
            transform: translateY(-1px);
        }
        
        /* Stats */
        .lpk-stats {
            display: flex;
            justify-content: space-around;
            background: linear-gradient(160deg, #0a1a22, #0d2834);
            padding: 40px;
            border-radius: 24px;
            margin-bottom: 120px;
            box-shadow: 0 20px 40px rgba(4, 18, 24, 0.3);
            flex-wrap: wrap;
            gap: 30px;
        }
        .stat-item {
            text-align: center;
            color: #fff;
        }
        .stat-num {
            font-size: 3rem;
            font-weight: 800;
            font-family: "Outfit", sans-serif;
            color: #5fe2e2;
            margin-bottom: 5px;
        }
        .stat-label {
            font-size: 1.05rem;
            color: #badfe0;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Programs Section */
        .program-header {
            text-align: center;
            margin-bottom: 60px;
        }
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }
        .program-card {
            background: #ffffff;
            padding: 45px 35px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(10, 30, 40, 0.04);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(142, 229, 236, 0.2);
            z-index: 1;
        }
        .program-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(160deg, rgba(88, 210, 210, 0.08), transparent);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .program-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #329ba2, #5fe2e2);
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: center;
        }
        .program-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(10, 30, 40, 0.1);
            border-color: rgba(95, 226, 226, 0.5);
        }
        .program-card:hover::before {
            transform: scaleX(1);
        }
        .program-card:hover::after {
            opacity: 1;
        }
        .program-icon {
            font-size: 3.8rem;
            color: #1ca5a5;
            margin-bottom: 25px;
            transition: transform 0.4s ease;
            display: inline-block;
        }
        .program-card:hover .program-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(120deg, #1ca5a5, #0f6c75);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .program-card h3 {
            font-size: 1.5rem;
            margin-bottom: 18px;
            color: #083239;
            font-family: "Outfit", sans-serif;
            font-weight: 700;
        }
        .program-card p {
            color: #557278;
            line-height: 1.7;
            font-size: 0.95rem;
        }

        .lkp-boarding {
            background: linear-gradient(160deg, #061e26, #0d3040);
            border-radius: 32px;
            padding: 60px 70px;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .lkp-boarding::before {
            content: '';
            position: absolute;
            top: -100px; right: -100px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(95,226,226,0.12) 0%, transparent 70%);
            pointer-events: none;
        }
        .lkp-boarding::after {
            content: '';
            position: absolute;
            bottom: -80px; left: -80px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(28,165,165,0.1) 0%, transparent 70%);
            pointer-events: none;
        }
        .lkp-boarding-inner {
            position: relative;
            z-index: 2;
        }
        .lkp-boarding-head {
            display: flex;
            align-items: center;
            gap: 18px;
        }
        .lkp-boarding-icon {
            width: 60px; height: 60px;
            background: linear-gradient(135deg, #1ca5a5, #5fe2e2);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: #fff;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(28,165,165,0.4);
            margin-top: -55px;
        }
        .lkp-boarding-title-wrap h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fff;
            margin: 0 0 4px;
        }
        .lkp-boarding-title-wrap p {
            color: #81c5c7;
            font-size: 0.95rem;
            margin: 0;
        }
        .lkp-boarding-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }
        .lkp-boarding-item {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 14px;
            padding: 16px 20px;
            transition: background 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
        }
        .lkp-boarding-item:hover {
            background: rgba(95,226,226,0.1);
            border-color: rgba(95,226,226,0.3);
            transform: translateX(5px);
        }
        .lkp-boarding-item-icon {
            font-size: 1.5rem;
            color: #5fe2e2;
            flex-shrink: 0;
        }
        .lkp-boarding-item-text {
            font-size: 0.97rem;
            color: #cce9ea;
            font-weight: 500;
            line-height: 1.4;
        }
        .lkp-boarding-item-text strong {
            color: #fff;
            display: block;
            font-size: 1rem;
            margin-bottom: 2px;
        }
        .lkp-boarding-note {
            margin-top: 22px;
            font-size: 1.2rem;
            color: #fff;
            font-style: italic;
            padding-top: 10px;
            left: -17%;
        }

        @media (max-width: 992px) {
            .lkp-boarding { padding: 45px 30px; }
            .lkp-lang-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 576px) {
            .lkp-boarding-head { flex-direction: column; align-items: flex-start; }
        }
        
        /* Extra Section: Pathway */
        .lpk-pathway {
            margin-top: 120px;
            background: linear-gradient(160deg, #0a1a22, #0d2834);
            padding: 80px 60px;
            border-radius: 40px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(4, 18, 24, 0.3);
        }
        .pathway-bg {
            position: absolute;
            top: -50%; left: -10%;
            width: 120%; height: 200%;
            background: radial-gradient(circle at center, rgba(88,210,210,0.1) 0%, transparent 60%);
            pointer-events: none;
        }
        .lpk-pathway h2 {
            font-size: 2.5rem;
            font-family: "Outfit", sans-serif;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        .lpk-pathway p {
            font-size: 1.15rem;
            color: #b3d4d6;
            max-width: 700px;
            margin: 0 auto 50px;
            position: relative;
            line-height: 1.6;
            z-index: 2;
        }
        .pathway-steps {
            display: flex;
            justify-content: center;
            gap: 40px;
            position: relative;
            z-index: 2;
            flex-wrap: wrap;
        }
        .pathway-step {
            flex: 1;
            min-width: 200px;
            max-width: 250px;
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            padding: 40px 20px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        .pathway-step:hover {
            transform: translateY(-10px);
            background: rgba(255,255,255,0.06);
            border-color: rgba(95,226,226,0.3);
        }
        .step-icon {
            font-size: 2.5rem;
            color: #5fe2e2;
            margin-bottom: 20px;
        }
        .step-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff;
        }
        .step-desc {
            font-size: 0.95rem;
            color: #92babb;
        }

        @media (max-width: 992px) {
            .lpk-intro {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 36px;
                margin-bottom: 60px;
            }
            .lpk-benefits {
                grid-template-columns: 1fr;
                text-align: left;
                max-width: 500px;
                margin: 0 auto;
            }
            .lpk-stats {
                padding: 30px 20px;
            }
            .lpk-pathway {
                padding: 50px 30px;
            }
            .lpk-image-swiper {
                height: 360px;
            }
        }

        @media (max-width: 768px) {
            .lpk-section {
                padding: 60px 0;
            }
            .lpk-intro {
                gap: 28px;
                margin-bottom: 40px;
            }
            .lpk-intro-text h2 {
                font-size: 2rem;
                margin-bottom: 16px;
            }
            .lpk-intro-text p {
                font-size: 1rem;
                margin-bottom: 24px;
            }
            .lpk-image-swiper {
                height: 280px;
            }
            .lpk-image-wrapper {
                padding: 12px;
            }
            .lpk-benefits li {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 480px) {
            .lpk-section {
                padding: 48px 0;
            }
            .lpk-intro {
                gap: 22px;
                margin-bottom: 30px;
            }
            .lpk-intro-text h2 {
                font-size: 1.6rem;
            }
            .lpk-intro-text p {
                font-size: 0.93rem;
            }
            .lpk-image-swiper {
                height: 220px;
            }
        }
    </style>

    <section class="lpk-section" id="about-lpk">
      <div class="lpk-container">
        
        <!-- Intro -->
        <div class="lpk-intro">
            <div class="lpk-intro-text">
                <h2>Brilliant Tourism Industry at <br><span>Metland College LPK</span></h2>
                <p>Metland College LPK (Job Training Institution) is the right solution for those who want to be quickly absorbed by the hospitality industry. With a practical curriculum and exclusive guidance from hotel practitioners, we are ready to hone your competence to reach international standards.</p>
                <ul class="lpk-benefits">
                    <li><i class="bi bi-award"></i> BNSP Certified</li>
                    <li><i class="bi bi-building-check"></i> Overseas Job Placement</li>
                    <li><i class="bi bi-person-video3"></i> Expert Practitioner Instructors</li>
                    <li><i class="bi bi-briefcase"></i> Exclusive Internship Program (OJT)</li>
                </ul>
            </div>
            <div class="lpk-image-wrapper">
                <div class="swiper lpk-image-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="SMK Metland Cileungsi" class="lpk-intro-image" loading="lazy" decoding="async">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/SMK Metland cibitung.webp') }}" alt="SMK Metland Cibitung" class="lpk-intro-image" loading="lazy" decoding="async">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/kertajati.webp') }}" alt="Kertajati" class="lpk-intro-image" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-pagination lpk-image-pagination" aria-hidden="true"></div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="lpk-stats">
            <div class="stat-item">
                <div class="stat-num">95%</div>
                <div class="stat-label">Employed Graduates</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">50+</div>
                <div class="stat-label">Hotel Partners</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">100%</div>
                <div class="stat-label">Industry Standard</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">6 mo</div>
                <div class="stat-label">Estimated Training</div>
            </div>
        </div>

        <!-- Programs -->
        <div class="program-header">
            <div class="section-header" style="margin-bottom: 0;">
                <div class="section-badge">Featured Programs</div>
                <h2 class="section-title">Training Program Options</h2>
                <p class="section-desc">Choose the right vocational program to realize your dream career in the hospitality world.</p>
            </div>
        </div>
        
        <div class="program-grid">
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-cup-hot"></i></div>
                <h3>Food & Beverage Service</h3>
                <p>Learning banquet procedures, serving food and beverages to international fine dining standards, and mixology.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-egg-fried"></i></div>
                <h3>Culinary</h3>
                <p>Mastering professional cooking techniques, from introducing local ingredients to preparing continental and oriental dishes.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-person-vcard"></i></div>
                <h3>Front Office</h3>
                <p>The art of serving guests with high hospitality, managing reservations, and professional front office operational skills.</p>
            </div>
            <div class="program-card">
                <div class="program-card-inner"></div>
                <div class="program-icon"><i class="bi bi-house-door"></i></div>
                <h3>Housekeeping</h3>
                <p>Housekeeping management focused on maintaining cleanliness, guest room comfort, and hotel hygiene standards.</p>
            </div>
        </div>

        <!-- Pathway -->
        <div class="lpk-pathway">
            <div class="pathway-bg"></div>
            <h2>Steps to Success</h2>
            <p>The Metland College LPK training system is specially designed so that every student can transform from a beginner into a work-ready professional.</p>
            <div class="pathway-steps">
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-book"></i></div>
                    <div class="step-title">Training</div>
                    <div class="step-desc">Basic theoretical and practical training in hotel facilities.</div>
                </div>
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-briefcase-fill"></i></div>
                    <div class="step-title">On Job Training</div>
                    <div class="step-desc">Direct internship in our 4 & 5 star partner hotels.</div>
                </div>
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-shield-check"></i></div>
                    <div class="step-title">Competency Test</div>
                    <div class="step-desc">BNSP standard proficiency certification.</div>
                </div>
                <div class="pathway-step">c
                    <div class="step-icon"><i class="bi bi-building"></i></div>
                    <div class="step-title">Job Placement</div>
                    <div class="step-desc">Recruitment process assistance to the hospitality industry network.</div>
                </div>
            </div>

            <hr style="border-color: rgba(255,255,255,0.1); margin: 60px 0;">

            <!-- Boarding Section -->
            <div class="lkp-boarding-inner" style="text-align: left;">
                <div class="lkp-boarding-head">
                    <div class="lkp-boarding-icon">
                        <i class="bi bi-house-heart"></i>
                    </div>
                    <div class="lkp-boarding-title-wrap">
                        <h3>Boarding Class Available</h3>
                        <p>Complete facilities to support your intensive learning process</p>
                    </div>
                </div>
                <div class="lkp-boarding-grid">
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="bi bi-building"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong>Dormitory</strong>
                        </div>
                    </div>
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="bi bi-egg-fried"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong>Lunch</strong>
                            Available every study day
                        </div>
                    </div>
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="bi bi-person-badge"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong>Training Uniform</strong>
                        </div>
                    </div>
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="bi bi-book"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong>Training Modules</strong>
                        </div>
                    </div>
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="ph-fill ph-washing-machine"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong> Uniform Laundry </strong>
                        </div>
                    </div>
                    <div class="lkp-boarding-item">
                        <span class="lkp-boarding-item-icon"><i class="bi bi-award"></i></span>
                        <div class="lkp-boarding-item-text">
                            <strong> Table Manner </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="career-section" id="career-section">
        <div class="career-shell">
            <div class="career-head">
                <span class="section-badge notranslate" data-en="Training Method" data-id="Alur Pelatihan">Training Method</span>
                <h2 class="section-title">From <span>Basic</span> to <span>Professional</span></h2> 
                <p class="section-desc">Structured learning, focus on practice, and supported by industry mentors until ready to enter the workforce.</p>
            </div>
            <div class="career-timeline" id="lpk-content">
                <span class="career-line" aria-hidden="true"></span>
                @foreach($careerSteps as $index => $step)
                    <article class="career-step {{ $index % 2 === 0 ? 'is-left' : 'is-right' }}">
                        <span class="career-pill {{ $step['step'] === 'Final Step' ? 'is-finish' : '' }}">{{ $step['step'] }}</span>
                        <button
                            type="button"
                            class="career-card career-card-trigger"
                            data-career-index="{{ $index }}"
                            aria-label="Open details for {{ $step['title'] }}"
                        >
                            <div class="career-icon"><i class="bi {{ $step['icon'] }}"></i></div>
                            <div class="career-card-copy">
                                <h3>{{ $step['title'] }}</h3>
                                <p>{{ $step['summary'] }}</p>
                                <span class="career-card-link">Click to view details <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </button>
                    </article>
                @endforeach
            </div>
            <div class="career-timeline" id="lkp-content" style="display: none; align-items: center; justify-content: center; min-height: 250px; text-align: center;">
                <div class="career-card" style="width: 100%; max-width: 500px; margin: 0 auto; flex-direction: column; align-items: center;">
                    <div class="career-icon"><i class="bi bi-clock-history"></i></div>
                    <div style="margin-top: 10px;">
                        <h3>Coming Soon</h3>
                        <p>Content for Training Method (LKP) is currently being drafted and will be available soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="career-modal" id="careerModal" aria-hidden="true">
        <div class="career-modal-backdrop" data-career-modal-close></div>
        <div class="career-modal-panel" role="dialog" aria-modal="true" aria-labelledby="careerModalTitle">
            <button type="button" class="career-modal-close" data-career-modal-close aria-label="Close details">
                <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>
            <p class="career-modal-step" id="careerModalStep"></p>
            <h3 class="career-modal-title" id="careerModalTitle"></h3>
            <p class="career-modal-summary" id="careerModalSummary"></p>
            <div class="career-modal-body">
                <ul class="career-modal-list" id="careerModalList"></ul>
            </div>
            <div class="career-modal-footer" id="careerModalFooter"></div>
        </div>
    </div>

    <style>
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
        .alumni-testi-head {
            text-align: center;
            margin-bottom: 64px;
        }
        .alumni-testi-head .section-badge {
            cursor: default;
        }
        .alumni-testi-badge {
            display: inline-block;
            background: rgba(28,165,165,0.12);
            border: 1px solid rgba(28,165,165,0.35);
            color: #0f6c75;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            padding: 6px 20px;
            border-radius: 50px;
            margin-bottom: 20px;
        }
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

        /* Quote Grid */
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
        /* Featured (tall) card */
        .testi-card.is-featured {
            grid-row: span 2;
            background: linear-gradient(160deg, #e8f9f9, #d0f0f0);
            border-color: rgba(28,165,165,0.3);
        }
        /* Quote mark decoration */
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

        /* Stars */
        .testi-stars {
            display: flex;
            gap: 3px;
            color: #f5a623;
            font-size: 0.9rem;
        }

        /* Quote text */
        .testi-quote {
            font-size: 0.97rem;
            color: #2d4a50;
            line-height: 1.75;
            flex: 1;
        }
        .testi-card.is-featured .testi-quote {
            font-size: 1.05rem;
        }

        /* Destination badge */
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
        .testi-dest img {
            width: 18px;
            height: 13px;
            object-fit: cover;
            border-radius: 2px;
        }

        /* Author row */
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
        .testi-author-info h4 {
            font-size: 0.97rem;
            font-weight: 700;
            color: #021a22;
            margin: 0 0 3px;
        }
        .testi-author-info p {
            font-size: 0.8rem;
            color: #557278;
            margin: 0;
        }

        @media (max-width: 900px) {
            .testi-grid { grid-template-columns: 1fr 1fr; }
            .testi-card.is-featured { grid-row: span 1; }
        }
        @media (max-width: 600px) {
            .testi-grid { grid-template-columns: 1fr; }
        }
    </style>

    <section class="alumni-testi" id="alumni-testi">
      <div class="alumni-testi-shell">
        <div class="alumni-testi-head">
            <div class="section-badge">Alumni Reviews</div>
            <h2 class="alumni-testi-title">What Our <span>Alumni Say</span></h2>
            <p class="alumni-testi-desc">Dengarkan pengalaman nyata dari alumni LPK Metland College yang kini telah sukses bekerja di industri perhotelan.</p>
        </div>

        <div class="testi-grid">

            {{-- Card 1 — Featured (tall) --}}
            <div class="testi-card is-featured">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag" loading="lazy" decoding="async">
                    Bekerja di Jepang
                </div>
                <p class="testi-quote">"Awalnya saya tidak punya pengalaman apapun di bidang hospitality. Tapi setelah mengikuti program LPK Metland, saya mendapat bekal yang sangat lengkap — mulai dari skill teknis, bahasa Inggris industri, sampai etika kerja profesional. Alhamdulillah sekarang saya sudah bekerja di hotel bintang 5 di Tokyo dan sangat bersyukur atas kesempatan ini."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #1ca5a5, #0f6c75);">AR</div>
                    <div class="testi-author-info">
                        <h4>Andi Ramadhan</h4>
                        <p>Front Office — Hotel Shinjuku, Tokyo</p>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/ae.png" alt="UAE Flag" loading="lazy" decoding="async">
                    Bekerja di Dubai
                </div>
                <p class="testi-quote">"Program OJT-nya luar biasa. Saya langsung magang di hotel bintang 5 dan dari sana langsung direkrut. Trainer-nya sangat profesional dan sabar."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #e07b39, #c45c10);">SN</div>
                    <div class="testi-author-info">
                        <h4>Siti Nurhayati</h4>
                        <p>F&B Service — Atlantis The Palm, Dubai</p>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/sg.png" alt="Singapore Flag" loading="lazy" decoding="async">
                    Bekerja di Singapura
                </div>
                <p class="testi-quote">"Materi English for Industry benar-benar game changer. Saya jadi lebih percaya diri saat interview dan berkomunikasi dengan tamu internasional."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #7c3aed, #5b21b6);">DP</div>
                    <div class="testi-author-info">
                        <h4>Dian Pratiwi</h4>
                        <p>Housekeeping — Marina Bay Sands</p>
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/au.png" alt="Australia Flag" loading="lazy" decoding="async">
                    Bekerja di Australia
                </div>
                <p class="testi-quote">"Sertifikasi kompetensi yang saya dapat dari LPK Metland diakui langsung oleh hotel tempat saya bekerja sekarang di Melbourne."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #059669, #047857);">RH</div>
                    <div class="testi-author-info">
                        <h4>Rizky Hidayat</h4>
                        <p>Culinary — Crown Melbourne</p>
                    </div>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-dest">
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag" loading="lazy" decoding="async">
                    Bekerja di Jepang
                </div>
                <p class="testi-quote">"Proses seleksi dan bimbingan dari LPK sangat terstruktur. Tim pengajarnya tulus membantu setiap peserta berkembang hingga siap kerja."</p>
                <div class="testi-author">
                    <div class="testi-avatar" style="background: linear-gradient(135deg, #db2777, #9d174d);">LA</div>
                    <div class="testi-author-info">
                        <h4>Laila Azzahra</h4>
                        <p>Front Office — Keio Plaza Hotel, Tokyo</p>
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
    <script>
        window.addEventListener("load", () => {
            const lpkImageRoot = document.querySelector(".lpk-image-swiper");
            if (lpkImageRoot && typeof window.Swiper !== "undefined") {
                // eslint-disable-next-line no-new
                new window.Swiper(lpkImageRoot, {
                    slidesPerView: 1,
                    loop: true,
                    speed: 1400,
                    parallax: true,
                    autoplay: {
                        delay: 3600,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".lpk-image-pagination",
                        clickable: true,
                    },
                });
            }
        });

        (() => {
            const careerSteps = @json($careerSteps);
            const modal = document.getElementById('careerModal');
            const titleEl = document.getElementById('careerModalTitle');
            const summaryEl = document.getElementById('careerModalSummary');
            const listEl = document.getElementById('careerModalList');
            const footerEl = document.getElementById('careerModalFooter');
            const stepEl = document.getElementById('careerModalStep');
            const triggers = document.querySelectorAll('.career-card-trigger');
            let lastActiveElement = null;

            if (!modal || !titleEl || !summaryEl || !listEl || !footerEl || !stepEl || !triggers.length) {
                return;
            }

            const openModal = (trigger) => {
                const stepIndex = Number.parseInt(trigger.dataset.careerIndex || '0', 10);
                const stepData = careerSteps[stepIndex];

                if (!stepData) {
                    return;
                }

                lastActiveElement = document.activeElement;
                stepEl.textContent = stepData.step || '';
                titleEl.textContent = stepData.title || '';
                summaryEl.textContent = stepData.summary || '';
                footerEl.textContent = stepData.footer || '';
                listEl.innerHTML = '';
                (stepData.details || []).forEach((point) => {
                    const item = document.createElement('li');
                    item.textContent = point;
                    listEl.appendChild(item);
                });

                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('career-modal-open');

                const closeButton = modal.querySelector('.career-modal-close');
                if (closeButton) {
                    closeButton.focus();
                }
            };

            const closeModal = () => {
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('career-modal-open');

                if (lastActiveElement && typeof lastActiveElement.focus === 'function') {
                    lastActiveElement.focus();
                }
            };

            triggers.forEach((trigger) => {
                trigger.addEventListener('click', () => openModal(trigger));
            });

            modal.querySelectorAll('[data-career-modal-close]').forEach((element) => {
                element.addEventListener('click', closeModal);
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && modal.classList.contains('is-open')) {
                    closeModal();
                }
            });
        })();
    </script>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>
