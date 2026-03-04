<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK METLAND</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
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
            <img src="{{ asset("img/logo.webp") }}" alt="" class="logo-img">SMK     METLAND
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about-smk">School Profile</a></li>
            <li><a href="#majors-smk">Majors</a></li>
            <li><a href="#organization-section">Organization</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#news-section">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Student Work</a></li>
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
            <button type="button">PPDB</button>
        </div>
    </nav>
    <div class="slider-container">
        <div class="slider-items">
            <img src="{{ asset("img/hero.png") }}" alt="">
            <div class="slider-content">
                <p class="slider-subtitle">welcome to</p>
                <h2 class="slider-title">SMK METLAND</h2>
                <p class="slider-description">Mencetak Generasi Siap Kerja, Siap Berkarya.</p>
                <a href="#" class="slider-action">READ MORE!</a>
            </div>
        </div>
        <div class="slider-items">
            <img src="{{ asset("img/hero2.JPG") }}" alt="">
            <div class="slider-content">
                <p class="slider-subtitle">welcome to</p>
                <h2 class="slider-title">SMK METLAND</h2>
                <p class="slider-description">Sekolah seribu event! cek berita terkini kami.</p>
                <a href="#" class="slider-action">CHECK THIS OUT!</a>
            </div>
        </div>
        <div class="slider-items">
            <img src="{{ asset("img/hero3.png") }}" alt="">
            <div class="slider-content">
                <p class="slider-subtitle">welcome to</p>
                <h2 class="slider-title">SMK METLAND</h2>
                <p class="slider-description">Langkah Awal Menuju Karier Gemilang!</p>
                <a href="#" class="slider-action">JOIN US!!</a>
            </div>
        </div>
        <button class="slider-nav slider-prev" type="button" aria-label="Previous slide">‹</button>
        <button class="slider-nav slider-next" type="button" aria-label="Next slide">›</button>
        <div class="slider-dots" aria-label="Slider pagination"></div>
    </div>
    <section id="about-smk" class="about-smk-section">
        <div class="about-smk-wrap">
            <div class="about-card">
                <a href="{{ url('/about-smk') }}" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-mortarboard about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>Why SMK?</h3>
                            <span class="about-head-cta">Selengkapnya</span>
                        </div>
                    </div>
                </a>
                <img src="{{ asset("img/hero.png") }}" alt="Area sekolah" class="about-image">
                <div class="about-body">
                    <p>SMK Metland menghadirkan pembelajaran berbasis praktik, kolaborasi, dan proyek nyata yang relevan dengan kebutuhan dunia kerja saat ini.</p>
                </div>
            </div>
            <div class="about-card">
                <a href="{{ url('/program-keahlian') }}" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-buildings about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>Program Keahlian</h3>
                            <span class="about-head-cta">Selengkapnya</span>
                        </div>
                    </div>
                </a>
                <img src="{{ asset("img/about.png") }}" alt="Program keahlian" class="about-image">
                <div class="about-body">
                    <p>Berbagai jurusan dirancang untuk membentuk lulusan yang kompeten, kreatif, dan siap berkembang di lingkungan industri modern.</p>
                </div>
            </div>
            <div class="about-card">
                <a href="{{ url('/campus-life') }}" class="about-head-link">
                    <div class="about-head">
                        <i class="bi bi-people about-icon" aria-hidden="true"></i>
                        <div>
                            <h3>School Life</h3>
                            <span class="about-head-cta">Selengkapnya</span>
                        </div>
                    </div>
                </a>
                <img src="{{ asset("img/about2.png") }}" alt="Kegiatan siswa" class="about-image">
                <div class="about-body">
                    <p>Lingkungan sekolah aktif dan suportif, mendorong siswa tumbuh lewat organisasi, kegiatan sosial, olahraga, dan komunitas kreatif.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-carousel-section" aria-label="Keunggulan SMK Metland" id="majors-smk">
        <h2 class="feature-carousel-title">
            Majors</h2>
        <p>lihat jurusan yang kami sediakan</p>
        <div class="feature-carousel">
            <article class="feature-card is-active">
                <div class="feature-media">
                    <img src="{{ asset("img/pplg/pplg2.png") }}" alt="Belajar praktis di SMK Metland">
                </div>
                <div class="feature-content">
                    <i class="ph ph-desktop-tower"></i>
                    <h3>PPLG/IT</h3>
                    <p>fokus pada pengembangan software, website, aplikasi mobile, dan game.
Siswa belajar coding, UI/UX, database, hingga project berbasis industri.</p>
                    <a href="#" class="feature-btn">More</a>
                </div>
            </article>
            <article class="feature-card">
                <div class="feature-media">
                    <img src="{{ asset("img/dkv/dkv2.png") }}" alt="Guru pembimbing berpengalaman">
                </div>
                <div class="feature-content">
                    <i class="ph ph-pen-nib-straight"></i>
                    <h3>DKV</h3>
                    <p>mempelajari desain kreatif untuk kebutuhan media digital maupun cetak.
Cocok untuk yang suka visual, branding, dan konten kreatif.</p>
                    <a href="#" class="feature-btn">More</a>
                </div>
            </article>
            <article class="feature-card">
                <div class="feature-media">
                    <img src="{{ asset("img/akuntansi/akuntansi1.png") }}" alt="Kehidupan sekolah aktif">
                </div>
                <div class="feature-content">
                    <i class="ph ph-currency-dollar"></i>
                    <h3>Akuntansi</h3>
                    <p>membekali siswa dengan kemampuan mengelola keuangan dan administrasi bisnis secara profesional.</p>
                    <a href="#" class="feature-btn">More</a>
                </div>
            </article>
            <article class="feature-card">
                <div class="feature-media">
                    <img src="{{ asset("img/hotel/hotel1.png") }}" alt="Kehidupan sekolah aktif">
                </div>
                <div class="feature-content">
                    <i class="ph ph-bank"></i>
                    <h3>Perhotelan</h3>
                    <p>mempersiapkan siswa untuk bekerja di industri hospitality dan layanan profesional.</p>
                    <a href="#" class="feature-btn">More</a>
                </div>
            </article>
            <article class="feature-card">
                <div class="feature-media">
                    <img src="{{ asset("img/kuliner/kuliner1.png") }}" alt="Kehidupan sekolah aktif">
                </div>
                <div class="feature-content">
                    <i class="ph ph-chef-hat"></i>
                    <h3>Kuliner/Tata boga</h3>
                    <p>fokus pada keterampilan memasak profesional dan manajemen usaha makanan.</p>
                    <a href="#" class="feature-btn">More</a>
                </div>
            </article>
            <div class="feature-controls">
                <button type="button" class="feature-nav feature-prev" aria-label="Previous feature">&lt;</button>
                <div class="feature-dots" aria-label="Feature dots"></div>
                <button type="button" class="feature-nav feature-next" aria-label="Next feature">&gt;</button>
            </div>
        </div>
    </section>
    <section class="news-section" id="news-section" aria-label="Berita terkini SMK Metland">
        <div class="news-shell">
            <div class="news-head">
                <span class="news-badge">LATEST NEWS</span>
                <h2>Kabar Terkini SMK Metland</h2>
                <a href="#" class="news-all-link">Lihat Semua <i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="news-layout">
                <article class="news-featured-card">
                    <div class="news-featured-media">
                        <img src="{{ asset("img/hero2.JPG") }}" alt="Kegiatan terbaru siswa">
                        <span class="news-tag">Sekolah</span>
                    </div>
                    <div class="news-featured-body">
                        <p class="news-meta"><i class="fa-regular fa-calendar"></i> 12 Oktober 2026</p>
                        <h3>SMK Metland Gelar Expo Karya Siswa Berbasis Industri</h3>
                        <p>Siswa dari berbagai jurusan menampilkan produk inovatif, mulai dari aplikasi digital, desain branding, hingga karya kuliner kreatif.</p>
                        <a href="#" class="news-read-more">Baca Selengkapnya</a>
                    </div>
                </article>

                <div class="news-side-list">
                    <article class="news-mini-card">
                        <img src="{{ asset("img/pplg/pplg2.png") }}" alt="Kompetisi coding siswa">
                        <div>
                            <p class="news-mini-meta">10 Oktober 2026</p>
                            <h4>Tim PPLG Raih Juara Kompetisi Coding Tingkat Kota</h4>
                        </div>
                    </article>

                    <article class="news-mini-card">
                        <img src="{{ asset("img/dkv/dkv2.png") }}" alt="Pameran desain kreatif">
                        <div>
                            <p class="news-mini-meta">7 Oktober 2026</p>
                            <h4>DKV Tampilkan Pameran Visual Branding Bertema Lokal</h4>
                        </div>
                    </article>

                    <article class="news-mini-card">
                        <img src="{{ asset("img/kuliner/kuliner1.png") }}" alt="Program praktik kuliner">
                        <div>
                            <p class="news-mini-meta">3 Oktober 2026</p>
                            <h4>Program Kuliner Luncurkan Menu Inovatif untuk Teaching Factory</h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset("js/script.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>
