<?php

use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'home'])->name('home');

Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

Route::get('/blog', [StaticContentController::class, 'blog'])->name('blog');

Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');
