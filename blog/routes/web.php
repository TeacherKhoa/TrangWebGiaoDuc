<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('post_login');
Route::get('/register', 'LoginController@login')->name('register');


Route::get('callback-google', 'LoginController@callbackGoogle')
    ->name('callback-google');

Route::get('redirect/{driver}', 'LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', 'LoginController@logout')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/update_user', 'UserController@updateUser')->name('update_user');
    Route::post('/update_user', 'UserController@updateUserPost')->name('post_update_user');
});
