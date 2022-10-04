<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionController;
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

// //GhostWritings
Route::get('/fiction', [HomeController::class, 'fiction'])->name('Fiction');
Route::get('/beauty-ghost-writing', [HomeController::class, 'beauty'])->name('BeautyGhostWriting');
Route::get('/business-ghost-writing', [HomeController::class, 'business'])->name('BusinessGhostWriting');
Route::get('/fantasy-ghost-writing', [HomeController::class, 'fantasy'])->name('FantasyGhostWriting');
Route::get('/medical-ghost-writing', [HomeController::class, 'medical'])->name('MedicalGhostWriting');
Route::get('/screenplay-ghost-writing', [HomeController::class, 'screenplay'])->name('ScreenPlayGhostWriting');
Route::get('/nonfiction-ghost-writing', [HomeController::class, 'nonfiction'])->name('NonFictionGhostWriting');
Route::get('/blog-ghost-writing', [HomeController::class, 'blog'])->name('BlogGhostWriting');

Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/ghostwriting-services', [HomeController::class, 'ghostWritingServices'])->name('ghostwriting-services');

Route::get('terms-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('privacy-policy', [HomeController::class, 'privacy'])->name('privacy');

// Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/posts/{id}', [BlogController::class, 'blogDetails'])->name('backend.blogs.details');

Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
    Route::get('regions', [RegionController::class, 'index'])->name('regions.index');
    Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/blog/posts', [BlogController::class, 'blogs'])->name('backend.blogs');

    Route::get('/blog/posts/create', [BlogController::class, 'create'])->name('backend.blogs.create');
    Route::post('/blog/posts/store', [BlogController::class, 'store'])->name('backend.blogs.store');
});


require __DIR__.'/auth.php';
