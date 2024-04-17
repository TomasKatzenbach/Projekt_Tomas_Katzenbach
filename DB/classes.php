<?php
require_once("db.php");

class Login {
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function login($Email, $Heslo) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE Email = :Email");
        $stmt->execute(['Email' => $Email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($Heslo, $user['Heslo'])) {
            // The Email and Heslo are correct.
            // Start a session and store the user's ID in it.
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['role'] = $user['Role'];
            header("location:index.php");
            exit();
        } else {
            // The Email or Heslo are incorrect.
            return false;
        }
    }
}
?>