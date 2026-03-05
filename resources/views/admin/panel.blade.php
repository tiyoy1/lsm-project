@extends('layouts.admin')

@section('title', 'Admin Panel')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
        <div>
            <h2 class="mb-1">Admin Control Center</h2>
            <p class="text-muted mb-0">Kelola seluruh modul sekolah dari satu panel terintegrasi.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-user-graduate"></i></div>
                    <h5 class="card-title">Students Panel</h5>
                    <p class="card-text text-muted">Manage student records, updates, and data changes.</p>
                    <a href="{{ route('admin.student.index') }}" class="btn btn-primary">Open Students</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-user-clock"></i></div>
                    <h5 class="card-title">Pending Students Panel</h5>
                    <p class="card-text text-muted">Review pendaftar PPDB baru dan tentukan status accepted/rejected.</p>
                    <a href="{{ route('admin.pending-students.index') }}" class="btn btn-primary">Open Pending Students</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-users"></i></div>
                    <h5 class="card-title">Alumni Panel</h5>
                    <p class="card-text text-muted">Kelola data alumni: nama, tahun lulus, jurusan, pekerjaan, dan kontak.</p>
                    <a href="{{ route('admin.alumni.index') }}" class="btn btn-primary">Open Alumni</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-layer-group"></i></div>
                    <h5 class="card-title">Jurusan Panel</h5>
                    <p class="card-text text-muted">Kelola data jurusan: nama jurusan, kode jurusan, dan deskripsi.</p>
                    <a href="{{ route('admin.majors.index') }}" class="btn btn-primary">Open Jurusan</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-futbol"></i></div>
                    <h5 class="card-title">Ekskul Panel</h5>
                    <p class="card-text text-muted">Kelola data ekstrakurikuler sekolah: nama, pembina, jadwal, dan deskripsi.</p>
                    <a href="{{ route('admin.ekskuls.index') }}" class="btn btn-primary">Open Ekskul</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-bullseye"></i></div>
                    <h5 class="card-title">Visi Misi Panel</h5>
                    <p class="card-text text-muted">Edit konten visi dan misi sekolah untuk ditampilkan di halaman frontend.</p>
                    <a href="{{ route('admin.vision-mission.index') }}" class="btn btn-primary">Open Visi Misi</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-school"></i></div>
                    <h5 class="card-title">Profil Sekolah Panel</h5>
                    <p class="card-text text-muted">Kelola sejarah sekolah, poin value sekolah, dan rules sekolah.</p>
                    <a href="{{ route('admin.school-profile.index') }}" class="btn btn-primary">Open Profil Sekolah</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-building"></i></div>
                    <h5 class="card-title">Organizations Panel</h5>
                    <p class="card-text text-muted">Manage organization profiles and related information.</p>
                    <a href="{{ route('admin.organizations.index') }}" class="btn btn-primary">Open Organizations</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-images"></i></div>
                    <h5 class="card-title">Karya Siswa Panel</h5>
                    <p class="card-text text-muted">Kelola data karya siswa: foto, detail karya, pembuat, dan tanggal dibuat.</p>
                    <a href="{{ route('admin.student-works.index') }}" class="btn btn-primary">Open Karya Siswa</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-2 text-info"><i class="fas fa-newspaper"></i></div>
                    <h5 class="card-title">News Panel</h5>
                    <p class="card-text text-muted">Kelola berita sekolah: judul, isi, gambar, dan status publikasi.</p>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary">Open News</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
