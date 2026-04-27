<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK-LKP METLAND COLLEGE</title>
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
                <span class="campus-profile-badge">About The Institution</span>
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
                    <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="Campus Infrastructure">
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
            <span class="campus-fasilities-badge">Our Facilities</span>
            <h2 class="campus-fasilities-title">What we have to support your <span>Process</span></h2>
            <p>Metland College memiliki fasilitas yang lengkap dan modern untuk mendukung kegiatan belajar mengajar.</p>
        </div>
        <div class="facilities-body">
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="" class="facilities-card-img">
                </div>
                <div class="facilities-card-content">
                    <h3>Artisan Beverage Studio (ABS)</h3>
                    <p>ABS adalah fasilitas modern yang dirancang khusus untuk melatih mahasiswa dalam seni meracik minuman. Dilengkapi dengan peralatan barista terkini, ABS menjadi tempat ideal bagi calon profesional untuk mengasah keterampilan mereka dalam membuat kopi, teh, dan minuman inovatif lainnya.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="" class="facilities-card-img">
                </div>
                <div class="facilities-card-content">
                    <h3>Culinary Kitchen</h3>
                    <p>Metland College memiliki dapur profesional standar industri yang lengkap dan modern untuk mendukung kegiatan praktik mahasiswa kuliner.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="" class="facilities-card-img">
                </div>
                <div class="facilities-card-content">
                    <h3>Housekeeping Mock-up Room</h3>
                    <p>Kamar simulasi standar hotel bintang lima yang dirancang untuk melatih mahasiswa standar tertinggi dalam kebersihan dan penataan ruang hotel.</p>
                </div>
            </div>
            <div class="facilities-card">
                <div class="facilities-card-img-wrap">
                    <img src="{{ asset('img/SMK Metland Cileungsi.png') }}" alt="" class="facilities-card-img">
                </div>
                <div class="facilities-card-content">
                    <h3>Front Office Lab</h3>
                    <p>Fasilitas simulasi meja resepsionis modern untuk membekali mahasiswa dengan keahlian pelayanan prima bagi setiap tamu yang datang.</p>
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
                            <img src="{{ asset('img/hero2.JPG') }}" alt="Belum ada News" class="footer-post-thumb">
                            <div class="footer-post-content">
                                <a href="{{ route('news') }}">No news published yet</a>
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
</body>
</html>
