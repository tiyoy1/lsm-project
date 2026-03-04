<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel') - School Admin</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @stack('styles') <!-- For page-specific CSS -->
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-white" style="width: 250px; min-height: 100vh;">
            <div class="p-3">
                <h4 class="text-center">School Admin</h4>
                <hr class="bg-light">
                <nav class="nav flex-column">
                    <a class="nav-link text-white" href="{{ route('admin.panel') }}">
                        <i class="fas fa-table-cells-large me-2"></i> Admin Panel
                    </a>
                    <a class="nav-link text-white" href="{{ route('admin.student.index') }}">
                        <i class="fas fa-user-graduate me-2"></i> Students
                    </a>
                    <a class="nav-link text-white" href="{{ route('admin.organizations.index') }}">
                        <i class="fas fa-building me-2"></i> Organizations
                    </a>
                    <a class="nav-link text-white" href="{{ route('admin.news.index') }}">
                        <i class="fas fa-newspaper me-2"></i> News
                    </a>
                </nav>
            </div>
        </div>

        <!-- Page Content -->
        <div class="flex-grow-1">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <button class="btn btn-outline-secondary d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-circle"></i> {{ Auth::user()->name ?? 'Admin' }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-cog me-2"></i> Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts') <!-- For page-specific scripts -->
</body>
</html>
