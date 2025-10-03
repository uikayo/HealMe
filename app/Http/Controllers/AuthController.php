<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendOtpMail; // Akan kita buat di Langkah 5

class AuthController extends Controller
{
    // Menampilkan form registrasi (pengganti register.php)
    public function showRegisterForm()
    {
        return view('3loginregister.register');
    }

    // Memproses data registrasi (pengganti register_process.php)
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $otp = rand(100000, 999999);
        $expiry = now()->addMinutes(5);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp_code' => $otp,
            'otp_expiry' => $expiry,
        ]);

        // Kirim email OTP (akan dibuat di Langkah 5)
        Mail::to($user->email)->send(new SendOtpMail($otp));

        return redirect('/verify?email=' . $user->email)->with('success', 'Kode OTP telah dikirim ke email Anda.');
    }

    // Menampilkan form verifikasi (pengganti verify.php)
    public function showVerifyForm(Request $request)
    {
        return view('3loginregister.verify', ['email' => $request->email]);
    }

    // Memproses verifikasi OTP (pengganti verify_process.php)
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'User tidak ditemukan.');
        }

        if ($user->otp_code == $request->otp && now()->isBefore($user->otp_expiry)) {
            $user->update([
                'is_verified' => true,
                'otp_code' => null,
                'otp_expiry' => null,
            ]);

            return redirect('/login')->with('success', 'Verifikasi berhasil! Silakan login.');
        }

        return back()->with('error', 'OTP salah atau sudah kedaluwarsa.');
    }

    // Menampilkan form login (pengganti login.php)
    public function showLoginForm()
    {
        return view('3loginregister.login');
    }

    // Memproses login (pengganti login_process.php)
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !$user->is_verified) {
             return back()->withErrors(['email' => 'Akun tidak valid atau belum diverifikasi.']);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // Redirect ke halaman setelah login
        }

        return back()->withErrors([
            'email' => 'Email atau password yang diberikan tidak cocok.',
        ]);
    }

    // Fungsi Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}