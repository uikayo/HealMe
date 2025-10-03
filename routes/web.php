<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 1. welcome
Route::get('/', function () {
    return view('1welcome.home');
});
Route::get('/menu', function () {
    return view('1welcome.menu');
})->name('menu');



// 2. info
Route::get('/aboutus', function () {
    return view('2info.aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('2info.contactus');
})->name('contactus');



// 4. Mood Checker
Route::get('/mood checker', function () {
    return view('4moodchecker.mood');
})->name('Mood');



// 5. Forum
Route::get('/openforum', function () {
    return view('5forum.openforum');
})->name('Open Forum');



// 6. Update Profile
Route::get('/updateprofile', function () {
    return view('6updateprofile.updateprofile');
})->name('Update Profile');



//7. tarot
Route::get('/tarot', function () {
    return view('7tarot.tarot');
})->name('Tarot');



//8. psychologists
Route::get('/psychologist', function () {
    return view('8psychologist.psychologist');
})->name('Psychologist');



//9. Security Analyst
Route::get('/securityanalyst', function () {
    return view('9securityanalyst.securityanalyst');
})->name('Security Analyst');


// ======================================================================

// Halaman dashboard setelah login
Route::get('/dashboard', function() {
    return view('dashboard'); // Sekarang rute ini akan menampilkan file view
})->middleware('auth')->name('dashboard');

// Rute untuk Tamu (Guest)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/verify', [AuthController::class, 'showVerifyForm'])->name('verification.notice');
    Route::post('/verify', [AuthController::class, 'verify'])->name('verify.submit'); // Memberi nama pada rute POST

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Rute untuk Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');