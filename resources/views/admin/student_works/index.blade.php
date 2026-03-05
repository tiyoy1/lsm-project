@extends('layouts.admin')

@section('title', 'Karya Siswa')

@section('content')
<div class="container">
    <h1>Karya Siswa</h1>

    <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.student-works.create') }}" class="btn btn-primary">Tambah Karya</a>
        <form action="{{ route('admin.student-works.index') }}" method="GET" class="d-flex gap-2">
            <input type="text" name="q" class="form-control" placeholder="Search karya siswa..." value="{{ $search ?? '' }}">
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th style="width: 80px;">Foto</th>
                <th>Nama Karya</th>
                <th>Deskripsi</th>
                <th>Nama Pembuat</th>
                <th>Tanggal Dibuat</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($studentWorks as $work)
                <tr>
                    <td>
                        @if($work->photo)
                            <img src="{{ asset('storage/' . $work->photo) }}" alt="{{ $work->work_name }}" style="max-width: 60px; height: auto;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $work->work_name }}</td>
                    <td>{{ $work->description ?: '-' }}</td>
                    <td>{{ $work->creator_name }}</td>
                    <td>{{ $work->created_date ? $work->created_date->format('Y-m-d') : '-' }}</td>
                    <td>
                        <a href="{{ route('admin.student-works.edit', $work) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.student-works.destroy', $work) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this student work?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Belum ada karya siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $studentWorks->links() }}
</div>
@endsection
