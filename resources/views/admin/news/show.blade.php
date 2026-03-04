@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>

    <p class="text-muted">
        Author: {{ $news->author?->name ?? 'Unknown' }} |
        Published: {{ $news->published_at ? $news->published_at->format('Y-m-d H:i') : 'Draft' }}
    </p>

    @if($news->image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="max-width: 400px;">
        </div>
    @endif

    <div class="mb-3">
        {!! nl2br(e($news->content)) !!}
    </div>

    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('admin.news.edit', $news) }}" class="btn btn-primary">Edit</a>
</div>
@endsection
