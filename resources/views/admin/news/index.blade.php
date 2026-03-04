@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>News</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Add News</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->author->name }}</td>
                <td>{{ $item->published_at ? $item->published_at->format('Y-m-d') : 'Draft' }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $news->links() }}
</div>
@endsection