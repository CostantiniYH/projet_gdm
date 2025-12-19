<?php
namespace App\Controller\Public;

class IndexController {
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function index() {

        ob_start();
        require __DIR__ . '/../../Views/home.php';
        require __DIR__ . '/../../Views/contact.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function contact() {

    }
}