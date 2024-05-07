<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
    return view('welcome');
});

Route::get('chinh-sach-quyen-rieng-tu', function () {
    return '<h1>Chính sách quyền riêng tư</h1>';
});

Route::get('auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});


Route::get('auth/facebook/callback', function () {
    return 'Callback login Facebook';
});
