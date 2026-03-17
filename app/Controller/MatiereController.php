<?php
namespace App\Controller;
use App\Model\Requete\Matiere;
use App\Model\Requete\Theme;
use App\Model\Requete\Chapitre;


use Exception;
use PDOException;

class MatiereController
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

     // Liste des matières
    public function index() {
        // Navbar + cartes
        $matieres = $this->modelMatiere->getMatiere();

        afficherVue('Accueil', "", "public/matieres", "", "", "", [
            'matieres' => $matieres
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
            if (!empty($_POST['matiere']) && empty($_POST['theme'])) {
                $nom = $_POST['matiere'] ?? null;
                $this->modelMatiere->insertMatiere($nom);
                flash('success', "Matière ajoutée avec succès !");
                header("Location: " . BASE_URL. "create-matiere");
                exit;
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Une erreur est survenue lors de l'insertion, veuillez réessayer.");
        }
        header("Location: " . BASE_URL. "create-matiere");
        exit;
    }

    // Modifier un élément
    public function edit($id) {
        // Récupérer les matières, thèmes, chapitres disponibles
        $matieres = $this->modelMatiere->getMatiere(); 
        $themes = $this->modelTheme->getTheme();
        $chapitres = $this->modelChapitre->getChapitre();

        // Identifier la matière à modifier
        $matiere = $this->modelMatiere->getMatiereById($id);

        afficherVue('Modifier un élément', "", 'admin/form', "", "", "", [
            'matieres' => $matieres,
            'themes' => $themes,
            'chapitres' => $chapitres,
            'matiere' => $matiere        
            ]);
    }

    // Supprimer un élément
    public function delete($id) {
        $deleted = $this->modelMatiere->deleteMatiere($id);

        if ($deleted) {
            flash('info', "Matière supprimé");
            header("Location: " . BASE_URL . "dashboard");
        } else {
            flash('error', "Erreur lors de la suppression du Matière.");
        }
    }
}