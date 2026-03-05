<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan PPLG - SMK Metland</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}?v=20260305">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset("css/visimisi.css") }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
    <style>
        .pplg-profile {
            background: #e6e6e6;
            padding: 56px 0 48px;
        }

        .pplg-profile-shell {
            width: min(1100px, 92vw);
            margin: 0 auto;
            text-align: center;
        }

        .pplg-profile-title {
            margin: 0;
            font-family: "Sora", sans-serif;
            font-size: clamp(2rem, 3.8vw, 3rem);
            font-weight: 700;
            color: #101010;
            line-height: 1.1;
        }

        .pplg-profile-title span {
            color: #1f8f8b;
        }

        .pplg-title-line {
            width: min(220px, 36vw);
            height: 5px;
            margin: 8px auto 28px;
            border-radius: 999px;
            background: #1f8f8b;
        }

        .pplg-gallery {
            width: min(700px, 100%);
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border: 2px solid rgba(20, 20, 20, 0.18);
            overflow: hidden;
            background: #fff;
        }

        .pplg-gallery-main img,
        .pplg-gallery-stack img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .pplg-gallery-main {
            min-height: 430px;
            border-right: 2px solid rgba(20, 20, 20, 0.18);
        }

        .pplg-gallery-stack {
            display: grid;
            grid-template-rows: 1fr 1fr;
        }

        .pplg-gallery-stack img:first-child {
            border-bottom: 2px solid rgba(20, 20, 20, 0.18);
        }

        .pplg-profile-copy {
            width: min(100%, 96vw);
            margin: 34px auto 0;
            color: #161616;
            font-size: 20px;
            line-height: 1.55;
            font-weight: 500;
            text-align: center;
        }

        .pplg-partnership {
            padding: 56px 0 64px;
        }

        .pplg-partnership-shell {
            margin: 0 auto;
        }

        .pplg-partnership-head {
            text-align: center;
            margin-bottom: 26px;
        }

        .pplg-partnership-head h3 {
            margin: 0;
            font-family: "Sora", sans-serif;
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
            color: #11444b;
        }

        .pplg-partnership-head p {
            margin: 10px auto 0;
            max-width: 64ch;
            color: #2b666f;
            font-size: 1rem;
            line-height: 1.7;
        }

        .pplg-partnership-slider {
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.82);
            padding: 20px 0;
        }

        .pplg-partnership-slider::before,
        .pplg-partnership-slider::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 88px;
            z-index: 2;
            pointer-events: none;
        }

        .pplg-partnership-slider::before {
            left: 0;
            background: linear-gradient(90deg, rgba(235, 246, 250, 1), rgba(235, 246, 250, 0));
        }

        .pplg-partnership-slider::after {
            right: 0;
            background: linear-gradient(270deg, rgba(235, 246, 250, 1), rgba(235, 246, 250, 0));
        }

        .pplg-partnership-track {
            display: flex;
            align-items: center;
            gap: 16px;
            width: max-content;
            animation: pplg-partner-scroll 28s linear infinite;
        }

        .pplg-partnership-slider:hover .pplg-partnership-track {
            animation-play-state: paused;
        }

        .pplg-partner-card {
            width: 190px;
            min-height: 128px;
            border-radius: 14px;
            border: 1px solid rgba(65, 164, 175, 0.2);
            background: #ffffff;
            padding: 14px 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 0 0 auto;
        }

        .pplg-partner-card img {
            width: 110px;
            height: 62px;
            object-fit: contain;
            display: block;
        }

        .pplg-partner-card span {
            margin-top: 8px;
            color: #2b5960;
            font-size: 0.82rem;
            line-height: 1.35;
            font-weight: 600;
        }

        @keyframes pplg-partner-scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(calc(-50% - 8px));
            }
        }

        @media (max-width: 900px) {
            .pplg-profile {
                padding: 46px 0 40px;
            }

            .pplg-gallery {
                grid-template-columns: 1fr;
                width: min(560px, 100%);
            }

            .pplg-gallery-main {
                min-height: 360px;
                border-right: 0;
                border-bottom: 2px solid rgba(20, 20, 20, 0.18);
            }

            .pplg-gallery-stack {
                grid-template-rows: none;
                grid-template-columns: 1fr;
            }

            .pplg-gallery-stack img:first-child {
                border-bottom: 2px solid rgba(20, 20, 20, 0.18);
            }

            .pplg-gallery-stack img:last-child {
                min-height: 220px;
            }

            .pplg-partnership {
                padding: 46px 0 52px;
            }

            .pplg-partnership-slider::before,
            .pplg-partnership-slider::after {
                width: 42px;
            }

            .pplg-partner-card {
                width: 156px;
                min-height: 112px;
            }

            .pplg-partner-card img {
                width: 94px;
                height: 52px;
            }
        }

        @media (max-width: 600px) {
            .pplg-profile-copy {
                font-size: 1rem;
                line-height: 1.72;
                text-align: left;
                width: min(94vw, 580px);
            }

            .pplg-partnership-head p {
                font-size: 0.92rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .pplg-partnership-track {
                animation: none;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset("img/logo.webp") }}" alt="Logo SMK Metland" class="logo-img">SMK METLAND
        </div>
        <ul id="primary-nav">
            <li><a href="{{ url('/') }}">{{ __('ui.nav.home') }}</a></li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    {{ __('ui.nav.school_profile') }} <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="#">{{ __('ui.nav.profile_vision') }}</a></li>
                    <li><a href="#">{{ __('ui.nav.profile_history') }}</a></li>
                </ul>
            </li>
            <li class="nav-has-dropdown">
                <button type="button" class="nav-dropdown-toggle">
                    {{ __('ui.nav.majors') }} <i class="bi bi-chevron-down" aria-hidden="true"></i>
                </button>
                <ul class="nav-dropdown">
                    <li><a href="#">{{ __('ui.nav.major_accounting') }}</a></li>
                    <li><a href="#">{{ __('ui.nav.major_pplg') }}</a></li>
                    <li><a href="#">{{ __('ui.nav.major_dkv') }}</a></li>
                    <li><a href="#">{{ __('ui.nav.major_culinary') }}</a></li>
                    <li><a href="#">{{ __('ui.nav.major_hotel') }}</a></li>
                </ul>
            </li>
            <li><a href="#alumni-section">{{ __('ui.nav.alumni') }}</a></li>
            <li><a href="#majors-smk">{{ __('ui.nav.organization') }}</a></li>
            <li><a href="{{ route('news.index') }}">{{ __('ui.nav.news') }}</a></li>
            <li><a href="#contact">{{ __('ui.nav.contact') }}</a></li>
            <li><a href="#partnership-section">{{ __('ui.nav.partnership') }}</a></li>
        </ul>
        <div class="sosmed-icon">
  <a href="https://youtube.com/@metlandschool?si=H326T8TIsX0qFjtO" target="_blank" rel="noopener noreferrer" class="icon-youtube" aria-label="YouTube SMK Metland">
    <i class="bi bi-youtube"></i>
  </a>

  <a href="https://www.tiktok.com/@smkmetland" target="_blank" rel="noopener noreferrer" class="icon-tiktok" aria-label="TikTok SMK Metland">
    <i class="bi bi-tiktok"></i>
  </a>

  <a href="https://www.facebook.com/smkmetland" target="_blank" rel="noopener noreferrer" class="icon-facebook" aria-label="Facebook SMK Metland">
    <i class="bi bi-facebook"></i>
  </a>
  <a href="https://www.instagram.com/smkmetland?igsh=M2Q5aHJuMzB4MWNp" target="_blank" rel="noopener noreferrer" class="icon-instagram" aria-label="Instagram SMK Metland">
    <i class="bi bi-instagram"></i>
  </a>
</div>
        <div class="ppdb-btn">
            <button type="button">{{ __('ui.nav.ppdb') }}</button>
        </div>
        <div class="lang-switch" aria-label="{{ __('ui.lang.switcher_aria') }}">
            <a href="{{ route('language.switch', 'id') }}" class="{{ app()->getLocale() === 'id' ? 'is-active' : '' }}">{{ __('ui.lang.id') }}</a>
            <a href="{{ route('language.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'is-active' : '' }}">{{ __('ui.lang.en') }}</a>
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
    <div class="slider-container">
        <div class="slider-items">
            <img src="{{ asset("img/pplg/pplg2.png") }}" alt="">
            <div class="slider-content">
                <p class="slider-subtitle">{{ __('ui.home.slider_subtitle') }}</p>
                <h2 class="slider-title">PPLG</h2>
                <p class="slider-description">Pengembang Perangkat Lunak & Gim</p>
                <a href="#" class="slider-action">SEE MORE!</a>
            </div>
        </div>
        <div class="slider-items">
            <img src="{{ asset("img/pplg/pplg1.png") }}" alt="">
            <div class="slider-content">
                <p class="slider-subtitle">{{ __('ui.home.slider_subtitle') }}</p>
                <h2 class="slider-title">PPLG</h2>
                <p class="slider-description">Pengembang Perangkat Lunak & Gim</p>
                <a href="#" class="slider-action">SEE MORE!</a>
            </div>
        </div>
        <button class="slider-nav slider-prev" type="button" aria-label="{{ __('ui.home.slider_prev_aria') }}">&#8249;</button>
        <button class="slider-nav slider-next" type="button" aria-label="{{ __('ui.home.slider_next_aria') }}">&#8250;</button>
        <div class="slider-dots" aria-label="{{ __('ui.home.slider_pagination_aria') }}"></div>
</div>

    <section class="pplg-profile">
        <div class="pplg-profile-shell">
            <h2 class="pplg-profile-title">apa itu <span>PPLG?</span></h2>
            <div class="pplg-title-line" aria-hidden="true"></div>

            <div class="pplg-gallery">
                <figure class="pplg-gallery-main m-0">
                    <img src="{{ asset('img/pplg/pplg2.png') }}" alt="Siswa PPLG Metland School">
                </figure>
                <div class="pplg-gallery-stack">
                    <img src="{{ asset('img/pplg/pplg1.png') }}" alt="Prestasi siswa PPLG">
                    <img src="{{ asset('img/pplg/pplg3.png') }}" alt="Suasana kampus mitra PPLG">
                </div>
            </div>

            <p class="pplg-profile-copy">
                Kurikulum Operasional Program Keahlian Pengembangan Perangkat Lunak dan Gim (PPLG) di SMK Pariwisata Metland School dirancang untuk meningkatkan kualitas pembelajaran serta menjawab kebutuhan industri di bidang teknologi digital yang terus berkembang. Kurikulum ini mempersiapkan siswa dalam berbagai kompetensi seperti UI/UX Design, pengembangan website (Frontend dan Backend), aplikasi mobile, hingga teknologi berbasis Internet of Things (IoT), dengan dukungan mata pelajaran tambahan seperti Platform Komputasi Awan, IoT, dan Pengembangan Gim. Proses pembelajaran menerapkan Hybrid Model Learning System yang menggabungkan pembelajaran daring dan tatap muka, serta disusun dengan melibatkan dunia industri, termasuk dukungan dari PT Metropolitan Land, Tbk., dan kerja sama dengan perguruan tinggi vokasi. Melalui kurikulum ini, lulusan diharapkan memiliki kompetensi untuk bekerja, melanjutkan pendidikan, maupun berwirausaha (BMW) sesuai dengan program Direktorat Jenderal Vokasi.
            </p>
        </div>
    </section>

    <section class="pplg-partnership" id="partnership-section">
        <div class="pplg-partnership-shell">
            <div class="pplg-partnership-head">
                <h3>Partnership PPLG</h3>
                <p>Kolaborasi PPLG SMK Metland dengan partner industri dan teknologi untuk project-based learning, magang, dan penguatan kompetensi digital siswa.</p>
            </div>

            <div class="pplg-partnership-slider" aria-label="Slider partnership PPLG berjalan otomatis">
                <div class="pplg-partnership-track">
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/virtalus-150x150.png') }}" alt="Logo Virtalus"><span>Virtalus</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/PT_Metland-removebg-preview-e1704943421395-150x150.png') }}" alt="Logo PT Metropolitan Land"><span>PT Metropolitan Land</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Grand_Metropolitan-removebg-preview-150x150.png') }}" alt="Logo Grand Metropolitan"><span>Grand Metropolitan</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Kaliana_Apartment-removebg-preview-150x150.png') }}" alt="Logo Kaliana Apartment"><span>Kaliana Apartment</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Metropolitan_Mall_Cibubur-removebg-preview-150x150.png') }}" alt="Logo Metropolitan Mall Cibubur"><span>Metropolitan Mall Cibubur</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Indesso-removebg-preview-150x150.png') }}" alt="Logo Indesso"><span>Indesso</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/virtalus-150x150.png') }}" alt="Logo Virtalus"><span>Virtalus</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/PT_Metland-removebg-preview-e1704943421395-150x150.png') }}" alt="Logo PT Metropolitan Land"><span>PT Metropolitan Land</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Grand_Metropolitan-removebg-preview-150x150.png') }}" alt="Logo Grand Metropolitan"><span>Grand Metropolitan</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Kaliana_Apartment-removebg-preview-150x150.png') }}" alt="Logo Kaliana Apartment"><span>Kaliana Apartment</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Metropolitan_Mall_Cibubur-removebg-preview-150x150.png') }}" alt="Logo Metropolitan Mall Cibubur"><span>Metropolitan Mall Cibubur</span></article>
                    <article class="pplg-partner-card"><img src="{{ asset('img/partners/Indesso-removebg-preview-150x150.png') }}" alt="Logo Indesso"><span>Indesso</span></article>
                </div>
            </div>
        </div>
    </section>





























    <footer class="school-footer" id="school-footer">
        <div class="footer-shell">
            <div class="footer-brand">
                <div class="footer-brand-head">
                    <img src="{{ asset("img/logo.webp") }}" alt="Logo SMK Metland" class="footer-logo">
                    <h3>METLAND SCHOOL</h3>
                </div>
                <p>{{ __('ui.home.footer_tagline') }}</p>
            </div>

            <div class="footer-posts">
                <h4>{{ __('ui.footer.recent_posts') }}</h4>
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
                            <img src="{{ asset('img/hero2.JPG') }}" alt="{{ __('ui.footer.no_news_alt') }}" class="footer-post-thumb">
                            <div class="footer-post-content">
                                <a href="{{ route('news.index') }}">{{ __('ui.footer.no_published_news') }}</a>
                                <p class="footer-post-date">{{ __('ui.footer.check_again_later') }}</p>
                            </div>
                        </article>
                    @endforelse
                </div>
            </div>

            <div class="footer-links">
                <h4>{{ __('ui.footer.quick_access') }}</h4>
                <a href="#about-smk">{{ __('ui.footer.profile') }}</a>
                <a href="#majors-smk">{{ __('ui.footer.majors') }}</a>
                <a href="#partnership-section">{{ __('ui.footer.industry_partnership') }}</a>
                <a href="#partnership-section">{{ __('ui.footer.college_partnership') }}</a>
                <a href="{{ route('news.index') }}">{{ __('ui.footer.school_news') }}</a>
                <a href="#school-footer">{{ __('ui.footer.school_contact') }}</a>
            </div>

            <div class="footer-contact-map">
                <h4>{{ __('ui.footer.contact_us') }}</h4>
                <p><strong>{{ __('ui.footer.location') }}:</strong><br>{{ __('ui.footer.address') }}</p>
                <p><strong>{{ __('ui.footer.phone') }}:</strong> (021) 82496976</p>
                <p><strong>{{ __('ui.footer.whatsapp') }}:</strong> +6281293395500</p>
                <p><strong>{{ __('ui.footer.website') }}:</strong> <a href="https://www.smkmetland.net" target="_blank" rel="noopener noreferrer">www.smkmetland.net</a></p>
                <div class="footer-socials">
                    <a href="https://youtube.com/@metlandschool?si=H326T8TIsX0qFjtO" target="_blank" rel="noopener noreferrer" aria-label="YouTube SMK Metland">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@smkmetland" target="_blank" rel="noopener noreferrer" aria-label="TikTok SMK Metland">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="https://www.facebook.com/smkmetland" target="_blank" rel="noopener noreferrer" aria-label="Facebook SMK Metland">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/smkmetland?igsh=M2Q5aHJuMzB4MWNp" target="_blank" rel="noopener noreferrer" aria-label="Instagram SMK Metland">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
                <iframe
                    class="footer-map-frame"
                    title="{{ __('ui.footer.map_title') }}"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps?cid=4362342788863844499&hl=id&gl=ID&output=embed">
                </iframe>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ __('ui.footer.copyright') }}</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>
