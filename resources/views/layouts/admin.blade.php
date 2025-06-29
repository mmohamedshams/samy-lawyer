<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style-admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="{{ asset('https://png.pngtree.com/png-vector/20230302/ourmid/pngtree-dashboard-line-icon-vector-png-image_6626604.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .admin-header {
            background-color: #343a40;
            color: white;
            padding: 15px 20px;
        }

        .admin-header a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .admin-header a:hover {
            text-decoration: underline;
        }

        .admin-logo {
            font-weight: bold;
            font-size: 22px;
            margin-right: 30px;
        }

        main {
            padding: 30px;
        }
    </style>
</head>
<body>

    <!-- هيدر الأدمن -->
    <header class="admin-header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <div class="admin-logo">🛡️ Admin Panel</div>
            <nav>
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="{{ url('/admin/users') }}">Users</a>
                <a href="{{ url('/admin/bookings') }}">Bookings</a>
                <a href="{{ url('/admin/lawyers') }}">Lawyers</a>
                <a href="{{ url('/admin/settings') }}">Settings</a>
            </nav>
        </div>

        <div>
            <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Logout</button>
            </form>
        </div>
    </header>

    <!-- محتوى الصفحة -->
    <main>
        @yield('content')
    </main>

   <footer>

   </footer>

</body>
</html>