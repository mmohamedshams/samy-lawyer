<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="{{ asset('https://static.vecteezy.com/system/resources/thumbnails/044/812/167/small_2x/sophisticated-law-firm-logo-on-transparent-background-png.png') }}" type="image/png">
  <style>
    body {
      background: #f9f5f0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: sans-serif;
    }
    .register-card {
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.1);
      max-width: 650px;
      width: 100%;
    }
    .btn-register {
      background-color: #c49a6c;
      border: none;
      font-weight: bold;
      padding: 10px;
    }
    .btn-register:hover {
      background-color: #a87f4f;
    }
  </style>
</head>
<body>

<div class="register-card">
  <h3 class="text-center mb-4">Create Account</h3>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
    @csrf
    <div class="row g-3">
      <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
      <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
      <div class="col-md-6"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
      <div class="col-md-6"><input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required></div>
      <div class="col-md-6"><input type="text" name="phone" class="form-control" placeholder="Phone Number" required></div>
      <div class="col-md-6">
        <select name="gender" class="form-control" required>
          <option value="" disabled selected>Gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="col-md-6"><input type="date" name="dob" class="form-control" required></div>
      <div class="col-12"><input type="text" name="address" class="form-control" placeholder="Address" required></div>
      <div class="col-12">
        <label class="form-label">Profile Image</label>
        <input type="file" name="profile_image" class="form-control" accept="image/*" required>
      </div>
    </div>
    <div class="d-grid mt-4">
      <button type="submit" class="btn btn-register">Register</button>
    </div>
    <div class="text-center mt-3">
      <span>Already have an account?</span>
      <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm ms-2">Login</a>
    </div>
  </form>
</div>

</body>
</html>
