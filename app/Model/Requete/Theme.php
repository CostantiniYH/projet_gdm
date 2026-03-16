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
    

    // Sélectionner tous les thèmes
    public function getTheme() {
        $stmt = $this->query("SELECT * FROM {$this->table} ORDER BY id");
        return $stmt->fetchAll();
    }
    
    // Sélectionner un thème par sa matieres_id
    public function getThemeByMatiereId($id) {
        $stmt = $this->query(
            "SELECT * FROM {$this->table} 
            WHERE matieres_id = $id 
            ORDER BY id");
        return $stmt->fetchAll();
    }

    // Sélectionner un thème par son ID (Pratique pour UPDATE et DELETE et autres vérifications)
    public function getThemeById($id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("SELECT * FROM {$this->table} 
                              WHERE id = $id 
                              ORDER BY id");
        return $stmt->fetch();
    }
    

    // Ajouter un thème
    public function insertTheme($nom, $matiere_id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query(
            "INSERT INTO {$this->table} (name, matieres_id) VALUES (?, ?)", [
                $nom, $matiere_id
            ]);
        return (int) $this->pdo->lastInsertId();
    }

    // Supprimer un thème avec son ID
    public function deleteTheme($id) {
        // Chercher la classe parent Model avec $this et sa méthode query()
        $stmt = $this->query("DELETE FROM themes WHERE id = ?", [$id]); 
        // Si un thème a bien été supprimé (ligne supérieur à zéro), retourner 'true' sinon 'false'
        return $stmt->rowCount() > 0; 
    }
}

