<?php
namespace App\Controller;
use App\Model\Requete\UserModel;
use App\Model\Validation\UserValidator;
use App\Model\Service\UserService;
use App\Model\Service\LoginService;
use App\Model\Requete\Matiere;


class AuthController 
{    
    private $serviceRegister;
    private $serviceLogin;
    private $matiere;

    public function __construct($pdo) {
        $model = new UserModel($pdo);
        $validator = new UserValidator();
        $this->serviceRegister = new UserService($model, $validator);
        $this->serviceLogin = new LoginService($model, $validator);
        $this->matiere = new Matiere($pdo);

    }

    public function formRegister() {    
        $matieres = $this->matiere->getMatiere();

        afficherVue('Inscription', "/auth", 'auth/register', "", "", "", [
            'matieres' => $matieres
        ]);
    }
    
    public function register() {
        
        $data = $_POST;
       
        $errors = $this->serviceRegister->registerUser($data);

        if (!empty($errors)) {
            flash('error', implode('<br>', $errors));
            header("Location: " . BASE_URL . "register");
            exit;
        }

        flash('success', "Inscription réussi !");
        if (!headers_sent()) {
            header("Location: " . BASE_URL . "login");
            exit;
        } else {
            echo '<script>window.location="' . BASE_URL . 'login";</script>';
            exit;
        }
    }

     public function formLogin() {
        $css = "/auth";
        $matieres = $this->matiere->getMatiere();

        afficherVue('Connexion', '/auth', 'auth/login', "", "", "", [
            'matieres' => $matieres
        ]);
    }

    public function login()
    {
        $result = $this->serviceLogin->loginUser($_POST);

        if (!empty($result['errors'])) {
            flash('error', $result['errors']);
            header("Location: " . BASE_URL . "login");
            exit;
        }

        // Regénérer l'id par sécurité
        // session_regenerate_id(true);

        $_SESSION['user'] = [
            'user_id'           => $result['user']['id'],
            'nom'               => $result['user']['nom'],
            'prenom'            => $result['user']['prenom'],
            'email'             => $result['user']['email'],
            // 'date_naissance'    => $result['user']['date_naissance'],
            // 'filiere'           => $result['user']['filiere'],
            // 'niveau'            => $result['user']['niveau'],
            // 'etablissement'     => $result['user']['etablissement'],
            // 'image'             => $result['user']['image'],
            'created_at'        => $result['user']['created_at'],
            'role'              => $result['user']['role']
        ];
        $_SESSION['logged_in'] = true;

        flash('success', "Connexion réussi !");
        header("Location: " . BASE_URL . "dashboard");
        exit;
    }

    public function logout() {
        $_SESSION = [];
        session_unset();
        session_destroy();

        session_start();

        flash('success', "Déconnexion réussi !");
        header("Location: " . BASE_URL . "login");
        exit;
    }
}