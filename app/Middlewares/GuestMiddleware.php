<?php
namespace App\Middlewares;

class GuestMiddleware {
    
    public function handle() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Si déjà connecté, rediriger
        if (isset($_SESSION['user']) && !empty($_SESSION['logged_in'])) {
            header("Location: " . BASE_URL . "dashboard");
            exit;
        }
    }
}

