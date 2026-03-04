@extends('layouts.admin')

@section('title', 'Admin Panel')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Admin Panel</h2>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Students Panel</h5>
                    <p class="card-text text-muted">Manage student records, updates, and data changes.</p>
                    <a href="{{ route('admin.student.index') }}" class="btn btn-primary">Open Students</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Organizations Panel</h5>
                    <p class="card-text text-muted">Manage organization profiles and related information.</p>
                    <a href="{{ route('admin.organizations.index') }}" class="btn btn-primary">Open Organizations</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
