@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit News</h1>
    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.news._form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection