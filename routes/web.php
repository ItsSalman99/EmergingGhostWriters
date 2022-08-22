<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('about-us', [HomeController::class, 'about'])->name('about-us');