<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('main');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//route intro
Route::get('/intro', function () {
    return view('intro');
});

//route news
Route::get('/news', function () {
    return view('news');
});

//route contoh
Route::get('/contoh', function () {
    return view('contoh');
});

//route template
Route::get('/template', function () {
    return view('template');
});

//route 5026241157 
Route::get('/5026241157', function () {
    return view('5026241157');
});
