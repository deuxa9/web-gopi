<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailDBController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homes.home');
});

Route::get('/', function () {
    return view('homes.navbar');
});

Route::get('/', function () {
    return view('homes.heroimg');
});

Route::get('/about-us', function () {
    return view('aboutus.home');
});

Route::get('/what-we-do', function () {
    return view('whatwedo.home');
});

Route::get('/contact-us', [EmailController::class, 'contact']);
Route::post('/contact-us', [EmailController::class, 'sendEmail'])->name('send.email');