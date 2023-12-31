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

Route::get('/ ', function () {
    return view('home',[
        "title" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "home",
        "image" => "Eula 5.png",
    ]);
});

Route::get('/Mahasiswa', function () {
    return view('Mahasiswa',[
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "home",
    ]);
});