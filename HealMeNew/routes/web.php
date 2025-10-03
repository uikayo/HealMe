<?php

use Illuminate\Support\Facades\Route;

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



// 3. login
Route::get('/login', function () {
    return view('3loginregister.login');
})->name('login');



// 4. Mood Checkcer
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
