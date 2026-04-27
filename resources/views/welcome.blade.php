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
            <li><a href="#contact">Contact</a></li>
            <li><a href="#partnership">Partnership</a></li>
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
            <h1 class="hero-title">Crafting the <br><span>FUTURE</span></h1>
            <p>Metland College is a vocational school that provides education and training to students who want to work in the hospitality industry.</p>
            <div class="hero-actions">
                <a href="#contact" class="hero-btn is-outline">Contact</a>
                <a href="#about-smk"     class="hero-btn">See more</a>
            </div>
        </div>
    </section>
    <section id="about-smk" class="about-smk-section">
        <div class="about-smk-wrap">
            <div class="about-card">
                <a href="https://metlandsmarakertajati.com-hotel.id/id/" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-mortarboard about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>Hotel Metland SMARA Kertajati</h3>
                            <span class="about-head-cta">See more</span>
                        </div>
                    </div>
                </a>
                <a class="about-image-frame" href="https://metlandsmarakertajati.com-hotel.id/id/" target="_blank" rel="noopener noreferrer" aria-label="Kunjungi situs Metland Smara Kertajati">
                    <div class="img-container">
                        <img src="{{ asset("img/Kertajati.png") }}" alt="Area sekolah" class="about-image">
                    </div>
                </a>
                <div class="about-body">
                    <p>An industry-based hospitality training facility providing direct learning experiences in a real work environment. Focuses on hospitality practices so students understand professional standards early on.</p>
                </div>
            </div>
            <div class="about-card">
                <a href="{{ url('/program-keahlian') }}" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-buildings about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>SMK Metland Cileungsi</h3>
                            <span class="about-head-cta">See more</span>
                        </div>
                    </div>
                </a>
                <a class="about-image-frame" href="https://smkmetland.net/ppdb/" target="_blank" rel="noopener noreferrer" aria-label="Kunjungi situs SMK Metland Cileungsi">
                    <div class="img-container">
                        <img src="{{ asset("img/SMK Metland Cileungsi.png") }}" alt="Program keahlian" class="about-image">
                    </div>
                </a>
                <div class="about-body">
                    <p>A vocational school offering a variety of majors with a practice-based learning approach and industry needs. The goal is to produce graduates who are work-ready, competent, and able to compete in the professional world.</p>
                </div>
            </div>
            <div class="about-card">
                <a href="https://smkmetlandcibitung.net/" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-people about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>SMK Metland Cibitung</h3>
                            <span class="about-head-cta">See more</span>
                        </div>
                    </div>
                </a>
                <a class="about-image-frame" href="https://smkmetlandcibitung.net/" target="_blank" rel="noopener noreferrer" aria-label="Kunjungi situs SMK Metland Cibitung">
                    <div class="img-container">
                        <img src="{{ asset("img/SMK Metland cibitung.png") }}" alt="Kegiatan siswa" class="about-image">
                    </div>
                    </a>
                <div class="about-body">
                    <p>A school with an active and supportive learning environment, focusing not only on academics but also on student character development through organizations, social activities, and creative communities.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="career-section" id="career-section">
        <div class="career-shell">
            <div class="career-head">
                <span class="section-badge" style="cursor: pointer; user-select: none; transition: all 0.3s ease;" onclick="let isLPK = this.innerText.includes('LPK'); this.innerText = isLPK ? 'Training Method (LKP)' : 'Training Method (LPK)'; document.getElementById('lpk-content').style.display = isLPK ? 'none' : 'flex'; document.getElementById('lkp-content').style.display = isLPK ? 'flex' : 'none';" title="Klik untuk mengubah LPK/LKP">Training Method (LPK)</span>
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
            <div class="career-footer">
                <a href="{{ route('LPK') }}" class="career-cta">View Details</a>
            </div>
        </div>
    </section>
    <section class="news-section" id="news-section" aria-label="Latest news from SMK Metland">
        @php
            $latestNewsCollection = $latestNews ?? collect();
            $featuredNews = $latestNewsCollection->first();
            $sideNews = $latestNewsCollection->slice(1, 3);
        @endphp
        <div class="news-shell">
            <div class="news-head">
                <span class="news-badge">LATEST NEWS</span>
                <a href="{{ route('news') }}" class="news-all-link">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="news-layout">
                @if($featuredNews)
                    <article class="news-featured-card">
                        <div class="news-featured-media">
                            <img src="{{ $featuredNews->image_url }}" alt="{{ $featuredNews->localized_title }}">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-featured-body">
                            <p class="news-meta"><i class="fa-regular fa-calendar"></i> {{ ($featuredNews->published_at ?? $featuredNews->created_at)->translatedFormat('d M Y') }}</p>
                            <h3>{{ $featuredNews->localized_title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($featuredNews->localized_content), 180) }}</p>
                            <a href="{{ route('news.show', $featuredNews->slug) }}" class="news-read-more">Read More</a>
                        </div>
                    </article>

                    <div class="news-side-list">
                        @foreach($sideNews as $item)
                            <article class="news-mini-card">
                                <a href="{{ route('news.show', $item->slug) }}" class="news-mini-thumb-link">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}">
                                </a>
                                <div>
                                    <p class="news-mini-meta">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                                    <h4><a href="{{ route('news.show', $item->slug) }}" class="news-mini-link">{{ \Illuminate\Support\Str::limit($item->localized_title, 68) }}</a></h4>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <article class="news-featured-card">
                        <div class="news-featured-media">
                            <img src="{{ asset('img/hero2.JPG') }}" alt="Kegiatan terbaru siswa">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-featured-body">
                            <p class="news-meta"><i class="fa-regular fa-calendar"></i> No data yet</p>
                            <h3>School news has not been published yet</h3>
                            <p>News content will appear here once published from the admin panel.</p>
                            <a href="{{ route('news') }}" class="news-read-more">View News Page</a>
                        </div>
                    </article>
                @endif
            </div>
        </div>
    </section>
    <section class="alumni-section" id="alumni-section">
        <div class="alumni-shell">
            <div class="alumni-head">
                <span class="section-badge"><span>Testimonialsals</span></span>
                <h2 class="section-title">What <span>They Say</span></h2>
                <p class="section-desc">Alumni reviews regarding their learning experience at SMK Metland.</p>
            </div>

            <div class="alumni-slide-container swiper">
                <ul class="alumni-card-list swiper-wrapper">
                    <li class="alumni-card-item swiper-slide">
                        <a href="#" class="alumni-card-link">
                            <img src="{{ asset('img/logo.webp') }}" alt="Foto Alumni" class="alumni-card-image" data-swiper-parallax="-80">
                            <p class="alumni-card-badge" data-swiper-parallax="-40">Rafi Pratama</p>
                            <h2 class="alumni-card-title" data-swiper-parallax="-20">“Studying at SMK Metland made me more work-ready because I got used to projects and deadlines."</h2>
                            <span class="alumni-card-button" data-swiper-parallax="-8"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                    <li class="alumni-card-item swiper-slide">
                        <a href="#" class="alumni-card-link">
                            <img src="{{ asset('img/logo.webp') }}" alt="Foto Alumni" class="alumni-card-image" data-swiper-parallax="-80">
                            <p class="alumni-card-badge" data-swiper-parallax="-40">Dimas Mahendra</p>
                            <h2 class="alumni-card-title" data-swiper-parallax="-20">“Materi praktiknya relevan dengan industri, jadi saat Graduate saya lebih percaya diri masuk dunia kerja."</h2>
                            <span class="alumni-card-button" data-swiper-parallax="-8"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                    <li class="alumni-card-item swiper-slide">
                        <a href="#" class="alumni-card-link">
                            <img src="{{ asset('img/logo.webp') }}" alt="Foto Alumni" class="alumni-card-image" data-swiper-parallax="-80">
                            <p class="alumni-card-badge" data-swiper-parallax="-40">Rifki Pratama</p>
                            <h2 class="alumni-card-title" data-swiper-parallax="-20">“The teachers are supportive and the school environment helped me grow and gain confidence."</h2>
                            <span class="alumni-card-button" data-swiper-parallax="-8"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                    <li class="alumni-card-item swiper-slide">
                        <a href="#" class="alumni-card-link">
                            <img src="{{ asset('img/logo.webp') }}" alt="Foto Alumni" class="alumni-card-image" data-swiper-parallax="-80">
                            <p class="alumni-card-badge" data-swiper-parallax="-40">Alya Ramadhani</p>
                            <h2 class="alumni-card-title" data-swiper-parallax="-20">“Organizational activities and extracurriculars taught me teamwork, communication, and leadership."</h2>
                            <span class="alumni-card-button" data-swiper-parallax="-8"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                    <li class="alumni-card-item swiper-slide">
                        <a href="#" class="alumni-card-link">
                            <img src="{{ asset('img/logo.webp') }}" alt="Foto Alumni" class="alumni-card-image" data-swiper-parallax="-80">
                            <p class="alumni-card-badge" data-swiper-parallax="-40">Fikri Saputra</p>
                            <h2 class="alumni-card-title" data-swiper-parallax="-20">“SMK Metland provides a balanced learning experience between theory, practice, and character.”</h2>
                            <span class="alumni-card-button" data-swiper-parallax="-8"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </li>
                </ul>

                <div class="alumni-controls">
                    <div class="swiper-pagination" aria-label="Alumni slide pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
      <div class="section-header">
        <span class="section-badge">Contact Us</span>
        <h2 class="section-title">Connect With Our Team</h2>
        <p class="section-desc">Have questions about our school, programs, or enrollment? Send Message and our team akan menghubungi Anda.</p>
      </div>

      <div class="row">
        <div class="contact-left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9227473878086!2d106.97256397475222!3d-6.4039541935867605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699445f0d1c541%3A0x3c8a27a75eb76093!2sSMK%20Metland%20School!5e0!3m2!1sid!2sid!4v1771736307836!5m2!1sid!2sid"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="map"
            ></iframe>
            <div class="contact-left-text">
                <h3>Ready to craft your future with us?</h3>
                <p>Join Metland College today and take the first step towards a successful career. Our dedicated team is here to guide you through every step of your educational journey.</p>
            </div>
        </div>

        <form action="{{ route('contact.store') }}" method="POST" id="contact-form" novalidate>
            @csrf
            <label for="name" class="form-label">Name</label>
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full name" required minlength="2" />
          </div>
          <label for="email" class="form-label">Email</label>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required />
          </div>
          <label for="phone" class="form-label">Phone Number</label>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone number" required />
          </div>
            <label for="desc" class="form-label">What's your message?</label>
          <div class="input-group">
            <i data-feather="desc"></i>
            <textarea name="message" placeholder="Description" required>{{ old('message') }}</textarea>
          </div>
          <p class="contact-feedback {{ session('contact_success') ? 'is-success' : ($errors->any() ? 'is-error' : '') }}" id="contact-feedback" role="status" aria-live="polite">
              {{ session('contact_success') ?? ($errors->first() ?: '') }}
          </p>
          <button type="submit" class="btn contact-btn">Send Message</button>
        </form>
      </div>
    </section>

    <section class="school-partnership" id="partnership" aria-label="PARTNERSHIP industri dan perguruan tinggi">
        <div class="partnership-shell">
            <div class="partnership-header">
                <span class="partnership-badge">PARTNERSHIP</span>
                <h2 class="partnership-title">PARTNERSHIP <span>Industri & Perguruan Tinggi</span></h2>
                <p class="partnership-desc">Sourced from the partnership list on the official SMK Metland website, this collaboration supports internship, teaching factory, and synchronization of industry needs.</p>
            </div>

            <div class="partner-group">
                <h3>Industry Partners</h3>
                <div class="partner-logo-grid">
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/virtalus-150x150.png') }}" alt="Logo Virtalus">
                        <p>Virtalus</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Grand_Metropolitan-removebg-preview-150x150.png') }}" alt="Logo Grand Metropolitan">
                        <p>Grand Metropolitan</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Kaliana_Apartment-removebg-preview-150x150.png') }}" alt="Logo Kaliana Apartment">
                        <p>Kaliana Apartment</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Indesso-removebg-preview-150x150.png') }}" alt="Logo Indesso">
                        <p>Indesso</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Metropolitan_Mall_Cibubur-removebg-preview-150x150.png') }}" alt="Logo Metropolitan Mall Cibubur">
                        <p>Metropolitan Mall Cibubur</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/PT_Metland-removebg-preview-e1704943421395-150x150.png') }}" alt="Logo PT Metropolitan Land">
                        <p>PT Metropolitan Land</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Sila_Tea-removebg-preview-150x150.png') }}" alt="Logo Sila Tea">
                        <p>Sila Tea</p>
                    </article>
                </div>
            </div>

            <div class="partner-group">
                <h3>Hotel & Hospitality Partners</h3>
                <div class="partner-logo-grid">
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Metland-Hotels-Group-150x150.png') }}" alt="Logo Metland Hotels Group">
                        <p>Metland Hotels Group</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Ayana-removebg-preview-1-150x150.png') }}" alt="Logo Ayana Midplaza Jakarta">
                        <p>Ayana Midplaza Jakarta</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Harris_Hotel-removebg-preview-150x150.png') }}" alt="Logo Harris Hotels">
                        <p>Harris Hotels</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/accor-e1705022947913-150x150.png') }}" alt="Logo Accor">
                        <p>Accor</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/ritz-calton-150x150.png') }}" alt="Logo The Ritz-Carlton">
                        <p>The Ritz-Carlton</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/shangri-150x150.png') }}" alt="Logo Shangri-La">
                        <p>Shangri-La</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Kempinski-removebg-preview-150x150.png') }}" alt="Logo Kempinski">
                        <p>Kempinski</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Horison_Hotels_Group__1_-removebg-preview-150x150.png') }}" alt="Logo Horison Hotels Group">
                        <p>Horison Hotels Group</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Ra_Suites-removebg-preview-150x150.png') }}" alt="Logo RA Suites">
                        <p>RA Suites</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Hotel_Ciputra_Cibubur-removebg-preview-150x150.png') }}" alt="Logo Hotel Ciputra Cibubur">
                        <p>Hotel Ciputra Cibubur</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Pullman-removebg-preview-150x150.png') }}" alt="Logo Pullman">
                        <p>Pullman</p>
                    </article>
                </div>
            </div>

            <div class="partner-group">
                <h3>University Partners</h3>
                <div class="partner-logo-grid">
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/biru-150x150.png') }}" alt="Logo STIE Pariwisata YAPARI-AKTRIPA">
                        <p>STIE Pariwisata YAPARI-AKTRIPA</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/Phitsanulok_Logo-1-150x150.jpg') }}" alt="Logo Petchruniversity">
                        <p>Petchruniversity</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/dt_153037286-150x90.png') }}" alt="Logo Anabuki">
                        <p>Anabuki</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/long-beach-150x150.png') }}" alt="Logo Longbeach">
                        <p>Longbeach</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/philipin-university-150x150.png') }}" alt="Logo Philippine University">
                        <p>Philippine University</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/puket-1-150x150.png') }}" alt="Logo Phuket Partner">
                        <p>Phuket Partner</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/teii-e1705024305638-150x150.png') }}" alt="Logo TEII Program">
                        <p>TEII Program</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/trskt-150x150.png') }}" alt="Logo TRSKT Partner">
                        <p>TRSKT Partner</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/unesco-150x150.png') }}" alt="Logo UNESCO Partner">
                        <p>UNESCO Partner</p>
                    </article>
                    <article class="partner-logo-card">
                        <img src="{{ asset('img/partners/IMG-20230612-WA0015-1-150x150.jpg') }}" alt="Logo International Campus Partner">
                        <p>International Campus Partner</p>
                    </article>
                </div>
            </div>

            <div class="partnership-source">
                <a href="https://smkmetland.net/ppdb/" target="_blank" rel="noopener noreferrer">Logo source: smkmetland.net</a>
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
                <a href="#contact">Contact</a>
                <a href="#partnership">Partnership</a>
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
