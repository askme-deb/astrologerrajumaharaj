<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\HoroscopeController;
use App\Http\Controllers\PredictionController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('privacy.policy');
Route::get('/terms', [TermsController::class, 'show'])->name('terms');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'show'])->name('blog.details');
Route::get('/blog-details2', [BlogController::class, 'blog_details2'])->name('blog.details2');
Route::get('/blog-details3', [BlogController::class, 'blog_details3'])->name('blog.details3');

// Horoscope proxy endpoint
Route::get('/api/horoscope/{sign}', [HoroscopeController::class, 'get']);

Route::get('/api/prediction', [PredictionController::class, 'get']);

Route::get('/online/classes', [PredictionController::class, 'online_classes'])->name('online.classes');