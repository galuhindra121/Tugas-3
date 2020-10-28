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
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/templet', function () {
    return view('templet.base');
});

Route::get('/komputer', function () {
    return view('komputer');
});
Route::get('/laptop', function () {
    return view('laptop');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/kontak', function () {
    return view('kontak');
});