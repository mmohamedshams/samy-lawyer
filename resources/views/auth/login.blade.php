<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Law Firm</title>
    <link rel="icon" href="{{ asset('https://static.vecteezy.com/system/resources/thumbnails/044/812/167/small_2x/sophisticated-law-firm-logo-on-transparent-background-png.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(120deg, #d2b48c, #f8f1e4);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
<div class="login-box">
    <h3 class="text-center mb-4">🔐 Login to Law Firm</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
    </div>

    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>

    {{-- ✅ تذكرني --}}
    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label" for="remember">
            Remember Me
        </label>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>

    <div class="text-center mt-3">
        <a href="/register">Don't have an account? Register</a>
    </div>
</form>

</div>
</body>
</html>
