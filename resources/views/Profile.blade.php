<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK-LKP METLAND COLLEGE</title>
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
            <h1 class="hero-title">Campus<br><span>PROFILE</span></h1>
            <p>Discover our state-of-the-art facilities, dynamic learning environments, and the dedicated community that makes Metland College a premier place for vocational excellence.</p>
            <div class="hero-actions">
                <a href="#campus-profile" class="hero-btn">See more</a>
            </div>
        </div>
    </section>

    <!-- CAMPUS PROFILE SECTION -->
    <section id="campus-profile" class="campus-profile-section">
        <div class="campus-profile-container">
            
            <!-- Heading Area -->
            <div class="campus-profile-header">
                <span class="section-badge">About The Institution</span>
                <h2 class="campus-profile-title">Empowering Futures with <span>Metland College</span></h2>
                <p class="campus-profile-desc">Metland College is a premier vocational training institution meticulously designed to bridge the gap between academic theory and the fast-paced professional world. We focus on hands-on experiences, industry-standard training, and holistic character development to ensure our graduates are unequivocally work-ready.</p>
            </div>

            <!-- Content Split -->
            <div class="campus-profile-split">
                
                <!-- Left: Features List -->
                <div class="campus-profile-features">
                    
                    <div class="campus-profile-feature">
                        <div class="campus-profile-icon icon-1">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div>
                            <h3 class="campus-profile-feature-title">Lembaga Pelatihan Kerja (LPK)</h3>
                            <p class="campus-profile-feature-desc">Our LPK program focuses on intensive job-readiness training tailored to specific industry demands, accelerating your seamless entry into the workforce.</p>
                        </div>
                    </div>

                    <div class="campus-profile-feature">
                        <div class="campus-profile-icon icon-2">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <div>
                            <h3 class="campus-profile-feature-title">Lembaga Kursus & Pelatihan (LKP)</h3>
                            <p class="campus-profile-feature-desc">Enhance your specific skill sets through our comprehensive courses designed to upgrade your capabilities and support continuous professional development.</p>
                        </div>
                    </div>

                    <div class="campus-profile-feature">
                        <div class="campus-profile-icon icon-3">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <div>
                            <h3 class="campus-profile-feature-title">Industry-Standard Facilities</h3>
                            <p class="campus-profile-feature-desc">Train in real-world environments leveraging our robust partner network, ensuring you are comfortable and efficient from day one on the job.</p>
                        </div>
                    </div>

                </div>

                <!-- Right: Image Frame -->
                <div class="campus-profile-image-frame">
                    <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="Campus Infrastructure" loading="lazy" decoding="async">
                    <div class="campus-profile-image-overlay"></div>
                    <div class="campus-profile-image-quote">
                        <p>"Preparing you today for the challenges of tomorrow."</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="facilities">
        <div class="facilities-head">
            <span class="section-badge">Our Facilities</span>
            <h2 class="campus-fasilities-title">What we have to support your <span>Process</span></h2>
            <p class="notranslate" data-id="Metland College memiliki fasilitas yang lengkap dan modern untuk mendukung kegiatan belajar mengajar." data-en="Metland College has complete and modern facilities to support teaching and learning activities.">Metland College memiliki fasilitas yang lengkap dan modern untuk mendukung kegiatan belajar mengajar.</p>
        </div>
        <div class="facilities-body">
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="" class="facilities-card-img" loading="lazy" decoding="async">
                </div>
                <div class="facilities-card-content">
                    <h3>Artisan Beverage Studio (ABS)</h3>
                    <p class="notranslate" data-id="ABS adalah fasilitas modern yang dirancang khusus untuk melatih mahasiswa dalam seni meracik minuman. Dilengkapi dengan peralatan barista terkini, ABS menjadi tempat ideal bagi calon profesional untuk mengasah keterampilan mereka dalam membuat kopi, teh, dan minuman inovatif lainnya." data-en="ABS is a modern facility specifically designed to train students in the art of beverage mixing. Equipped with the latest barista tools, ABS is the ideal place for aspiring professionals to hone their skills in making coffee, tea, and other innovative drinks.">ABS adalah fasilitas modern yang dirancang khusus untuk melatih mahasiswa dalam seni meracik minuman. Dilengkapi dengan peralatan barista terkini, ABS menjadi tempat ideal bagi calon profesional untuk mengasah keterampilan mereka dalam membuat kopi, teh, dan minuman inovatif lainnya.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="" class="facilities-card-img" loading="lazy" decoding="async">
                </div>
                <div class="facilities-card-content">
                    <h3>Culinary Kitchen</h3>
                    <p class="notranslate" data-id="Metland College memiliki dapur profesional standar industri yang lengkap dan modern untuk mendukung kegiatan praktik mahasiswa kuliner." data-en="Metland College features a complete and modern industry-standard professional kitchen to support the practical activities of culinary students.">Metland College memiliki dapur profesional standar industri yang lengkap dan modern untuk mendukung kegiatan praktik mahasiswa kuliner.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="" class="facilities-card-img" loading="lazy" decoding="async">
                </div>
                <div class="facilities-card-content">
                    <h3 class="notranslate" data-en="Housekeeping Room" data-id="Ruangan Housekeeping">Housekeeping Mock-up Room</h3>
                    <p class="notranslate" data-id="Kamar simulasi standar hotel bintang lima yang dirancang untuk melatih mahasiswa standar tertinggi dalam kebersihan dan penataan ruang hotel." data-en="A five-star hotel standard simulation room designed to train students to the highest standards of cleanliness and hotel room arrangement.">Kamar simulasi standar hotel bintang lima yang dirancang untuk melatih mahasiswa standar tertinggi dalam kebersihan dan penataan ruang hotel.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="" class="facilities-card-img" loading="lazy" decoding="async">
                </div>
                <div class="facilities-card-content">
                    <h3 class="notranslate" data-en="Front Office Lab" data-id="Laboratorium Front Office">Front Office Lab</h3>
                    <p class="notranslate" data-id="Fasilitas simulasi meja resepsionis modern untuk membekali mahasiswa dengan keahlian pelayanan prima bagi setiap tamu yang datang." data-en="A modern reception desk simulation facility to equip students with excellent service skills for every arriving guest.">Fasilitas simulasi meja resepsionis modern untuk membekali mahasiswa dengan keahlian pelayanan prima bagi setiap tamu yang datang.</p>
                </div>
            </div>
        </div>
    </section>

        @include('partials.footer')

    <!-- Facility Modal -->
    <div class="facility-modal" id="facilityModal" aria-hidden="true">
        <div class="facility-modal-overlay" aria-label="Close modal"></div>
        <div class="facility-modal-content">
            <button class="facility-modal-close" aria-label="Close modal">&times;</button>
            <div class="facility-modal-body">
                <img id="facilityModalImg" src="" alt="Facility Image">
                <div class="facility-modal-text">
                    <h3 id="facilityModalTitle">Title</h3>
                    <p id="facilityModalDesc">Desc</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>

