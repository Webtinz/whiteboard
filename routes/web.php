<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Front_include.index');
});

Route::get('login', function () {
    return view('Front_include.login');
})->name('login');

Route::get('signup', function () {
    return view('Front_include.signup');
})->name('signup');

