<?php
namespace App\Middlewares;

class AuthMiddleware 
{
    public function handle() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (empty($_SESSION['user']['user_id'])) {
            $_SESSION['flash']['warning'] = "Veuillez vous connecter.";
            header("Location: " . BASE_URL . "login");
            exit();
        }
    }
}

