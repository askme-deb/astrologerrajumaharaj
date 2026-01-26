<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('privacy.policy');
Route::get('/terms', [TermsController::class, 'show'])->name('terms');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'show'])->name('blog.details');

