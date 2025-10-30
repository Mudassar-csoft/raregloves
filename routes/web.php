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

// use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');
Route::get('/about', function () {
    return view('pages.about');
})->name ('about');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

