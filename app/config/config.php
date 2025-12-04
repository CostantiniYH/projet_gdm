<?php
namespace App\Config;

if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    
    if ($host === 'localhost' || $host === '127.0.0.1') {
        define('BASE_URL', $protocol . '://' . $host . '/projet_/public/');
    } else {
        define('BASE_URL', $protocol . '://' . $host . '/');
    }
}

