<?php
use Core\Route;

// Tableau de bord
Route::middleware(['admin'])->get('/dashboard', 'AdminController@dashboard');
// Recherche dans le tableau de bord
Route::middleware(['admin'])->get('/dashboard/search', 'AdminController@search');
// Formulaire d'ajout des matières, thèmes, chapitres et sections
Route::middleware(['admin'])->get('/forms', 'AdminController@forms');

// Traitement des ajouts
Route::middleware(['admin'])->post('/add_matiere', 'AdminController@create');
Route::middleware(['admin'])->post('/add_theme', 'AdminController@create');
Route::middleware(['admin'])->post('/add_chapitre', 'AdminController@create');
Route::middleware(['admin'])->post('/add_section', 'AdminController@create');

// Formulaire de modification
Route::middleware(['admin'])->get('/edit-matiere/{id}', 'AdminController@edit');
Route::middleware(['admin'])->get('/edit-theme/{id}', 'AdminController@edit');
Route::middleware(['admin'])->get('/edit-chapitre/{id}', 'AdminController@edit');
Route::middleware(['admin'])->get('/edit-section/{id}', 'AdminController@edit');

// Traitement des modifications
Route::middleware(['admin'])->post('/update-matiere/{id}', 'AdminController@update');
Route::middleware(['admin'])->post('/update-theme/{id}', 'AdminController@update');
Route::middleware(['admin'])->post('/update-chapitre/{id}', 'AdminController@update');
Route::middleware(['admin'])->post('/update-section/{id}', 'AdminController@update');

// Suppression des éléments
Route::middleware(['admin'])->post('/delete-matiere/{id}', 'AdminController@delete');
Route::middleware(['admin'])->post('/delete-theme/{id}', 'AdminController@delete');
Route::middleware(['admin'])->post('/delete-chapitre/{id}', 'AdminController@delete');
Route::middleware(['admin'])->post('/delete-section/{id}', 'AdminController@delete');