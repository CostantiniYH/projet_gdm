<?php
namespace App\Controller;
use App\Model\Requete\Matiere;
use App\Model\Requete\Theme;

class IndexController {
    private $pdo;
    private $Matieres;
    private $Themes;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->Matieres = new Matiere($pdo);
        $this->Themes = new Theme($pdo);

    }
    
    // Accueil || home
    public function index() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Accueil', 'home', [
            'matieres' => $matieres
        ], "");
    }

    // Index des matières : chaque matière apparaitra avec ses thèmes associés
     public function matiere($id) {
        $listMatieres = $this->Matieres->getMatiere();
        $matieres = $this->Matieres->getMatiereById($id);
        $themes = $this->Themes->getThemeById($id);
        foreach ($matieres as $m);

        afficherVue($m['name'], 'public/matiere', [
            'matieres' => $listMatieres,
            'themes' => $themes
        ], "/support");
    }

    // Bloc 1
    public function indexSupport($id) {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getThemeById($id);

        afficherVue('Support et mise à disposition des services informatiques', 'public/support', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "/support");
    }

    // Bloc 2 option SISR
    public function indexSisr() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('Solution Infrastructure Systèmes et Réseaux', 'public/sisr', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }
    
    // Bloc 2 option SLAM
    public function indexSlam() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('Solution Logiciel et Application Métiers', 'public/slam', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function indexCyber() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('Cybersécurité', 'public/cyber', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function indexMath() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('Mathématiques', 'public/math', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function indexCejm() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('CEJM', 'cejm/index.cejm', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function indexCge() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('CGE', 'public/cge', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function indexAnglais() {
        $matieres = $this->Matieres->getMatiere();
        $themes = $this->Themes->getTheme();
        afficherVue('Anglais', 'public/anglais', [
            'matieres' => $matieres,
            'themes' => $themes
        ], "");
    }

    public function Apropos() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Accueil', 'apropos', [
            'matieres' => $matieres
        ], "");
    }

    public function contact() {
        $matieres = $this->Matieres->getMatiere();

        afficherVue('Contact', 'contact', [
            'matieres' => $matieres
        ], "");
    }
}