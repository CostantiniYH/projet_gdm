<?php
use Core\Route;

// Tableau de bord
Route::middleware(['admin'])->get('/dashboard', 'AdminController@dashboard');
// Recherche dans le tableau de bord
Route::middleware(['admin'])->get('/dashboard/search', 'AdminController@search');

// Formulaire d'ajout des matières, thèmes, chapitres et sections
Route::middleware(['admin'])->get('/create', 'AdminController@create');

Route::middleware(['admin'])->get('/create-matiere', 'MatiereController@create');
Route::middleware(['admin'])->get('/create-theme', 'ThemeController@create');
Route::middleware(['admin'])->get('/create-chapitre', 'ChapitreController@create');
Route::middleware(['admin'])->get('/create-section', 'SectionController@create');

// Traitement des ajouts
Route::middleware(['admin'])->post('/store-matiere', 'MatiereController@store');
Route::middleware(['admin'])->post('/store-theme', 'ThemeController@store');
Route::middleware(['admin'])->post('/store-chapitre', 'ChapitreController@store');
Route::middleware(['admin'])->post('/store-section', 'SectionController@store');

// Formulaire de modification
Route::middleware(['admin'])->get('/edit-matiere/{id}', 'MatiereController@edit');
Route::middleware(['admin'])->get('/edit-theme/{id}', 'ThemeController@edit');
Route::middleware(['admin'])->get('/edit-chapitre/{id}', 'ChapitreController@edit');
Route::middleware(['admin'])->get('/edit-section/{id}', 'SectionController@edit');

// Traitement des modifications
Route::middleware(['admin'])->post('/update-matiere/{id}', 'MatiereController@update');
Route::middleware(['admin'])->post('/update-theme/{id}', 'ThemeController@update');
Route::middleware(['admin'])->post('/update-chapitre/{id}', 'ChapitreController@update');
Route::middleware(['admin'])->post('/update-section/{id}', 'SectionController@update');

// Suppression des éléments
Route::middleware(['admin'])->post('/delete-matiere/{id}', 'MatiereController@delete');
Route::middleware(['admin'])->post('/delete-theme/{id}', 'ThemeController@delete');
Route::middleware(['admin'])->post('/delete-chapitre/{id}', 'ChapitreController@delete');
Route::middleware(['admin'])->post('/delete-section/{id}', 'SectionController@delete');