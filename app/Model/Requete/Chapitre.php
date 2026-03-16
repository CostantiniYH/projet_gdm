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
    
    // Sélectionner tou les chapitres
    public function getChapitre() {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("SELECT * FROM {$this->table} ORDER BY id");
        return $stmt->fetchAll();
    }

    // Sélectionner un chapitre en fonction d'un thème par themes_id
    public function getChapitreByThemeId($id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("SELECT * FROM {$this->table} 
                              WHERE themes_id = $id
                              ORDER BY id");
        return $stmt->fetchAll();
    }

    // Ajouter un chapitre
    public function insertChapitre($name, $matiere_id, $theme_id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query(
            "INSERT INTO {$this->table} (name, matieres_id, themes_id) VALUES (?, ?, ?)", [
                $name, $matiere_id, $theme_id
            ]);
        return (int) $this->pdo->lastInsertId();
    }

    // Supprimer un chapitre avec son ID
    public function deleteChapitre($id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("DELETE FROM chapitres WHERE id = ?", [$id]); 
        // Si un chapitre a bien été supprimé (ligne supérieur à zéro), retourner 'true' sinon 'false'
        return $stmt->rowCount() > 0; 
    }
}

