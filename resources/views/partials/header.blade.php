<header class="main-header">
    <div class="container-header">
        <img class="logo" src="https://static.vecteezy.com/system/resources/thumbnails/044/812/167/small_2x/sophisticated-law-firm-logo-on-transparent-background-png.png" alt="Logo">
        
        <nav class="main-nav-header">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About Us</a>
            <a href="{{ url('/booking') }}">Book</a>
            <a href="{{ url('/contact') }}">Contact Us</a>

            @auth
    @php
        $profileImage = Auth::user()->profile_image 
            ? asset('uploads/' . Auth::user()->profile_image)
            : asset('uploads/images.jpeg');
    @endphp

    <div class="user-dropdown">
        <div class="user-toggle">
            <img src="{{ $profileImage }}" alt="Profile" class="user-avatar">
            <span class="user-name">{{ Auth::user()->name }}</span>
        </div>
        <div class="user-menu">
            <a href="{{ url('/profile') }}">👤 Profile</a>
            <a href="{{ url('/my-bookings') }}">📅 My Bookings</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Logout</a>
        </div>
    </div>
@endauth

           

            @guest
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endguest
        </nav>
    </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector('.user-toggle');
    const menu = document.querySelector('.user-menu');

    if (toggle && menu) {
        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.style.display = menu.style.display === "flex" ? "none" : "flex";
        });

        document.addEventListener('click', function () {
            menu.style.display = "none";
        });
    }
});
</script>