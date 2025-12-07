<?php
declare(strict_types=1);
use App\Controller\Public\IndexController;

switch ($uri) {
    case '/':
        $controller = new IndexController();
        $controller->index();
    break;  

    case '/contact':
        $controller = new IndexController();
        $controller->contact();
    break;  

}