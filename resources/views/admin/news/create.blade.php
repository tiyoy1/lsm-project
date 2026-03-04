@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create News</h1>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.news._form')
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection