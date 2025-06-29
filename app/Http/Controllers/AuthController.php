<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // تنفيذ عملية تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    // تسجيل الخروج
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // عرض صفحة التسجيل
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // تنفيذ عملية التسجيل
    public function register(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email',
            'password'       => 'required|string|min:6|confirmed',
            'phone'          => 'required|string|max:20',
            'gender'         => 'required|in:Male,Female',
            'dob'            => 'required|date',
            'address'        => 'required|string|max:255',
            'profile_image'  => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // حفظ الصورة
        $image = $request->file('profile_image');
        $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        // إنشاء المستخدم
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'phone'             => $request->phone,
            'gender'            => $request->gender,
            'dob'               => $request->dob,
            'address'           => $request->address,
            'profile_image'     => $imageName,
            'remember_token'    => Str::random(60),
            'email_verified_at' => now(), // ممكن تخليها null لو عاوز تفعيل إيميل
        ]);

        // تسجيل دخول المستخدم مباشرة
        Auth::login($user);

        return redirect('/')->with('success', 'Account created successfully!');
    }
}
