<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/takjil', function () {
    return view('takjil');
});
Route::get('/minum', function () {
    return view('minum');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/cal', function () {
    return view('cal');
});