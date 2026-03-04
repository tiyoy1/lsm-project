@extends('layouts.admin')

@section('title', 'Edit Karya Siswa')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Karya Siswa</h1>

    <form action="{{ route('admin.student-works.update', $studentWork) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.student_works._form')

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.student-works.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
