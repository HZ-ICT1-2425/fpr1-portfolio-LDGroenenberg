<?php

use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'home'])->name('home');

Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');

Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

Route::get('/faq', [StaticContentController::class, 'faq'])->name('faq');

Route::get('/postsindex', [PostController::class, 'index'])->name('postsindex');

Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.show');
