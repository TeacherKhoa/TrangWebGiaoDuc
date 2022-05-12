<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/login', 'LoginController@showLoginForm')->name('get_login');
Route::post('/login', 'LoginController@login')->name('post_login');
Route::get('/register', 'LoginController@login')->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/update_user', 'UserController@updateUser')->name('update_user');
});

