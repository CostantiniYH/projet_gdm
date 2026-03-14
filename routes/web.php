<?php
declare(strict_types=1);
use Core\Route;

Route::get('/', 'IndexController@index');
Route::get("/matiere/{id}", 'IndexController@matiere');
Route::get("/theme/{id}", 'IndexController@theme');

Route::get('/developpement', 'IndexController@indexdev');
Route::get('/programmation', 'IndexController@indexProgram');
Route::get('/modelisation', 'IndexController@indexModeli');

Route::get("/support/{id}", 'IndexController@indexSupport');
Route::get("/sisr/{id}", 'IndexController@indexSisr');
Route::get("/slam/{id}", 'IndexController@indexSlam');
Route::get("/cybersecurite/{id}", 'IndexController@indexCyber');

Route::get("/mathematiques/{id}", 'IndexController@indexMath');
Route::get("/cejm/{id}", 'IndexController@indexCejm');
Route::get("/cge/{id}", 'IndexController@indexCge');
Route::get("/anglais/{id}", 'IndexController@indexAnglais');

Route::get('/apropos', 'IndexController@Apropos');
Route::get('/contact', 'IndexController@contact');
