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

Route::get('/home', function () {
    return view('store.home');
});

Route::get('/login', function () {
    return view('store.login');
});

Route::get('/register', function () {
    return view('store.register');
});

Route::get('/produkecommerce', function () {
    return view('store.produkecommerce');
});

Route::get('/produkditel', function () {
    return view('store.produkditel');
});

Route::get('/base', function () {
    return view('admin.base');
});
Route::get('/berandaadmin', function () {
    return view('admin.berandaadmin');
});

Route::get('/produk', function () {
    return view('admin.produk');
});
Route::get('/kategori', function () {
    return view('admin.kategori');
});
Route::get('/loginadmin', function () {
    return view('admin.loginadmin');
});
Route::get('/registeradmin', function () {
    return view('admin.registeradmin');
});
Route::get('/promo', function () {
    return view('admin.promo');
});