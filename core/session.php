<?php

function is_logged_in() {
    return isset($_SESSION['user']);
}

function is_admin() {
    return is_logged_in() && ($_SESSION['user']['role'] ?? '') === 'admin';
}

function require_login() {
    if (!is_logged_in()) {
        $_SESSION['flash']['error'] = "Veuillez vous connecter.";
        header("Location: " . BASE_URL . "login");
        exit;
    }
}