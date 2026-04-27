<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - LPK-LKP METLAND COLLEGE</title>
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
        .course-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .course-tags span {
            background: rgba(28, 165, 165, 0.1);
            color: #0f6c75;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
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
            background: linear-gradient(135deg, #1ca5a5, #0f6c75);
            color: #fff;
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(28, 165, 165, 0.3);
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
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset("img/LOGO METLAND COLLEGE-02.png") }}" alt="Logo Metland College" class="logo-img">Metland College
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
            <p class="hero-eyebrow">"Join our elite training programs"</p>
            <h1 class="hero-title">Start Your <br><span>JOURNEY</span></h1>
            <p>Ready to become a hospitality professional? Register now and take the first step towards a global career with Metland College.</p>
            <div class="hero-actions">
                <a href="#registration-form" class="hero-btn">Register Now</a>
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
                    <div class="course-tags">
                        <span>Hotel & Hospitality</span>
                        <span>Culinary Arts</span>
                        <span>Digital Development</span>
                        <span>Multi-Media Design</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form-section" id="registration-form">
        <div class="form-container">
            <div class="form-header">
                <span class="section-badge" style="margin: 0 auto 15px;">Student Enrollment</span>
                <h2>Application Form</h2>
                <p>Please fill out the form accurately to start your registration process.</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success border-0 shadow-sm mb-4" style="border-radius: 15px; background-color: #f0fdf4; color: #166534;">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger border-0 shadow-sm mb-4" style="border-radius: 15px; background-color: #fef2f2; color: #991b1b;">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('ppdb.store') }}" method="POST">
                @csrf
                <div class="form-grid">
                    <div class="field-group full">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required>
                        @error('full_name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="birth_date">Date of Birth</label>
                        <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
                        @error('birth_date')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select gender</option>
                            <option value="Male" @selected(old('gender') === 'Male')>Male</option>
                            <option value="Female" @selected(old('gender') === 'Female')>Female</option>
                        </select>
                        @error('gender')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group full">
                        <label for="last_school">Last School</label>
                        <input type="text" id="last_school" name="last_school" value="{{ old('last_school') }}" placeholder="Enter your last school" required>
                        @error('last_school')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-group full">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="field-group full">
                        <label for="majors">Majors</label>
                        <select id="majors" name="majors" required>
                            <option value="">Select majors</option>
                            <option value="Hotel & Hospitality" @selected(old('majors') === 'Hotel & Hospitality')>Hotel & Hospitality</option>
                            <option value="Culinary Arts" @selected(old('majors') === 'Culinary Arts')>Culinary Arts</option>
                            <option value="Digital Development" @selected(old('majors') === 'Digital Development')>Digital Development</option>
                            <option value="Multi-Media Design" @selected(old('majors') === 'Multi-Media Design')>Multi-Media Design</option>
                        </select>
                        @error('majors')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field-group full">
                        <label for="country">Country Goal</label>
                        <select id="country" name="country" required>
                            <option value="">Select Destination Country</option>
                            <option value="English" @selected(old('country') === 'English')>English</option>
                            <option value="Mandarin" @selected(old('country') === 'Mandarin')>Mandarin</option>
                            <option value="Japan" @selected(old('country') === 'Japan')>Japan</option>
                            <option value="German" @selected(old('country') === 'German')>German</option>
                            <option value="Korea" @selected(old('country') === 'Korea')>Korea</option>
                            <option value="Dubai" @selected(old('country') === 'Dubai')>Dubai</option>
                        </select>
                        @error('country')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="phone">Phone Number (WhatsApp)</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="e.g. 08123456789" required>
                        @error('phone')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="e.g. name@example.com" required>
                        @error('email')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field-group full">
                        <label for="reason">Reason for Joining</label>
                        <textarea id="reason" name="reason" placeholder="Why do you want to join Metland College?" required>{{ old('reason') }}</textarea>
                        @error('reason')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="submit-btn-wrap">
                    <button type="submit" class="reg-submit-btn">Submit Application</button>
                    <p class="mt-3 text-muted small">By submitting, you agree to our terms and conditions.</p>
                </div>
            </form>
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
                <a href="{{ url('/') }}#about-smk">About</a>
                <a href="{{ url('/') }}#career-section">Career</a>
                <a href="{{ route('news') }}">News</a>
                <a href="{{ url('/') }}#contact">Contact</a>
                <a href="{{ url('/') }}#partnership">Partnership</a>
                <a href="{{ url('/') }}#alumni-section">More</a>
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
