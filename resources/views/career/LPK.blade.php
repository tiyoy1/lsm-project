<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK - Metland College</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/LOGO METLAND COLLEGE-02.png') }}?v=20260305">
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
            <img src="{{ asset("img\LOGO METLAND COLLEGE-02.png") }}" alt="Logo Metland College" class="logo-img">Metland College
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
            <li><a href="{{ route('news') }}">News</a></li>
            <li><a href="{{ route('testi') }}">Testimonials</a></li>
            <li class="nav-mobile-only"><a href="{{ route('ppdb.create') }}">Join Us</a></li>
            <li><a href="{{ url('/') }}#contact">Contact</a></li>
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
            <a href="{{ route('news') }}" class="nav-mobile-search" aria-label="Search news">
                <i class="bi bi-search"></i>
            </a>
            <button type="button" class="nav-mobile-menu" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primary-nav">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>
    <section class="hero">
        <div class="hero-media">
            <video
                src="{{ asset('video/COMPANY PROFILE 2026.mp4') }}"
                poster="{{ asset('img/Kertajati.png') }}"
                preload="auto"
                autoplay
                muted
                loop
                playsinline
            ></video>
        </div>
        <div class="hero-poster" aria-hidden="true">
            <img src="{{ asset('img/Kertajati.png') }}" alt="">
        </div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-content">
            <p class="hero-eyebrow">"Lembaga Pelatihan Kerja"</p>
            <h1 class="hero-title">Welcome to <br><span>LPK</span></h1>
            <p>LPK Metland College adalah lembaga pelatihan kerja yang menyediakan pendidikan dan pelatihan untuk siswa yang ingin bekerja di hospitality.</p>
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
        
        .lpk-image-wrapper .lpk-intro-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 16px;
            display: block;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .lpk-image-wrapper:hover .lpk-intro-image {
            transform: scale(1.05);
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
            .lpk-intro-image img {
                height: auto;
            }
        }
    </style>

    <section class="lpk-section" id="about-lpk">
      <div class="lpk-container">
        
        <!-- Intro -->
        <div class="lpk-intro">
            <div class="lpk-intro-text">
                <h2>Bina Karir Cemerlang di <br><span>LPK Metland College</span></h2>
                <p>Lembaga Pelatihan Kerja (LPK) Metland College merupakan solusi tepat bagi kamu yang ingin cepat diserap oleh industri hospitality. Dengan kurikulum praktis dan bimbingan eksklusif dari praktisi perhotelan, kami siap mengasah kompetensimu hingga mencapai standar internasional.</p>
                <ul class="lpk-benefits">
                    <li><i class="bi bi-award"></i> Sertifikasi Kompetensi Resmi</li>
                    <li><i class="bi bi-building-check"></i> Penyaluran ke Hotel Berbintang</li>
                    <li><i class="bi bi-person-video3"></i> Instruktur Praktisi Ahli</li>
                    <li><i class="bi bi-briefcase"></i> Program Magang (OJT) Eksklusif</li>
                </ul>
            </div>
            <div class="lpk-image-wrapper">
                <img src="{{ asset('img/kertajati.png') }}" alt="LPK Metland College" class="lpk-intro-image">
            </div>
        </div>

        <!-- Stats -->
        <div class="lpk-stats">
            <div class="stat-item">
                <div class="stat-num">95%</div>
                <div class="stat-label">Lulusan Bekerja</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">50+</div>
                <div class="stat-label">Mitra Hotel</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">100%</div>
                <div class="stat-label">Standar Industri</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">6 bln</div>
                <div class="stat-label">Waktu Pelatihan</div>
            </div>
        </div>

        <!-- Programs -->
        <div class="program-header">
            <div class="section-header" style="margin-bottom: 0;">
                <div class="section-badge" style="margin: 0 auto 15px;">Program Unggulan</div>
                <h2 class="section-title">Pilihan Program Pelatihan</h2>
                <p class="section-desc" style="margin-left: auto; margin-right: auto;">Pilih program vokasi yang tepat untuk mewujudkan karir impianmu di dunia perhotelan.</p>
            </div>
        </div>
        
        <div class="program-grid">
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-cup-hot"></i></div>
                <h3>Food & Beverage Service</h3>
                <p>Mempelajari tata cara perjamuan, penyajian makanan dan minuman berstandar fine dining internasional serta mixology.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-egg-fried"></i></div>
                <h3>Culinary Arts</h3>
                <p>Menguasai teknik memasak profesional, mulai dari pengenalan bahan masakan lokal hingga pengolahan hidangan kontinental dan oriental.</p>
            </div>
            <div class="program-card">
                <div class="program-icon"><i class="bi bi-person-vcard"></i></div>
                <h3>Front Office</h3>
                <p>Seni melayani tamu dengan keramahan tinggi, mengelola reservasi, serta kemampuan operasional kantor depan secara profesional.</p>
            </div>
            <div class="program-card">
                <div class="program-card-inner"></div>
                <div class="program-icon"><i class="bi bi-house-door"></i></div>
                <h3>Housekeeping</h3>
                <p>Manajemen tata graha yang difokuskan pada pemeliharaan kebersihan, kenyamanan kamar tamu dan standar higienitas hotel.</p>
            </div>
        </div>

        <!-- Pathway -->
        <div class="lpk-pathway">
            <div class="pathway-bg"></div>
            <h2>Langkah Menuju Kesuksesan</h2>
            <p>Sistem pelatihan LPK Metland College didesain khusus agar setiap peserta didik mampu bertransformasi dari pemula menjadi tenaga profesional siap kerja.</p>
            <div class="pathway-steps">
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-book"></i></div>
                    <div class="step-title">Pelatihan In-Class</div>
                    <div class="step-desc">Pembekalan teori dan praktik dasar di fasilitas simulasi hotel.</div>
                </div>
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-briefcase-fill"></i></div>
                    <div class="step-title">On Job Training</div>
                    <div class="step-desc">Magang langsung di hotel bintang 4 & 5 mitra kami.</div>
                </div>
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-shield-check"></i></div>
                    <div class="step-title">Uji Kompetensi</div>
                    <div class="step-desc">Sertifikasi kemahiran berstandar industri resmi.</div>
                </div>
                <div class="pathway-step">
                    <div class="step-icon"><i class="bi bi-building"></i></div>
                    <div class="step-title">Penyaluran Kerja</div>
                    <div class="step-desc">Bantuan proses rekrutmen ke jaringan industri hospitality.</div>
                </div>
            </div>
        </div>

      </div>
    </section>

    <section class="career-section" id="career-section">
        <div class="career-shell">
            <div class="career-head">
                <span class="section-badge" title="Klik untuk mengubah LPK/LKP">Training Method</span>
                <h2 class="section-title">From <span>New Students</span> to Professional</h2> 
                <p class="section-desc">Structured learning steps, focus on practice, and supported by industry mentors until ready to enter the workforce.</p>
            </div>
            <div class="career-timeline" id="lpk-content">
                <span class="career-line" aria-hidden="true"></span>
                <article class="career-step is-left">
                    <span class="career-pill">1 Month</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-journal-bookmark"></i></div>
                        <div>
                            <h3>Pre-Screening Interview</h3>
                            <p>In this early stage, participants undergo a selection process in the form of an interview. The goal is to assess the readiness, interest, and potential of participants before entering the main program.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-right">
                    <span class="career-pill">2 Month</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-people"></i></div>
                        <div>
                            <h3>English for Industry</h3>
                            <p>After passing selection, participants learn English focused on the workplace, especially in the industry. Not just grammar, but professional communication like speaking, email writing, and technical terms.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-left">
                    <span class="career-pill">3 Month</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h3>Skill Training</h3>
                            <p>At this stage, participants enter core skill training in their respective fields. The material is technical and practical, ensuring participants have ready-to-use skills in the workforce.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-left">
                    <span class="career-pill">6 Month</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h3>On Job Training (OJT)</h3>
                            <p>With base skills in hand, participants jump directly into the workplace through internships or field work. Here they learn directly in a real work environment for more relevant experience.</p>
                        </div>
                    </div>
                </article>
                <article class="career-step is-right">
                    <span class="career-pill is-finish">Graduate</span>
                    <div class="career-card">
                        <div class="career-icon"><i class="bi bi-mortarboard"></i></div>
                        <div>
                            <h3>Final Interview</h3>
                            <p>The final stage is the final interview with the client/company. This serves as the final assessment to determine if participants are ready for recruitment or the next phase.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="career-timeline" id="lkp-content" style="display: none; align-items: center; justify-content: center; min-height: 250px; text-align: center;">
                <div class="career-card" style="width: 100%; max-width: 500px; margin: 0 auto; flex-direction: column; align-items: center;">
                    <div class="career-icon"><i class="bi bi-clock-history"></i></div>
                    <div style="margin-top: 10px;">
                        <h3>Coming Soon</h3>
                        <p>Konten untuk Training Method (LKP) sedang dalam tahap penyusunan dan akan segera tersedia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <div class="alumni-testi-badge">Alumni Testimonials</div>
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
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag">
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
                    <img src="https://flagcdn.com/w40/ae.png" alt="UAE Flag">
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
                    <img src="https://flagcdn.com/w40/sg.png" alt="Singapore Flag">
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
                    <img src="https://flagcdn.com/w40/au.png" alt="Australia Flag">
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
                    <img src="https://flagcdn.com/w40/jp.png" alt="Japan Flag">
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

    <footer class="school-footer" id="school-footer">
        <div class="footer-shell">
            <div class="footer-brand">
                <div class="footer-brand-head">
                    <img src="{{ asset("img/LOGO METLAND COLLEGE-02.png") }}" alt="Logo Metland College" class="footer-logo">
                    <h3>METLAND COLLEGE</h3>
                </div>
                <p>The first step towards a brilliant career. Learn practically, develop creatively, and get ready to jump into the industry.</p>
            </div>

            <div class="footer-posts">
                <h4>Recent Posts</h4>
                <div class="footer-post-list">
                    @php
                        $footerNews = ($latestNews ?? collect())->take(2);
                    @endphp
                    @forelse($footerNews as $item)
                        <article class="footer-post-item">
                            <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" class="footer-post-thumb">
                            <div class="footer-post-content">
                                <a href="{{ route('news.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->localized_title, 76) }}</a>
                                <p class="footer-post-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                            </div>
                        </article>
                    @empty
                        <article class="footer-post-item">
                            <img src="{{ asset('img/hero2.JPG') }}" alt="No News yet" class="footer-post-thumb">
                            <div class="footer-post-content">
                                <a href="{{ route('news') }}">No news has been published yet</a>
                                <p class="footer-post-date">Please check back later</p>
                            </div>
                        </article>
                    @endforelse
                </div>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="#about-smk">About</a>
                <a href="#career-section">Career</a>
                <a href="#news-section">News</a>
                <a href="{{ url('/') }}#contact">Contact</a>
                <a href="{{ url('/') }}#partnership">Partnership</a>
                <a href="#alumni-section">More</a>
            </div>

            <div class="footer-contact-map">
                <h4>CONTACT US</h4>
                <p><strong>Location:</strong><br>Jl. Taman Metro Raya Metland Transyogi, Kec. Cileungsi, Kab. Bogor, Prov. Jawa Barat</p>
                <p><strong>WhatsApp:</strong> +62-8180-9999-180</p>
                <p><strong>Website:</strong> <a href="https://www.smkmetland.net" target="_blank" rel="noopener noreferrer">www.smkmetland.net</a></p>
                <div class="footer-socials">
                    <a href="https://www.youtube.com/@MetlandAcademy" target="_blank" rel="noopener noreferrer" aria-label="YouTube Metland Academy">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@metlandcollege" target="_blank" rel="noopener noreferrer" aria-label="TikTok Metland College">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://www.instagram.com/metland.college/" target="_blank" rel="noopener noreferrer" aria-label="Instagram Metland College">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                <iframe
                    class="footer-map-frame"
                    title="Lokasi SMK Metland"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps?cid=4362342788863844499&hl=id&gl=ID&output=embed">
                </iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} SMK Metland. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>
