<?php
namespace App\Controller;
use App\Model\Requete\Matiere;
use App\Model\Requete\Theme;
use App\Model\Requete\Chapitre;

class IndexController {
    private $pdo;
    private $Matieres;
    private $Themes;
    private $Chapitres;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->Matieres = new Matiere($pdo);
        $this->Themes = new Theme($pdo);
        $this->Chapitres = new Chapitre($pdo);

    }
    
    // Accueil || home
    public function index() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Accueil', "", 'home', "public/referentiel", "", "", [
            'matieres' => $matieres
        ]);
    }

    // Liste des matières
    public function matieres() {
        // Navbar + cartes
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Accueil', "", "public/matieres", "", "", "", [
            'matieres' => $matieres
        ]);
    }

    // Liste des thèmes de la matière slectionnée
    public function themes($id) {
        // Récupérer toutes les matières pour la navbar
        $listMatieres = $this->Matieres->getMatiere();
        // Sélectionner la matière correspondante à l'id stocké
        // dans l'url pour afficher son nom
        $matiere = $this->Matieres->getMatiereById($id);
        // Sélectionner tous les thèmes associés à l'id de la matière
        $themes = $this->Themes->getThemeByMatiereId($id);

        afficherVue($matiere['name'], "/matiere", 'public/themes',
         "", "", "", [
            'matieres' => $listMatieres,
            'themes' => $themes
        ]);
    }

    // Liste des chapitres du thème sélectionné
    public function chapitres($id) {
        // Récupérer toutes les matières pour la navbar ou autre
        $listMatieres = $this->Matieres->getMatiere();
        // Récupérer la ligne du theme à partir de l'id stocké dans l'url
        // pour le titre et le fil d'ariane
        $themes = $this->Themes->getThemeById($id);
        // Récupérer les lignes de la table chapitres selon le thème
        $chapitres = $this->Chapitres->getChapitreByThemeId($id);

        afficherVue($themes['name'], "", 'public/chapitres', "", "", "", [
            'matieres' => $listMatieres,
            'themes' => $themes,
            'chapitres' => $chapitres
        ]);
    }
    

    public function Apropos() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Accueil', "", 'apropos', "", "","", [
            'matieres' => $matieres
        ]);
    }

    public function contact() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Contact', "", 'contact', "", "","", [
            'matieres' => $matieres
        ]);
    }
}