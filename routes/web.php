<?php

use App\Http\Controllers\Hataman;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('login', [Login::class, 'index']);
Route::post('loginproses', [Login::class, 'loginproses']);
Route::get('hataman', [Hataman::class, 'index']);
Route::post('hataman/import', [Hataman::class, 'tambah']);
