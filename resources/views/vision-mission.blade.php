<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f5f8fc;
            --panel: #ffffff;
            --line: #d8e3ef;
            --text: #16263a;
            --muted: #5b6e84;
            --primary: #0b4f8a;
            --accent: #19a7ce;
            --shadow: 0 14px 30px rgba(10, 31, 68, 0.08);
        }

        body {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 8% 10%, rgba(25, 167, 206, 0.09), transparent 28%),
                radial-gradient(circle at 90% 12%, rgba(11, 79, 138, 0.08), transparent 30%),
                var(--bg);
        }

        .top-strip {
            background: linear-gradient(90deg, var(--primary), #103d66);
            color: #eef7ff;
            font-size: 0.92rem;
        }

        .top-strip .container {
            padding-top: 8px;
            padding-bottom: 8px;
        }

        .hero {
            background:
                linear-gradient(115deg, rgba(11, 79, 138, 0.95), rgba(11, 79, 138, 0.8)),
                url('https://images.unsplash.com/photo-1462530260150-162092dbf011?auto=format&fit=crop&w=1500&q=70') center/cover;
            color: #f4fbff;
            padding: 72px 0 76px;
        }

        .hero-badge {
            display: inline-block;
            font-size: 0.8rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            font-weight: 700;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.28);
            color: #eaf8ff;
            border-radius: 999px;
            padding: 7px 12px;
            margin-bottom: 14px;
        }

        .hero h1 {
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: 0.01em;
        }

        .hero p {
            color: rgba(235, 248, 255, 0.95);
            max-width: 680px;
            margin-bottom: 0;
        }

        .section-wrap {
            margin-top: -32px;
            margin-bottom: 48px;
        }

        .panel {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: var(--shadow);
            padding: 22px;
        }

        .panel + .panel {
            margin-top: 20px;
        }

        .panel-title {
            font-size: 1.15rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: var(--primary);
        }

        .lead-copy {
            color: var(--muted);
            margin-bottom: 0;
        }

        .vm-card {
            height: 100%;
            background: linear-gradient(180deg, #ffffff, #f9fcff);
            border: 1px solid var(--line);
            border-radius: 14px;
            box-shadow: var(--shadow);
            padding: 22px;
        }

        .vm-card h2 {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 14px;
        }

        .vm-card p {
            margin-bottom: 0;
            color: #1f334b;
        }

        .mission-list {
            margin: 0;
            padding-left: 18px;
        }

        .mission-list li {
            margin-bottom: 8px;
            color: #1f334b;
        }

        .quick-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-school {
            border-radius: 10px;
            font-weight: 700;
            border: 0;
            padding: 10px 16px;
        }

        .btn-primary-school {
            background: linear-gradient(135deg, var(--primary), #0e67af);
            color: #fff;
        }

        .btn-primary-school:hover {
            color: #fff;
            filter: brightness(1.05);
        }

        .btn-outline-school {
            background: #fff;
            color: var(--primary);
            border: 1px solid #b8cee3;
        }

        .btn-outline-school:hover {
            background: #f2f8ff;
            color: var(--primary);
        }

        .empty-state {
            text-align: center;
            padding: 28px 16px;
            color: var(--muted);
        }

        @media (max-width: 768px) {
            .hero {
                padding-top: 54px;
                padding-bottom: 58px;
            }

            .section-wrap {
                margin-top: -20px;
            }
        }
    </style>
</head>
<body>
    <div class="top-strip">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div>Profil Sekolah</div>
            <div>Visi, misi, dan arah pengembangan pendidikan sekolah</div>
        </div>
    </div>

    <section class="hero">
        <div class="container">
            <div class="hero-badge">Halaman Resmi</div>
            <h1>Visi & Misi Sekolah</h1>
            <p>
                Halaman ini menampilkan komitmen utama sekolah dalam membangun lingkungan belajar
                yang berkarakter, kompeten, dan siap menghadapi tantangan masa depan.
            </p>
        </div>
    </section>

    <main class="section-wrap">
        <div class="container">
            <div class="panel mb-4">
                <h3 class="panel-title">Arah Dasar Pengembangan Sekolah</h3>
                <p class="lead-copy">
                    Rumusan visi dan misi menjadi fondasi kebijakan akademik, pembinaan karakter,
                    serta penguatan kompetensi peserta didik di setiap program sekolah.
                </p>
            </div>

            @if($visionMission)
                @php
                    $missionLines = preg_split('/\r\n|\r|\n/', (string) $visionMission->mission);
                    $missionLines = array_values(array_filter(array_map('trim', $missionLines)));
                @endphp

                <div class="row g-4">
                    <div class="col-lg-5">
                        <article class="vm-card">
                            <h2>Visi</h2>
                            <p>{{ $visionMission->vision }}</p>
                        </article>
                    </div>
                    <div class="col-lg-7">
                        <article class="vm-card">
                            <h2>Misi</h2>
                            @if(count($missionLines) > 1)
                                <ol class="mission-list">
                                    @foreach($missionLines as $line)
                                        <li>{{ ltrim($line, "-• \t") }}</li>
                                    @endforeach
                                </ol>
                            @else
                                <p>{{ $visionMission->mission }}</p>
                            @endif
                        </article>
                    </div>
                </div>
            @else
                <div class="panel empty-state">
                    Data visi misi belum tersedia.
                </div>
            @endif

            <div class="panel mt-4">
                <h3 class="panel-title">Akses Cepat</h3>
                <div class="quick-actions">
                    <a href="{{ url('/') }}" class="btn btn-school btn-outline-school">Kembali ke Beranda</a>
                    <a href="{{ route('ppdb.create') }}" class="btn btn-school btn-primary-school">Pendaftaran PPDB</a>
                    <a href="{{ url('/news') }}" class="btn btn-school btn-outline-school">Lihat Berita Sekolah</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
