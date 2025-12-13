<?php
// ルート設定の記述 web.php

// Laravel のルート定義用のクラス。
// Route::get() や Route::post() を使うために必要
use Illuminate\Support\Facades\Route;

// ルーティング
// Top ページ
Route::get('/', fn() => view('static.index'));

// Discography ページ
Route::get('/discography', fn() => view('static.discography'));

// About ページ
Route::get('/about', fn() => view('static.about'));

// Contact ページ
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');