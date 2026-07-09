<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="History of Metland College - A leading vocational education institution">
    <title>LPK-LKP METLAND COLLEGE</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/LOGO METLAND COLLEGE-02.webp') }}?v=20260305">
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset("img/LOGO METLAND COLLEGE-02.webp") }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
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
            <p class="hero-eyebrow">"Professional & Lifelong Learning"</p>
            <h1 class="hero-title">Our<br><span>HISTORY</span></h1>
            <p>Trace the journey of Metland College from our humble beginnings to where we stand today, continuously evolving to meet global hospitality standards.</p>
            <div class="hero-actions">
                <a href="#history-section" class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <section class="history-content" id="history-section">
        <div class="section-header">
            <span class="section-badge">Our History</span>
            <h2 class="section-title">Check out how <span>Metland College</span> has evolved over the years.</h2>
            <p class="section-desc"></p>
        </div>
        <div class="history-content-body">
            <div class="timeline-container">
                
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2014</div>
                    <div class="timeline-content">
                        <h3>The Foundation</h3>
                        <p>Metland College was established with a vision to revolutionize vocational education in hospitality. The foundation stone was laid in Cileungsi, aiming to bridge the gap between academic learning and industry demands.</p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2017</div>
                    <div class="timeline-content">
                        <h3>First Batch Graduation</h3>
                        <p>We celebrated our very first batch of graduates who immediately secured positions in top-tier hotels and hospitality chains across Indonesia, validating our rigorous practical approach.</p>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h3>Campus Expansion</h3>
                        <p>Expanded our facilities by introducing the Artisan Beverage Studio and a fully functional front-office simulation lab, ensuring our students train in a 100% industry-standard environment.</p>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2025</div>
                    <div class="timeline-content">
                        <h3>Global Accreditation</h3>
                        <p>Achieved international standard certification and formed partnerships with global hospitality brands, aiming for zero graduate unemployment and worldwide career opportunities.</p>
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
