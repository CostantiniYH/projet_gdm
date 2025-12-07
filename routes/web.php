<?php
declare(strict_types=1);
use App\Core\Route;

Route::get('/', 'Public/IndexController@index');