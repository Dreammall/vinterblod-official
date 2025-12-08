<?php
// ルート設定の記述 web.php

// Laravel のルート定義用のクラス。
// Route::get() や Route::post() を使うために必要
use Illuminate\Support\Facades\Route;

//トップ画面
Route::get('/', fn() => view('static.index'));

//ディスコグラフィー画面
Route::get('/discography', fn() => view('static.discography'));