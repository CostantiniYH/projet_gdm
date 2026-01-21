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


    public function index() {
        $matieres = $this->modelMatiere->getMatiere(); 


        afficherVue('Dashboard admin', 'admin/dashboard', [
            'matieres' => $matieres
        ]);
    }
    public function forms() {
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();

        if ($_POST == true) {
            $nom = $_POST['matiere'];
            $add_matiere = $this->modelMatiere->insertMatiere($nom);
            return $add_matiere;
        }

        afficherVue('Ajouter une donnée', 'admin/form', [
            'matieres' => $matieres,
            'themes' => $themes
            ]);
    }

    public function edit() {
        try {
            if (!empty($_POST['matiere']) && empty($_POST['theme'])) {
                $nom = $_POST['matiere'] ?? null;
                $this->modelMatiere->insertMatiere($nom);
                header("Location: /forms?success=1");
                exit;
            }
            
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && empty($_POST['chapitre'])) {
                $nom = $_POST['theme'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;

                $this->modelTheme->insertTheme($nom, $matiere_id);
                header("Location: /forms?success=1");
                exit;
            }
            
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && !empty($_POST['chapitre'])) {
                $nom = $_POST['chapitre'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;
                $theme_id = $_POST['theme'] ?? null;

                $this->modelChapitre->insertChapitre($nom, $matiere_id, $theme_id);
                header("Location: /forms?success=1");
                exit;
            }

        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Une erreur est survenue lors de l'insertion, veuillez réessayer.");
        }
        header("Location: /forms");
        exit;
    }
}