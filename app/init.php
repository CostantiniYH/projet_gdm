<?php
declare(strict_types=1);

$configFile = __DIR__ . '/config/config.php';
if (file_exists($configFile)) {
    require $configFile;
}

use App\Config\Database;

$pdo = Database::connect();
echo "Connexion OK - ";

require dirname(__DIR__) . '/routes/web.php'; 
$router = new App\Core\Router($pdo);
$router->run();


// require dirname(__DIR__) . '/test_db.php';

