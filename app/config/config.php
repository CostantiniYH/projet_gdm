<?php
namespace App\Config;

if (!defined('BASE_URL')) {
    define('BASE_URL', rtrim($_ENV['APP_URL'], '/') . '/');
}
