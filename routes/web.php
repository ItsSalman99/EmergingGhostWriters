<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');

Route::get('/ghostwriting-services', [HomeController::class, 'ghostWritingServices'])->name('ghostwriting-services');
Route::get('/ghostwriting-services/{id}', [HomeController::class, 'ghostWritingService'])->name('ghostwriting-service');