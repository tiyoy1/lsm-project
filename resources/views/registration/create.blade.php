<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - LPK-LKP METLAND COLLEGE</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/logo-metland-school.png') }}?v=20260305">
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
    <style>
        .registration-info {
            padding: 80px 0;
            background: #f2fbfb;
        }
        .info-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
        }
        .info-head {
            text-align: center;
            margin-bottom: 50px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .info-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.02);
            transition: transform 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-5px);
        }
        .info-icon {
            font-size: 2.5rem;
            color: #1ca5a5;
            margin-bottom: 20px;
            display: block;
        }
        .info-card h3 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            margin-bottom: 15px;
            color: #0f172a;
        }
        .info-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .info-card ul li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            color: #475569;
        }
        .info-card ul li i {
            color: #1ca5a5;
        }
        .price-estimate {
            font-size: 1.5rem;
            font-weight: 800;
            color: #1ca5a5;
            margin-bottom: 10px;
        }
        .price-note {
            font-size: 0.9rem;
            color: #64748b;
        }
        .language-choice {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 4px;
        }
        .language-choice span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 7px 16px;
            border-radius: 999px;
            border: 1px solid rgba(28, 165, 165, 0.18);
            background: linear-gradient(135deg, rgba(28, 165, 165, 0.12), rgba(28, 165, 165, 0.04));
            color: #0f6c75;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 0.01em;
            box-shadow: 0 8px 18px rgba(28, 165, 165, 0.08);
            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease,
                background-color 0.2s ease;
        }
        .language-choice span:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(28, 165, 165, 0.14);
            background: linear-gradient(135deg, rgba(28, 165, 165, 0.16), rgba(28, 165, 165, 0.06));
        }

        .package {
            position: relative;
            padding: 96px 0;
            background: #f2fbfb;
        }

        .section-divider {
            width: min(1200px, 92vw);
            margin: 0 auto;
            position: relative;
            height: 72px;
        }

        .section-divider::before {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: min(100%, 640px);
            height: 2px;
            transform: translate(-50%, -50%);
            background: linear-gradient(90deg, transparent 0%, rgba(28, 165, 165, 0.18) 12%, rgba(28, 165, 165, 0.75) 50%, rgba(28, 165, 165, 0.18) 88%, transparent 100%);
            border-radius: 999px;
        }

        .section-divider::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            width: 18px;
            height: 18px;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75);
            box-shadow:
                0 0 0 10px rgba(28, 165, 165, 0.08),
                0 12px 24px rgba(15, 118, 110, 0.18);
        }

        .package-shell {
            width: min(1200px, 92vw);
            margin: 0 auto;
        }

        .package-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 28px;
            align-items: stretch;
        }

        .package-card-wrap {
            display: flex;
        }

        .package-card {
            width: 100%;
            display: flex;
            flex-direction: column;
            min-height: 100%;
            padding: 34px;
            border-radius: 28px;
            border: 1px solid rgba(28, 165, 165, 0.12);
            box-shadow: 0 22px 60px rgba(15, 118, 110, 0.12);
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(10px);
            overflow: hidden;
            position: relative;
        }

        .package-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(28, 165, 165, 0.08), transparent 55%);
            pointer-events: none;
        }

        .package-card-head {
            position: relative;
            z-index: 1;
            margin-bottom: 22px;
        }

        .package-card-head .package-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(28, 165, 165, 0.12);
            color: #0f6c75;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .package-card-head h2 {
            margin: 0;
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.5rem, 2vw, 2.15rem);
            line-height: 1.12;
            color: #0f172a;
            letter-spacing: -0.03em;
        }

        .package-card-head h2 span {
            color: #1ca5a5;
        }

        .package-card-body {
            position: relative;
            z-index: 1;
            flex: 1;
        }

        .package-card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 14px;
        }

        .package-card-body li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 16px;
            border-radius: 16px;
            background: #f8fcfc;
            color: #334155;
            line-height: 1.55;
            border: 1px solid rgba(15, 118, 110, 0.08);
        }

        .package-card-body li::before {
            content: "";
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-top: 7px;
            flex: 0 0 10px;
            background: linear-gradient(135deg, #1ca5a5, #0f6c75);
            box-shadow: 0 0 0 6px rgba(28, 165, 165, 0.12);
        }

        .package-card-footer {
            position: relative;
            z-index: 1;
            margin-top: 24px;
        }

        .package-card-footer .card-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 52px;
            padding: 0 22px;
            border-radius: 999px;
            background: #1ca5a5;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .package-card-footer .card-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 18px 34px rgba(28, 165, 165, 0.32);
        }

        .package-card-footer button {
            border: 0;
            padding: 0;
            background: transparent;
        }

        .package-card--lpk {
            order: 1;
        }

        .package-card--lkp {
            order: 2;
        }

        .form-section {
            padding: 80px 0;
            background: #f2fbfb;
        }
        .form-container {
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            padding: 50px;
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .form-header h2 {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            color: #0f172a;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .field-group {
            margin-bottom: 20px;
        }
        .field-group.full {
            grid-column: span 2;
        }
        .field-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #334155;
            font-size: 0.95rem;
        }
        .field-group input, .field-group select, .field-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-family: inherit;
            transition: all 0.3s ease;
        }
        .field-group input:focus, .field-group select:focus, .field-group textarea:focus {
            outline: none;
            border-color: #1ca5a5;
            box-shadow: 0 0 0 4px rgba(28, 165, 165, 0.1);
        }
        .error-msg {
            color: #ef4444;
            font-size: 0.85rem;
            margin-top: 5px;
        }
        .submit-btn-wrap {
            text-align: center;
            margin-top: 30px;
        }
        .reg-submit-btn {
            background: linear-gradient(135deg, , #0f6c75);
            color: #fff;
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .reg-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(28, 165, 165, 0.4);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .field-group.full {
                grid-column: span 1;
            }
            .form-container {
                padding: 30px 20px;
            }

            .package {
                padding: 72px 0;
            }

            .package-grid {
                grid-template-columns: 1fr;
            }

            .package-card {
                padding: 26px 22px;
            }
        }
    </style>
</head>
<body>
    @php
        $contactSetting = $contactSetting ?? null;
        $latestNews = $latestNews ?? collect();

        $logoUrl = null;
        if (filled($contactSetting?->logo)) {
            $logoUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($contactSetting->logo);
        }

        $whatsappNumber = preg_replace('/\\D+/', '', (string) (($contactSetting?->whatsapp ?? '') ?: '6281809999180'));
        $gformUrl = 'https://forms.gle/bNM8YNTo9sSea7fy7';
    @endphp
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
            <a href="https://www.youtube.com/@MetlandAcademy" target="_blank" rel="noopener noreferrer" class="icon-youtube" aria-label="YouTube Metland Academy">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@metlandcollege" target="_blank" rel="noopener noreferrer" class="icon-tiktok" aria-label="TikTok Metland College">
                <i class="bi bi-tiktok"></i>
            </a>
            <a href="https://www.instagram.com/metland.college/" target="_blank" rel="noopener noreferrer" class="icon-instagram" aria-label="Instagram Metland College">
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
            <p class="hero-eyebrow">"Join our elite training programs"</p>
            <h1 class="hero-title">Start Your <br><span>JOURNEY</span></h1>
            <p>Ready to become a hospitality professional? Register now and take the first step towards a global career with Metland College.</p>
            <div class="hero-actions">
                <a href="#package" class="hero-btn">Register Now</a>
                <a href="#info" class="hero-btn is-outline">Learn More</a>
            </div>
        </div>
    </section>

    <section class="registration-info" id="info">
        <div class="info-shell">
            <div class="info-head">
                <span class="section-badge">Why Join Us?</span>
                <h2 class="section-title">Invest in Your <span>Future Career</span></h2>
                <p class="section-desc">We offer more than just education; we provide a pathway to success.</p>
            </div>
            
            <div class="info-grid">
                <div class="info-card">
                    <i class="bi bi-person-check info-icon"></i>
                    <h3>What You Get</h3>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i> Professional Certificate</li>
                        <li><i class="bi bi-check-circle-fill"></i> Industry-based Curriculum</li>
                        <li><i class="bi bi-check-circle-fill"></i> Practical Skill Training</li>
                        <li><i class="bi bi-check-circle-fill"></i> Guaranteed Job Assistant</li>
                    </ul>
                </div>
                
                <div class="info-card">
                    <i class="bi bi-currency-dollar info-icon"></i>
                    <h3>Value Investment</h3>
                    <p class="price-estimate">Competitive & Affordable</p>
                    <p class="price-note">Estimated investment starts from affordable rates with flexible payment schemes to support your education journey.</p>
                </div>
                
                <div class="info-card">
                    <i class="bi bi-mortarboard info-icon"></i>
                    <h3>Available Programs</h3>
                    <div class="language-choice">
                        <span>Hotel & Hospitality</span>
                        <span>Culinary Arts</span>
                        <span>Digital Development</span>
                        <span>Multi-Media Design</span>
                    </div>
                </div>
                <div class="info-card">
                    <i class="bi bi-mortarboard info-icon"></i>
                    <h3>Languages Offered</h3>
                    <div class="language-choice">
                        <span>Korea</span>
                        <span>Arab</span>
                        <span>Dubai</span>
                        <span>Croatia</span>
                        <span>Turkey</span>
                        <span>Canada</span>
                        <span>Thailand</span>
                        <span>USA</span>
                        <span>Taiwan</span>
                        <span>English</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider" aria-hidden="true"></div>

    <section class="package" id="package">
        <div class="package-shell">
            <div class="package-grid">
                <div class="package-card-wrap">
                    <div class="package-card package-card--lpk">
                        <div class="package-card-head">
                            <span class="package-kicker">LPK</span>
                            <h2>Join us to build your <span>FUTURE</span> work life</h2>
                        </div>
                        <div class="package-card-body">
                            <ul>
                                <li>Bersertifikat BNSP</li>
                                <li>Penyaluran Kerja</li>
                                <li>Instruktur Praktisi Ahli</li>
                                <li>Program Magang (OJT) Eksklusif</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="package-card-wrap">
                    <div class="package-card package-card--lkp">
                        <div class="package-card-head">
                            <span class="package-kicker">LKP</span>
                            <h2>Join us to build your <span>FUTURE</span> language</h2>
                        </div>
                        <div class="package-card-body">
                            <ul>
                                <li>Language-based professional training</li>
                                <li>Communication-focused learning path</li>
                                <li>Practical sessions with industry mentors</li>
                                <li>Career-ready support and guidance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ $gformUrl }}" class="hero-btn" target="_blank" rel="noopener noreferrer">Register Now</a>
            </div>
        </div>
    </section>

        @include('partials.footer')

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>
