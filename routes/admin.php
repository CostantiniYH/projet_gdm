<?php
use Core\Route;

Route::get('/dashboard', 'AdminController@index');
Route::get('/forms', 'AdminController@forms');
Route::get('/update', 'AdminController@update');

Route::post('/add_matiere', 'AdminController@edit');
Route::post('/add_theme', 'AdminController@edit');
