<?php
use Core\Route;

Route::middleware(['admin'])->get('/dashboard', 'AdminController@dashboard');
Route::middleware(['admin'])->get('/dashboard/search', 'AdminController@search');
Route::middleware(['admin'])->get('/forms', 'AdminController@forms');
Route::middleware(['admin'])->get('/update', 'AdminController@update');

Route::middleware(['admin'])->post('/add_matiere', 'AdminController@edit');
Route::middleware(['admin'])->post('/add_theme', 'AdminController@edit');
