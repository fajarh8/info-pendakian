<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('/about', function () {return view('about');});
Route::get('/destination', function () {return view('destination');});
Route::get('/blog', function () {return view('blog');});
Route::get('/blog-single', function () {return view('blog-single');});
Route::get('/contact', function () {return view('contact');});
Route::get('/destination', function () {return view('destination');});
Route::get('/hotel', function () {return view('hotel');});
Route::get('/main', function () {return view('main');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
