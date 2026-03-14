<?php
namespace App\Model\Requete;
use PDO;

class Chapitre extends Model 
{

    protected $table ='chapitres';

    public function __construct($pdo)
    {
        return parent::__construct($pdo);
    }
    
    public function getChapitre() {
        $stmt = $this->query("SELECT * FROM {$this->table} ORDER BY id");
        return $stmt->fetchAll();
    }

    public function getChapitreById($id) {
        $stmt = $this->query("SELECT * FROM {$this->table} 
                              WHERE themes_id = $id
                              ORDER BY id");
        return $stmt->fetchAll();
    }

    public function insertChapitre($name, $matiere_id, $theme_id) {
        $stmt = $this->query(
            "INSERT INTO {$this->table} (name, matieres_id, themes_id) VALUES (?, ?, ?)", [
                $name, $matiere_id, $theme_id
            ]);
        return (int) $this->pdo->lastInsertId();
    }

}