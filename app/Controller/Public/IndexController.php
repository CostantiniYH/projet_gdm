<?php
namespace App\Controller\Public;

class IndexController {
    
    public function index() {

        ob_start();
        require __DIR__ . '/../../Views/home.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function contact() {

    }
}