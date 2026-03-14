<?php
namespace Middlewares;

class AdminMiddleware 
{
    public function handle() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if ( $_SESSION['user']['role'] !== 'admin') {
            flash('error', "Accès interdit !");
            header("Location: " . BASE_URL . "");
            exit();
        }
    }
}