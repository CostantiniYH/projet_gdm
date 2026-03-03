<?php
namespace App\Model\Requete;
use PDO;

class Theme extends Model 
{

    protected $table ='themes';

    public function __construct($pdo)
    {
        return parent::__construct($pdo);
    }
    
    public function getTheme() {
        $stmt = $this->query("SELECT * FROM {$this->table} ORDER BY id");
        return $stmt->fetchAll();
    }

    public function insertTheme($nom, $matiere_id) {
        $stmt = $this->query(
            "INSERT INTO {$this->table} (name, matieres_id) VALUES (?, ?)", [
                $nom, $matiere_id
            ]);
        return (int) $this->pdo->lastInsertId();
    }

}