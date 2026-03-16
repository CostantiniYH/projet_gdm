<?php
namespace App\Model\Requete;
use PDO;

class Model 
{
    protected $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // query() comporte 2 paramètre : la requête ($sql) et le paramètre ($params=[]) à exécuter lorsque c'est nécessaire
    protected function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}
