<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="icon" href="{{ asset('https://png.pngtree.com/png-vector/20230302/ourmid/pngtree-dashboard-line-icon-vector-png-image_6626604.png') }}" type="image/png">
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <input type="email" name="email" placeholder="Admin Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
