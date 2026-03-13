<?php
namespace Middlewares;

class AdminMiddleware 
{
    public function handle() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if (empty($_SESSION['user']['user_id'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
    }
}