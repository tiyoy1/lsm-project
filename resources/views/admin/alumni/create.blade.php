@extends('layouts.admin')

@section('title', 'Tambah Alumni')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Alumni</h1>

    <form action="{{ route('legacy-admin.alumni.store') }}" method="POST">
        @include('legacy-admin.alumni._form')

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('legacy-admin.alumni.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
