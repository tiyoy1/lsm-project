<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK METLAND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{ asset("img/logo.webp") }}" alt="" class="logo-img">
                <h4>SMK METLAND</h4>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Majors</a></li>
            <li><a href="#">Organization</a></li>
            <li><a href="#">Top Alumni</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <button type="button">PPDB</button>
    </nav>

    <main>
        <div class="container">
            <div class="main-copy">
                <p>Welcome to</p>
                <h2>SMK PARIWISATA METLAND SCHOOL</h2>
                <p>Belajar, berkarya, dan tumbuh bareng lingkungan sekolah yang aktif, kreatif, dan siap kerja.</p>
                <div class="cta-btn">
                    <button type="button">SEE MORE!</button>
                </div>
            </div>
            <div id="schoolCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="3200">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#schoolCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/hero.png') }}" class="d-block w-100 slide-photo slide-photo-1" alt="Campus view">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/hero.png') }}" class="d-block w-100 slide-photo slide-photo-2" alt="School activity">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/hero.png') }}" class="d-block w-100 slide-photo slide-photo-3" alt="Learning environment">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>
    <div class="container highlights-section">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <p>MAJORS</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <p>NEWS</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <p>VISION</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">
                    <p>MISSION</p>
                </div>
            </div>
        </div>
    </div>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="{{ asset("js/script.js") }}"></script>
</body>
</html>
