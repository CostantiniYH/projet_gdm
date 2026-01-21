<?php
declare(strict_types=1);
use Core\Route;

Route::get('/', 'IndexController@index');
Route::get('/developpement', 'IndexController@indexdev');
Route::get('/programmation', 'IndexController@indexProgram');
Route::get('/modelisation', 'IndexController@indexModeli');

Route::get('/support', 'IndexController@indexSupport');
Route::get('/sisr', 'IndexController@indexSisr');
Route::get('/slam', 'IndexController@indexSlam');
Route::get('/cybersecurite', 'IndexController@indexCyber');

Route::get('/mathematiques', 'IndexController@indexMath');
Route::get('/cejm', 'IndexController@indexCejm');
Route::get('/cge', 'IndexController@indexCge');
Route::get('/anglais', 'IndexController@indexAnglais');

Route::get('/apropos', 'IndexController@Apropos');
Route::get('/contact', 'IndexController@contact');
