<?php
use Core\Route;

Route::middleware(['guest'])->get('/register', 'AuthController@formRegister');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@formLogin');
Route::post('/login', 'AuthController@login');

Route::middleware(['auth'])->get("/logout", "AuthController@logout");