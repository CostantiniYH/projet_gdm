<?php
declare(strict_types=1);
use App\Controllers\Public\IndexController;

switch ($uri) {
    case '/':
        $controller = new IndexController();
        $controller->index();
    break;  

    case '/contact':
        $controller = new IndexController();
        $controller->contact();
    break;  

    case '/resultat':
        $controller = new IndexController();
        $controller->resultat();
    break;

}