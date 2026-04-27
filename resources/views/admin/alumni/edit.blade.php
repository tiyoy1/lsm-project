@extends('layouts.admin')

@section('title', 'Edit Alumni')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Alumni</h1>

    <form action="{{ route('legacy-admin.alumni.update', $alumniItem) }}" method="POST">
        @method('PUT')
        @include('legacy-admin.alumni._form')

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('legacy-admin.alumni.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
