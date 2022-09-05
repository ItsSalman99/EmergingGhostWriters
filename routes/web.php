<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/book-writing', [HomeController::class, 'book_writing'])->name('BookWriting');
Route::get('/book-publishing', [HomeController::class, 'book_publishing'])->name('BookPublishing');
Route::get('/book-marketing', [HomeController::class, 'book_marketing'])->name('BookMarketing');
Route::get('/book-formating', [HomeController::class, 'book_formating'])->name('BookFormating');
Route::get('/video-book-trailers', [HomeController::class, 'video_booktrailers'])->name('VideoBookTrailers');
Route::get('/social-media-writing', [HomeController::class, 'social_mediamarketing'])->name('SocialMediaMarketing');
Route::get('/interactive-ebooks', [HomeController::class, 'InteractiveEbooks'])->name('InteractiveE-Books');
Route::get('/creative-writing', [HomeController::class, 'CreativeWriting'])->name('CreativeWriting');
Route::get('/press-release-writing', [HomeController::class, 'PressReleaseWriting'])->name('PressReleaseWriting');
Route::get('/editing-proof-reading', [HomeController::class, 'Editing_ProofReading'])->name('Editing&ProofReading');
Route::get('/book-cover-design', [HomeController::class, 'BookCoverDesign'])->name('BookCoverDesign');
Route::get('/amazon-marketing', [HomeController::class, 'AmazonMarketing'])->name('AmazonMarketing');
Route::get('/seo-writing', [HomeController::class, 'SeoWriting'])->name('SEOWriting');
Route::get('/audio-books', [HomeController::class, 'AudioBooks'])->name('AudioBooks');

Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/ghostwriting-services', [HomeController::class, 'ghostWritingServices'])->name('ghostwriting-services');
Route::get('/ghostwriting-services/{id}', [HomeController::class, 'ghostWritingService'])->name('ghostwriting-service');

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', function (){
        return view('backend.index');
    });
});


require __DIR__.'/auth.php';
