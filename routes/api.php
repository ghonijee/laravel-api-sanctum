<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', 'Auth\AuthController@register');
Route::post('auth/login', 'Auth\AuthController@login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('auth/me', 'Auth\AuthController@me');
    Route::post('auth/logout', 'Auth\AuthController@logout');
});
