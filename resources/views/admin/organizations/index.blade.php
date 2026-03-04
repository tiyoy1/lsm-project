@extends('layouts.admin')

@section('title', 'Organizations')

@section('content')
<div class="container">
    <h1>Organizations</h1>

    <a href="{{ route('admin.organizations.create') }}" class="btn btn-primary mb-3">Add Organization</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th style="width: 80px;">Logo</th>
                <th>Name</th>
                <th>Description</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($organizations as $org)
                <tr>
                    <td>
                        @if($org->logo)
                            <img src="{{ asset('storage/' . $org->logo) }}" alt="{{ $org->name }}" style="max-width: 60px; height: auto;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $org->name }}</td>
                    <td>{{ $org->description ?: '-' }}</td>
                    <td>
                        <a href="{{ route('admin.organizations.edit', $org) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('admin.organizations.destroy', $org) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this organization?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No organizations yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
