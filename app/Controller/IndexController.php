<?php
namespace App\Controller;
use App\Model\Requete\Matiere;

class IndexController {
    private $pdo;
    private $model;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->model = new Matiere($pdo);

    }
    
    public function index() {
        $matieres = $this->model->getMatiere();

        afficherVue('Accueil', 'home', [
            'matieres' => $matieres
        ]);
    }

    public function indexDev() {
        $matieres = $this->model->getMatiere();

        afficherVue('développement', 'public/dev', [
            'matieres' => $matieres
        ]);
    }

    public function indexProgram() {
        $matieres = $this->model->getMatiere();

        afficherVue('Programmation', 'public/program', [
            'matieres' => $matieres
        ]);
    }
    public function indexModeli() {
        $matieres = $this->model->getMatiere();

        afficherVue('Modélisation', 'public/modeli', [
            'matieres' => $matieres
        ]);
    }

    public function indexSupport() {
        $matieres = $this->model->getMatiere();

        afficherVue('Support et mise à disposition des services informatiques', 'public/support', [
            'matieres' => $matieres
        ]);
    }

    public function indexSisr() {
        $matieres = $this->model->getMatiere();

        afficherVue('Solution Infrastructure Systèmes et Réseaux', 'public/sisr', [
            'matieres' => $matieres
        ]);
    }

    public function indexSlam() {
        $matieres = $this->model->getMatiere();

        afficherVue('Solution Logiciel et Application Métiers', 'public/slam', [
            'matieres' => $matieres
        ]);
    }

    public function indexCyber() {
        $matieres = $this->model->getMatiere();

        afficherVue('Cybersécurité', 'public/cyber', [
            'matieres' => $matieres
        ]);
    }

    public function indexMath() {
        $matieres = $this->model->getMatiere();

        afficherVue('Matématique', 'public/math', [
            'matieres' => $matieres
        ]);
    }

    public function indexCejm() {
        $matieres = $this->model->getMatiere();

        afficherVue('CEJM', 'public/cejm', [
            'matieres' => $matieres
        ]);
    }

    public function indexCge() {
        $matieres = $this->model->getMatiere();

        afficherVue('CGE', 'public/cge', [
            'matieres' => $matieres
        ]);
    }

    public function indexAnglais() {
        $matieres = $this->model->getMatiere();

        afficherVue('Anglais', 'public/anglais', [
            'matieres' => $matieres
        ]);
    }

    public function Apropos() {
        $matieres = $this->model->getMatiere();

        afficherVue('Accueil', 'apropos', [
            'matieres' => $matieres
        ]);
    }

    public function contact() {
        $matieres = $this->model->getMatiere();

        afficherVue('Contact', 'contact', [
            'matieres' => $matieres
        ]);
    }
}