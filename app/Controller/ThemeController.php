<?php
namespace App\Controller;
use App\Model\Requete\Matiere;
use App\Model\Requete\Theme;
use App\Model\Requete\Chapitre;


use Exception;
use PDOException;

class ThemeController
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


   // Liste des thèmes de la matière slectionnée
    public function index($id) {
        // Récupérer toutes les matières pour la navbar
        $listMatieres = $this->modelMatiere->getMatiere();
        // Sélectionner la matière correspondante à l'id stocké
        // dans l'url pour afficher son nom
        $matiere = $this->modelMatiere->getMatiereById($id);
        // Sélectionner tous les thèmes associés à l'id de la matière
        $themes = $this->modelTheme->getThemeByMatiereId($id);

        afficherVue($matiere['name'], "/matiere", 'public/themes',
         "", "", "", [
            'matieres' => $listMatieres,
            'themes' => $themes
        ]);
    }


    // Formulaires groupés : matière, thème, chapitre
    public function create() {
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();

        afficherVue('Ajouter une donnée', "", 'admin/form', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes
            ]);
    }

    // Ajouter un élément
    public function store() {
        try {
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && empty($_POST['chapitre'])) {
                $nom = $_POST['theme'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;

                $this->modelTheme->insertTheme($nom, $matiere_id);
                flash('success', "Thème ajouté avec succès !");
                header("Location: " . BASE_URL. "create-theme");
                exit;
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Une erreur est survenue lors de l'insertion, veuillez réessayer.");
        }
        header("Location: " . BASE_URL. "create-theme");
        exit;
    }

    // Modifier un élément
    public function edit($id) {
        // Récupérer les matières, thèmes, chapitres disponibles
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();
        $chapitres = $this->modelChapitre->getChapitre();


        $matiereId    = $this->modelMatiere->getMatiereById($id);
        $themeId     = $this->modelTheme->getThemeById($id);
        $chapitreId  = $this->modelChapitre->getChapitreById($id);

        afficherVue('Modifier un élément', "", 'admin/form', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes,
            'chapitres' => $chapitres,
            'matiereId' => $matiereId,
            'themeId' => $themeId,
            'chapitreId' => $chapitreId            
            ]);
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