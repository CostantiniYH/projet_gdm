<?php
namespace App\Controller;
use App\Model\Requete\Matiere;
use App\Model\Requete\Theme;
use App\Model\Requete\Chapitre;


use Exception;
use PDOException;

class AdminController
{

    private $modelMatiere;
    private $modelTheme;
    private $modelChapitre;

    public function __construct($pdo)
    {
        $this->modelMatiere = new Matiere($pdo);
        $this->modelTheme = new Theme($pdo);
        $this->modelChapitre = new Chapitre($pdo);

    }


    public function dashboard() {
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();
        $chapitres = $this->modelChapitre->getChapitre();


        afficherVue('Dashboard admin', "", 'admin/dashboard', "", "" , "", [
            'matieres' => $matieres,
            'themes' => $themes,
            'chapitres' => $chapitres
        ]);
    }

    public function search() {
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();
        $chapitres = $this->modelChapitre->getChapitre();


        afficherVue('Dashboard admin', "/dashboard", 'admin/dashboard', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes,
            'chapitres' => $chapitres
        ]);
    }

    public function forms() {
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();

        if (!empty($_POST)) {
            $nom = $_POST['matiere'];
            $add_matiere = $this->modelMatiere->insertMatiere($nom);
            return $add_matiere;
        }

        afficherVue('Ajouter une donnée', "", 'admin/form', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes
            ]);
    }

    // Ajouter un élément
    public function create() {
        try {
            if (!empty($_POST['matiere']) && empty($_POST['theme'])) {
                $nom = $_POST['matiere'] ?? null;
                $this->modelMatiere->insertMatiere($nom);
                flash('success', "Matière ajoutée avec succès !");
                header("Location: " . BASE_URL. "forms");
                exit;
            }
            
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && empty($_POST['chapitre'])) {
                $nom = $_POST['theme'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;

                $this->modelTheme->insertTheme($nom, $matiere_id);
                flash('success', "Thème ajouté avec succès !");
                header("Location: " . BASE_URL. "forms");
                exit;
            }
            
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && !empty($_POST['chapitre'])) {
                $nom = $_POST['chapitre'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;
                $theme_id = $_POST['theme'] ?? null;

                $this->modelChapitre->insertChapitre($nom, $matiere_id, $theme_id);
                flash('success', "Chapitre ajouté avec succès !");
                header("Location: " . BASE_URL. "forms");
                exit;
            }

        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Une erreur est survenue lors de l'insertion, veuillez réessayer.");
        }
        header("Location: " . BASE_URL. "forms");
        exit;
    }

    // Modifier un élément
    public function edit($id) {

    }

    // Supprimer un élément
    public function delete($id) {
        $deleted = $this->modelChapitre->deleteChapitre($id);

        if ($deleted) {
            flash('info', "Chapitre supprimé");
            header("Location: " . BASE_URL . "dashboard");
        } else {
            flash('error', "Erreur lors de la suppression du chapitre.");
        }
    }
}