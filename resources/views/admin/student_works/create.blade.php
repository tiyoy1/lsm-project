@extends('layouts.admin')

@section('title', 'Tambah Karya Siswa')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Karya Siswa</h1>

    <form action="{{ route('admin.student-works.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.student_works._form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.student-works.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
