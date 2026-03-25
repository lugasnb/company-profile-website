<?php

use Illuminate\Support\Facades\Route;

// ===== FRONTEND =====
Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/services', fn() => view('pages.services'))->name('services');
Route::get('/portfolio', fn() => view('pages.portfolio'))->name('portfolio');
Route::get('/blog', fn() => view('pages.blog'))->name('blog');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');

// ===== ADMIN =====
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/articles', fn() => view('admin.articles'))->name('admin.articles');
    Route::get('/services', fn() => view('admin.services'))->name('admin.services');
    Route::get('/portfolio', fn() => view('admin.portfolio'))->name('admin.portfolio');
});