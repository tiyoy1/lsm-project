<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional & Lifelong Learning - Metland College vocational school offering hospitality, culinary, hotel, DKV, accounting education">
    <title>LPK-LKP METLAND COLLEGE</title>
    @php
        $faviconUrl = null;
        if (filled($contactSetting?->favicon)) {
            $faviconUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($contactSetting->favicon);
        }
    @endphp
    <link rel="icon" type="image/webp" href="{{ $faviconUrl ?: asset('img/LOGO METLAND COLLEGE-02.webp') . '?v=20260305' }}">
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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
    />
</head> 
<body>
    @php
        $logoUrl = null;
        if (filled($contactSetting?->logo)) {
            $logoUrl = \Illuminate\Support\Facades\Storage::disk('public')->url($contactSetting->logo);
        }

        $whatsappNumber = preg_replace('/\\D+/', '', (string) (($contactSetting?->whatsapp ?? '') ?: '6281809999180'));

        $careerSteps = [
            [
                'step' => 'First Step!',
                'title' => 'Pre-Screening Interview',
                'icon' => 'bi-journal-bookmark',
                'summary' => 'Initial stage to filter the readiness, interests, and potential of participants before entering the main program.',
                'details' => [
                    'Participant Registration - Prospective participants register through the official Metland College portal or visit the Transyogi, Cibitung, or Kertajati campus directly.',
                    'CV & Portfolio Submission - Participants submit an updated CV and supporting academic/professional documents for initial evaluation.',
                    'Pre-Screening Interview (1 Month) - This stage assesses the suitability of the 18-32 age group, occupational interests such as Housekeeping, F&B Service, Culinary, and profile linearity with domestic and international job opportunities.',
                    'Placement Focus - Placement directions are prepared for Japan, Germany, Bulgaria, Romania, Croatia, and other destination countries.',
                    'Program Product Knowledge Education - Participants receive an explanation of the Metland College LPK-LKP ecosystem, package options (Fast Track SMK Metland Alumni, Fast Track Network, or Executive), as well as facilities such as dormitories, meals, and laundry.',
                    'Administrative & Training Fee Payment - Participants settle registration and program fees, then receive official receipts and proof of payment.',
                    'Form Completion & Submission (00-06) - Participants complete standard administrative forms and physical/digital documents as a requirement to participate in PBK.',
                ],
                'footer' => 'The output of this stage is participants who pass the initial selection and are ready to proceed to language briefing and industrial training.',
            ],
            [
                'step' => 'Second Step!',
                'title' => 'Language & English for Industry',
                'icon' => 'bi-people',
                'summary' => 'Industrial language briefing and preparation for mobilization to the training venue and dormitory.',
                'details' => [
                    'Determination of Training Date & Summons Letter - LPK Management sets the training batch schedule and sends official summons letters to successful participants.',
                    'Training Venue Coordination (Information Letter) - Training information letters are sent to the industry practice locations such as Metland Hotel Smara Kertajati or other partners.',
                    'Departure Preparation (Mobilization) - Participants receive information on meeting points, departure times, luggage, and travel SOPs to the quarantine location.',
                    'Welcoming & Dining Together - A welcoming event and dining together are held before participants enter the dormitory and hotel to build togetherness.',
                    'Training Venue Orientation (Hotel Tour) - Participants are introduced to the layout, grooming standards, and work culture through industrial observation.',
                    'Metland College LPK-LKP Dormitory Check-in - Participants are mobilized to the dormitory, room assignments are made, 1 set of PBK uniforms is distributed, and E-Modules or physical modules are handed over.',
                ],
                'footer' => 'This stage ensures participants are mentally, administratively, and environmentally ready before starting the core training.',
            ],
            [
                'step' => 'Third Step!',
                'title' => 'Skill Training',
                'icon' => 'bi-briefcase',
                'summary' => 'Competency-based training focusing on practical skills, periodic evaluation, and foreign language intensification.',
                'details' => [
                    'Day 1: PBK Program Orientation - Introduction to the vision, mission, training curriculum, discipline, competency targets, and instructors.',
                    'Day 2: Buddy System Distribution - Peer mentoring is implemented so participants adapt faster and support each other.',
                    'Day 3: Vocational Practice Kick-off - Competency-based training begins immediately using the Teaching Factory model for hospitality and culinary arts.',
                    'Skill Training Duration - Core practical training runs for 3 months.',
                    'Foreign Language Intensification - Industrial and destination country language programs (English, Mandarin, Japanese, German) focus on interviews and operational communication for 2 months.',
                    'Periodic Formative Assessment - Evaluations are conducted on Days 7, 14, 21, and 28. Theory and practical competency tests are held every 6 days, and all evidence must be submitted to the assessor team.',
                ],
                'footer' => 'Participants will be shaped into work-ready individuals with strong technical competencies, discipline, and language skills.',
            ],
            [
                'step' => 'Final Step',
                'title' => 'On Job Training & Final Interview',
                'icon' => 'bi-globe2',
                'summary' => 'Internship placement, international document preparation, user interviews, leading up to job departure.',
                'details' => [
                    'On The Job Training (OJT / PKL) - Participants are deployed to domestic or international partner industries to practice their competencies in a real work environment for 6 months.',
                    'International Departure Document Preparation - Processing of passports, work/internship visas, LSP competency certificates, MCU (Medical Check-up), and legalization of employment agreement documents.',
                    'User - Final Interview - Mentoring for direct interviews with industry representatives from destination countries such as Japan, Germany, Croatia, and others.',
                    'Pre-Departure Briefing - Final briefing related to destination country culture, advanced discipline, labor laws, and mental readiness.',
                    'Deployment - The process of dispatching participants to destination countries as a step towards zero unemployment according to the grand vision of LPK-LKP Metland College.',
                ],
                'footer' => 'This final stage prepares participants for full job placement and professional transition.',
            ],
        ];
    @endphp
    <nav>
        <div class="logo">
            <img src="{{ $logoUrl ?: asset('img/LOGO METLAND COLLEGE-02.webp') }}" alt="Logo Metland College" class="logo-img" loading="lazy" decoding="async"><span class="notranslate">Metland College</span>
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
            <li><a href="#partnership" data-en="Partnership" data-id="Kemitraan">Partnership</a></li>
        
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
            <button type="button" onclick="setLanguage('id')" id="lang-btn-id">ID</button>
            <button type="button" onclick="setLanguage('en')" id="lang-btn-en">EN</button>
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
                        <div class="hero-slide-media">
                            <img src="{{ asset('img/SMK Metland Cileungsi.webp') }}" alt="SMK Metland Cileungsi" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-media">
                            <img src="{{ asset('img/SMK Metland cibitung.webp') }}" alt="SMK Metland Cibitung" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slide-media">
                            <img src="{{ asset('img/Kertajati.webp') }}" alt="Kertajati" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" decoding="async">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="hero-content">
            <p class="hero-eyebrow">"Professional & Lifelong Learning"</p>
            <h1 class="hero-title">Crafting the <br><span>FUTURE</span></h1>
            <p>Metland College is a vocational school that provides education and training to students who want to work in the hospitality industry.</p>
            <div class="hero-actions">
                <a href="#about-smk"     class="hero-btn">See more</a>
            </div>
        </div>
    </section>  
    <section id="about-smk" class="about-smk-section">
        <div class="about-smk-wrap">
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
                        <img src="{{ asset("img/SMK Metland Cileungsi.webp") }}" alt="Program keahlian" class="about-image" loading="lazy" decoding="async">
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
                        <img src="{{ asset("img/SMK Metland cibitung.webp") }}" alt="Kegiatan siswa" class="about-image" loading="lazy" decoding="async">
                    </div>
                    </a>
                <div class="about-body">
                    <p>A school with an active and supportive learning environment, focusing not only on academics but also on student character development through organizations, social activities, and creative communities.</p>
                </div>
            </div>
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
                        <img src="{{ asset("img/Kertajati.webp") }}" alt="Area sekolah" class="about-image" loading="lazy" decoding="async">
                    </div>
                </a>
                <div class="about-body">
                    <p>An industry-based hospitality training facility providing direct learning experiences in a real work environment. Focuses on hospitality practices so students understand professional standards early on.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="career-section" id="career-section">
        <div class="career-shell">
            <div class="career-head">
                <span class="section-badge" style="user-select: none; transition: all 0.3s ease;">Training Method</span>
                <h2 class="section-title">From <span>Basic</span> to <span>Professional</span></h2> 
                <p class="section-desc">Structured learning, focus on practice, and supported by industry until ready to enter the workforce.</p>
            </div>
            <div class="career-timeline" id="lpk-content">
                <span class="career-line" aria-hidden="true"></span>
                @foreach($careerSteps as $index => $step)
                    <article class="career-step {{ $index % 2 === 0 ? 'is-left' : 'is-right' }}">
                        <span class="career-pill">{{ $step['step'] }}</span>
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
                <a href="{{ route('news.index') }}" class="news-all-link">See All <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="news-layout">
                @if($featuredNews)
                    <article class="news-featured-card">
                        <div class="news-featured-media">
                            <img src="{{ $featuredNews->image_url }}" alt="{{ $featuredNews->localized_title }}" loading="lazy" decoding="async">
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
                                    <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" loading="lazy" decoding="async">
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
                            <img src="/img/hero2.webp" alt="Kegiatan terbaru siswa" loading="lazy" decoding="async">
                            <span class="news-tag">News</span>
                        </div>
                        <div class="news-featured-body">
                            <p class="news-meta"><i class="fa-regular fa-calendar"></i> No data yet</p>
                            <h3>School news has not been published yet</h3>
                            <p>News content will appear here once published from the admin panel.</p>
                            <a href="{{ route('news.index') }}" class="news-read-more">View News Page</a>
                        </div>
                    </article>
                @endif
            </div>
        </div>
    </section>
    <section class="alumni-section" id="alumni-section">
        <div class="alumni-shell">
            <div class="alumni-head text-center pb-4">
                <span class="section-badge"><span>Alumni Reviews</span></span>
                <h2 class="section-title">What <span>They Say</span></h2>
                <p class="section-desc" style="margin: 0 auto;">Alumni reviews regarding their learning experience at SMK Metland.</p>
            </div>

	            <div class="testi-grid">
	                @forelse(($homeTestimonials ?? collect()) as $index => $t)
	                    @php
	                        $initials = collect(preg_split('/\s+/', trim((string) $t->name), -1, PREG_SPLIT_NO_EMPTY))
	                            ->take(2)
	                            ->map(fn ($w) => mb_strtoupper(mb_substr($w, 0, 1)))
	                            ->implode('');
	                        $rating = (int) ($t->rating ?? 5);
	                        $photoUrl = filled($t->photo) ? \Illuminate\Support\Facades\Storage::disk('public')->url($t->photo) : null;
	                        $meta = collect([$t->current_job, $t->company])->filter()->implode(' — ');
	                    @endphp
	                    <div class="testi-card {{ $index === 0 ? 'is-featured' : '' }}">
	                        <div class="testi-stars" aria-label="Rating {{ $rating }} / 5">
	                            @for($i = 1; $i <= 5; $i++)
	                                <i class="bi {{ $i <= $rating ? 'bi-star-fill' : 'bi-star' }}"></i>
	                            @endfor
	                        </div>
	                        @if(filled($t->program))
	                            <div class="testi-dest">
	                                <i class="bi bi-mortarboard"></i>
	                                {{ $t->program }}
	                            </div>
	                        @endif
	                        <p class="testi-quote">"{{ $t->testimonial }}"</p>
	                        <div class="testi-author">
	                            @if($photoUrl)
	                                <img src="{{ $photoUrl }}" alt="{{ $t->name }}" class="testi-avatar" style="object-fit: cover;" loading="lazy" decoding="async">
	                            @else
	                                <div class="testi-avatar" style="background: linear-gradient(135deg, #1ca5a5, #0f6c75);">{{ $initials }}</div>
	                            @endif
	                            <div class="testi-author-info">
	                                <h4>{{ $t->name }}</h4>
	                                <p>{{ $meta ?: 'Alumni' }}</p>
	                            </div>
	                        </div>
	                    </div>
	                @empty
	                    <div class="testi-card is-featured">
	                        <p class="testi-quote">"Belum ada testimoni yang disetujui. Silakan submit testimoni kamu!"</p>
	                        <div class="testi-author">
	                            <div class="testi-avatar" style="background: linear-gradient(135deg, #1ca5a5, #0f6c75);">MC</div>
	                            <div class="testi-author-info">
	                                <h4>Metland College</h4>
	                                <p><a href="{{ route('testimonials.submit') }}">Submit Testimonial</a></p>
	                            </div>
	                        </div>
	                    </div>
	                @endforelse
	            </div>

            <div style="text-align: center; margin-top: 48px;">
                <a href="{{ route('testi') }}" class="career-cta" style="display: inline-block;">See more</a>
            </div>
        </div>
    </section>
    <section class="school-partnership" id="partnership" aria-label="PARTNERSHIP industri dan perguruan tinggi">
        <div class="partnership-shell">
            <div class="partnership-header">
                <h2 class="partnership-title">Industry <span>&amp; Higher Education</span></h2>
                <p class="partnership-desc">Sourced from the partnership list on the official SMK Metland website, this collaboration supports internship, teaching factory, and synchronization of industry needs.</p>
            </div>

	            @php
	                $partnershipGroups = collect($partnerships ?? [])
	                    ->groupBy(fn ($p) => $p->category ?? 'industry');

	                $categoryLabels = [
	                    'industry' => 'Industry Partners',
	                    'hospitality' => 'Hotel & Hospitality Partners',
	                    'university' => 'University & Career Development Partners',
	                ];

	                $categoryOrder = ['industry', 'hospitality', 'university'];
	            @endphp

	            @foreach($categoryOrder as $categoryKey)
	                @php
	                    $items = $partnershipGroups->get($categoryKey, collect());
	                @endphp

	                <div class="partner-group">
	                    <h3>{{ $categoryLabels[$categoryKey] }}</h3>
	                    <div class="partner-logo-grid">
	                        @forelse($items as $partner)
                                @php
                                    $partnerLogoUrl = filled($partner->logo)
                                        ? \Illuminate\Support\Facades\Storage::disk('public')->url($partner->logo)
                                        : asset('img/LOGO METLAND COLLEGE-02.webp');
                                @endphp
	                            <article class="partner-logo-card">
	                                @if(filled($partner->url))
	                                    <a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">
	                                        <img src="{{ $partnerLogoUrl }}" alt="Logo {{ $partner->name }}" loading="lazy" decoding="async">
	                                        <p>{{ $partner->name }}</p>
	                                    </a>
	                                @else
	                                    <img src="{{ $partnerLogoUrl }}" alt="Logo {{ $partner->name }}" loading="lazy" decoding="async">
	                                    <p>{{ $partner->name }}</p>
	                                @endif
	                            </article>
	                        @empty
	                            <article class="partner-logo-card">
	                                <img src="{{ asset('img/LOGO METLAND COLLEGE-02.webp') }}" alt="No partners yet" loading="lazy" decoding="async">
	                                <p>No partners yet</p>
	                            </article>
	                        @endforelse
	                    </div>
	                </div>
	            @endforeach

            <div class="partnership-source">
                <a href="https://smkmetland.net/ppdb/" target="_blank" rel="noopener noreferrer">Logo source: smkmetland.net</a>
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

    <footer class="school-footer" id="school-footer">
        <div class="footer-shell">
            <div class="footer-brand">
                <div class="footer-brand-head">
                    <img src="{{ $logoUrl ?: asset('img/LOGO METLAND COLLEGE-02.webp') }}" alt="Logo Metland College" class="footer-logo" loading="lazy" decoding="async">
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
                            <img src="{{ $item->image_url }}" alt="{{ $item->localized_title }}" class="footer-post-thumb" loading="lazy" decoding="async">
                            <div class="footer-post-content">
                                <a href="{{ route('news.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->localized_title, 76) }}</a>
                                <p class="footer-post-date">{{ ($item->published_at ?? $item->created_at)->translatedFormat('d M Y') }}</p>
                            </div>
                        </article>
                    @empty
                        <article class="footer-post-item">
                            <img src="{{ asset('img/hero2.webp') }}" alt="No News yet" class="footer-post-thumb" loading="lazy" decoding="async">
                            <div class="footer-post-content">
                                <a href="{{ route('news.index') }}">No news has been published yet</a>
                                <p class="footer-post-date">Please check back later</p>
                            </div>
                        </article>
                    @endforelse
                </div>
            </div>

            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="{{ route('Profile') }}">About</a>
                <a href="{{ route('LPK') }}">Career</a>
                <a href="{{ route('news.index') }}">News</a>
                <a href="#partnership">Partnership</a>
                <a href="#alumni-section">More</a>
            </div>

            <div class="footer-contact-map">
                <p>
                    <i class="bi bi-envelope-fill" style="color: #1ca5a5; margin-right: 6px;"></i>
                    <a href="mailto:admin@metlandcollege.net">admin@metlandcollege.net</a>
                </p>
                <p>
                    <i class="bi bi-whatsapp" style="color: #1ca5a5; margin-right: 6px;"></i>
                    {{ filled($contactSetting?->whatsapp) ? $contactSetting->whatsapp : '+62-8180-9999-180' }}
                </p>
                <p style="margin: 14px 0 12px;"><strong>Locations:</strong></p>
                <p style="margin-bottom: 8px;">
                    <a href="https://maps.app.goo.gl/WkG3ifbvA4o52RkAA" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SMK METLAND CILEUNGSI</strong><br>
                    </a>
                </p>
                <p style="margin-bottom: 8px;">
                    <a href="https://maps.app.goo.gl/aJr5nJd8Fe2ArL8s8" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SMK METLAND CIBITUNG</strong><br>
                    </a>
                </p>
                <p style="margin-bottom: 8px;">
                    <a href="https://maps.app.goo.gl/eKSkxnsdNuP2UJbQ7" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>HOTEL METLAND SMARA KERTAJATI</strong><br>
                    </a>
                </p>
                <p style="margin-bottom: 8px;">
                    <a href="https://maps.app.goo.gl/v7NmD5Zn2b3m2zGM7" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>HORISON ULTIMA BEKASI</strong><br>
                    </a>
                </p>
                <p style="margin-bottom: 16px;">
                    <a href="https://maps.app.goo.gl/xAJFLvyfYEwFE5sQ7" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-geo-alt-fill" style="color: #1ca5a5; margin-right: 4px;"></i> <strong>SEVA SEMINYAK BADUNG BALI</strong><br>
                    </a>
                </p>
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.6856233061058!2d108.18295181017014!3d-6.685809193281614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ed711a2e575df%3A0x94929efc10aa1b2b!2sHotel%20Metland%20Smara%20Kertajati%20by%20Horison!5e0!3m2!1sen!2sid!4v1779417620688!5m2!1sen!2sid">
                </iframe>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
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
    <div id="google_translate_element" style="display:none;"></div>
    <script src="{{ asset('js/translator.js') }}"></script>
</body>
</html>
