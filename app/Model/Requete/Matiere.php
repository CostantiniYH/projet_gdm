<?php
namespace App\Model\Requete;
use PDO;

class Matiere extends Model 
{

    protected $table ='matieres';

    public function __construct($pdo)
    {
        return parent::__construct($pdo);
    }

    public function getMatiere() {
        $stmt = $this->query("SELECT * FROM $this->table 
        ORDER BY id");
        return $stmt->fetchAll();
    }
    
    public function getMatiereById($id) {
        $stmt = $this->query("SELECT * FROM $this->table 
        WHERE id = $id 
        ORDER BY id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insertMatiere($nom) {
        $stmt = $this->query("INSERT INTO {$this->table} (name) 
        VALUES (?)", [$nom]);
        return (int) $this->pdo->lastInsertId();
    }
    
    // Supprimer une matière avec son ID
    public function deleteMatiere($id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("DELETE FROM matieres WHERE id = ?", [$id]); 
        // Si une matière a bien été supprimé (ligne supérieur à zéro), retourner 'true' sinon 'false'
        return $stmt->rowCount() > 0; 
    }
}

