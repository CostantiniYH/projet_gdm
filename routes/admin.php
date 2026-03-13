<?php
use Core\Route;

Route::middleware(['auth'])->get('/dashboard', 'AdminController@dashboard');
Route::middleware(['auth'])->get('/dashboard/search', 'AdminController@search');
Route::middleware(['auth'])->get('/forms', 'AdminController@forms');
Route::middleware(['auth'])->get('/update', 'AdminController@update');

Route::post('/add_matiere', 'AdminController@edit');
Route::post('/add_theme', 'AdminController@edit');
