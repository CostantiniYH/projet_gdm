<?php
namespace App\config;

class Database
{
    public static function connect()
    {

        // 2️⃣ Infos qui changent selon l’environnement
            $dbType = $_ENV['DB_TYPE'];
            $dbHost = $_ENV['DB_HOST'];
            $dbName = $_ENV['DB_NAME'];
            $dbUser = $_ENV['DB_USER'];
            $dbPass = $_ENV['DB_PASS'];
        

        // 3️⃣ Connexion à la base de données
        try {
            $pdo = new \PDO(
                "$dbType:host=$dbHost;dbname=$dbName;",
                $dbUser,
                $dbPass
            );

            // 4️⃣ Ce qu’on renvoie
            return $pdo;

        } catch (\PDOException $e) {
            die('Erreur BDD : ' . $e->getMessage());
        }
    }
}
