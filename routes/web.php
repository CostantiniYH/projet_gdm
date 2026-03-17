<?php
declare(strict_types=1);
use Core\Route;

Route::get('/', 'IndexController@index');
Route::get('/apropos', 'IndexController@Apropos');
Route::get('/contact', 'IndexController@contact');

// Liste des matières
Route::get("/matieres", 'MatiereCntroller@index');

// Liste des thèmes par matière
Route::get("/matiere/{id}", 'ThemeController@index');

// Liste des chapitrees par thème
Route::get("/theme/{id}", 'ChapitreController@index');

