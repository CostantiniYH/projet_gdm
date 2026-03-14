<?php
namespace App\Model\Requete;
use PDO;

// III - Cette classe UserModel() gère l'accès et les requêtes vers la BDD pour la table t_users.
//  

class UserModel extends Model 
{
    protected $table = 'users';

    public function __construct($pdo)
    {
        return parent::__construct($pdo);
    }

    public function findByEmail($email) 
    {
        $stmt = $this->query("SELECT * FROM $this->table WHERE email = ?", [$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($user) {
        $sql = "INSERT INTO $this->table (nom, prenom, email, password, role) VALUES (?, ?, ?, ?, ?)";
        $this->query($sql, [
            $user->get_name(),
            $user->get_firstname(),
            $user->get_email(),
            $user->get_password(),
            $user->get_role(),
        ]);
    }

    public function findAll()
    {
        $stmt = $this->query("SELECT * FROM t_users ORDER BY id DESC");
        return $stmt->fetchAll();
    }

}