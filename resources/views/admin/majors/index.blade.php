@extends('layouts.admin')

@section('title', 'Jurusan')

@section('content')
<div class="container">
    <h1>Jurusan</h1>

    <a href="{{ route('admin.majors.create') }}" class="btn btn-primary mb-3">Tambah Jurusan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th style="width: 60px;">No</th>
                <th>Nama Jurusan</th>
                <th>Kode Jurusan</th>
                <th>Deskripsi</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($majors as $major)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $major->nama_jurusan }}</td>
                    <td>{{ $major->kode_jurusan }}</td>
                    <td>{{ $major->deskripsi ?: '-' }}</td>
                    <td>
                        <a href="{{ route('admin.majors.edit', $major) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.majors.destroy', $major) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus jurusan ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data jurusan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
