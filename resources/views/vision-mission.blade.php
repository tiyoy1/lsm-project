<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h1 class="h3 mb-4">Visi Misi Sekolah</h1>

                        @if($visionMission)
                            <h2 class="h5">Visi</h2>
                            <p class="mb-4">{{ $visionMission->vision }}</p>

                            <h2 class="h5">Misi</h2>
                            <p class="mb-0">{{ $visionMission->mission }}</p>
                        @else
                            <p class="text-muted mb-0">Data visi misi belum tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
