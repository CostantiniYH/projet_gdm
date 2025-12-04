<?php
namespace App\Controller\Public;

class IndexController {
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function index() {
        $titre = "Acceuil";
        ob_start();
        require_once __DIR__ . '/../../Views/home.php';
        $content = ob_get_clean();
        require __DIR__ . '/../../Views/partials/layout.php';
    }

    public function contact() {

    }
}