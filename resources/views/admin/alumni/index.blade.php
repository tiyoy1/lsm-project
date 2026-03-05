@extends('layouts.admin')

@section('title', 'Alumni')

@section('content')
<div class="container">
    <h1>Alumni</h1>

    <a href="{{ route('admin.alumni.create') }}" class="btn btn-primary mb-3">Tambah Alumni</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th style="width: 60px;">No</th>
                <th>Nama Alumni</th>
                <th>Tahun Lulus</th>
                <th>Jurusan</th>
                <th>Pekerjaan</th>
                <th>Kontak</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alumni as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_alumni }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->pekerjaan ?: '-' }}</td>
                    <td>{{ $item->kontak ?: '-' }}</td>
                    <td>
                        <a href="{{ route('admin.alumni.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.alumni.destroy', $item) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data alumni ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">Belum ada data alumni.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
