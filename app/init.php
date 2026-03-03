<?php
declare(strict_types=1);

$configFile = __DIR__ . '/config/config.php';
if (file_exists($configFile)) {
    require $configFile;
}

function slugify( $text)
{
    // Supprime les accents
    $text = strtr($text, [
        'à'=>'a','á'=>'a','â'=>'a','ä'=>'a','ã'=>'a','å'=>'a',
        'ç'=>'c',
        'è'=>'e','é'=>'e','ê'=>'e','ë'=>'e',
        'ì'=>'i','í'=>'i','î'=>'i','ï'=>'i',
        'ò'=>'o','ó'=>'o','ô'=>'o','ö'=>'o','õ'=>'o',
        'ù'=>'u','ú'=>'u','û'=>'u','ü'=>'u',
        'ÿ'=>'y','ñ'=>'n'
    ]);

    // Met en minuscule
    $text = strtolower($text);

    // Remplace tout ce qui n'est pas lettre ou chiffre par un tiret
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);

    // Supprime les tirets en début et fin
    $text = trim($text, '-');

    return $text;
}

function slugifyFirstWord($text)
{
    $text = trim($text);
    preg_match('/^[^\s]+/', $text, $matches);
    return slugify($matches[0] ?? '');
}

require __DIR__ . "/Views/router.view.php";


use App\Config\Database;

$pdo = Database::connect();
// echo "Connexion OK - ";

require dirname(__DIR__) . '/routes/web.php'; 
require dirname(__DIR__) . '/routes/admin.php'; 


$router = new Core\Router($pdo);
$router->run();


// require dirname(__DIR__) . '/test_db.php';

