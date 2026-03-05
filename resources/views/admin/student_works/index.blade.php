@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Student Works</h1>
    <a href="{{ route('admin.student-works.create') }}" class="btn btn-primary mb-3">Add Student Work</a>

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
            @foreach($studentWorks as $item)
                <tr>
                    <td>{{ $item->title ?? $item->work_name }}</td>
                    <td>{{ $item->author?->name ?? 'Unknown' }}</td>
                    <td>{{ $item->published_at ? $item->published_at->format('Y-m-d') : 'Draft' }}</td>
                    <td>
                        <a href="{{ route('admin.student-works.edit', $item) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.student-works.destroy', $item) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $studentWorks->links() }}
</div>
@endsection
