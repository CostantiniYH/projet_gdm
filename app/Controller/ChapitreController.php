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


    // Liste des chapitres du thème sélectionné
    public function index($id) {
        // Récupérer toutes les matières pour la navbar ou autre
        $listMatieres = $this->modelMatiere->getMatiere();
        // Récupérer la ligne du theme à partir de l'id stocké dans l'url
        // pour le titre et le fil d'ariane
        $themes = $this->modelTheme->getThemeById($id);
        // Récupérer les lignes de la table chapitres selon le thème
        $chapitres = $this->modelChapitre->getChapitreByThemeId($id);

        afficherVue($themes['name'], "", 'public/chapitres', "", "", "", [
            'matieres' => $listMatieres,
            'themes' => $themes,
            'chapitres' => $chapitres
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
            if (!empty($_POST['theme']) && !empty($_POST['matiere']) && !empty($_POST['chapitre'])) {
                $nom = $_POST['chapitre'] ?? null;
                $matiere_id = $_POST['matiere'] ?? null;
                $theme_id = $_POST['theme'] ?? null;

                $this->modelChapitre->insertChapitre($nom, $matiere_id, $theme_id);
                flash('success', "Chapitre ajouté avec succès !");
                header("Location: " . BASE_URL. "create-chapitre");
                exit;
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Une erreur est survenue lors de l'insertion, veuillez réessayer.");
        }
        header("Location: " . BASE_URL. "create-chapitre");
        exit;
    }

    // Modifier un élément
    public function edit($id) {
        // Récupérer les matières, thèmes, chapitres disponibles
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();
        $chapitres = $this->modelChapitre->getChapitre();

        // Identifier le chapitre à modifier
        $chapitre  = $this->modelChapitre->getChapitreById($id);

        afficherVue('Modifier un élément', "", 'admin/form', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes,
            'chapitres' => $chapitres,
            'chapitre' => $chapitre            
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