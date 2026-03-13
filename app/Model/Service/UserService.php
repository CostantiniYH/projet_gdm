<?php
namespace App\Model\Service;
use App\Model\Entite\User;

// IV - Cette classe UserService gère toute la logique métier y compris la validation côté client du formulaire
// que nous avons écrit dans UserValidator.

// ==========Logique métier de UserService===========

// 1. Validation formulaire via UserValidator
// 2. Vérification unicité email via UserModel
// 3. Création de l'objet via UserEntite
// 4. Hachage du mot de passe
// 5. insertion BDD via UserModel

class UserService {
    private $model;
    private $validator;

    public function __construct($model, $validator) {
        $this->model = $model;
        $this->validator = $validator;

    }

    public function registerUser($data) {

        // (1) Vérifier si les entrées sont conformes aux contraintes de validateRegistration()
        $errors = $this->validator->validateRegistration($data);
        if (!empty($errors)) {
            return $errors;
        }

        // (2) Vérification unicité email
        if ($this->model->findByEmail($data['email'])) {
            return ['email' => 'Cet emeil existe déjà dans la BDD.'];
        }

        // (3)
        $user = new User();

        $user->set_name($data['nom']);
        $user->set_firstname($data['prenom']);
        $user->set_email($data['email']);

        // (4)
        $user->set_password(password_hash($data['password'], PASSWORD_ARGON2ID));

        $user->set_role($data['role']);

        // (5)
        $this->model->insert($user);

        return [];
    }

    public function getAllUsers()
    {
        return $this->model->findAll();
    }
}
