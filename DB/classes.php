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
            session_start();
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['role'] = $user['Role'];
            header("location:index.php");
            exit();
        } else {
            return false;
        }
    }

    public function Register($Meno, $Priezvisko, $Email, $Tel_cislo, $Heslo) {
        $stmt = $this->db->prepare("INSERT INTO users (Meno, Priezvisko, Email, Tel_cislo, Heslo) VALUES (:Meno, :Priezvisko, :Email, :Tel_cislo, :Heslo)");
        $stmt->execute([
            'Meno' => $Meno, 
            'Priezvisko' => $Priezvisko, 
            'Email' => $Email, 
            'Tel_cislo' => $Tel_cislo, 
            'Heslo' => password_hash($Heslo, PASSWORD_DEFAULT)
        ]);
        header("location:login.php");
        exit();
    }
}


class Crud {
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


        public function read() {

            $sql = "SELECT * FROM products";
            $stmt = $this->db->query($sql);
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($products as $product) {

                echo '<section>';
                echo '<div class="container">';
                echo '<div class="row">';
                echo '<div class="col-md-6">';
                echo '<img src="' . $product['Obrazok'] . '" alt="Product Image" class="img-fluid" style="width: 100%; height: auto;">';
                echo '</div>';
                echo '<div class="col-md-6 d-flex flex-column">';
                echo '<h2>' . $product['Nazov'] . '</h2>';
                echo '<p>' . $product['Popis'] . '</p>';
                echo '<a href="kontakt.php" class="btn btn-primary mt-auto align-self-end">' . $product['Cena'] . "€" . '</a>';
                if (isset($_SESSION['role']) && ($_SESSION['role'] == 'Admin')) {
                    echo '<button type="button" class="btn btn-secondary edit mt-2" data-toggle="modal" data-target="#editModal" data-id="' . $product['ID'] . '" data-nazov="' . $product['Nazov'] . '" data-popis="' . $product['Popis'] . '" data-cena="' . $product['Cena'] . '" data-obrazok="' . $product['Obrazok'] . '">Edit</button>';

                    echo '<a href="delete.php?id=' . $product['ID'] . '" class="btn btn-danger delete mt-2">Delete</a>';
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
            }
        }

        public function create($nazov, $popis, $cena, $obrazok) {

            $sql = "INSERT INTO products (Nazov, Popis, Cena, Obrazok) VALUES (:nazov, :popis, :cena, :obrazok)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nazov', $nazov);
            $stmt->bindParam(':popis', $popis);
            $stmt->bindParam(':cena', $cena);
            $stmt->bindParam(':obrazok', $obrazok);
            $stmt->execute();
        }

        public function delete($id) {

            $sql = "DELETE FROM products WHERE ID = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function update($id, $nazov, $popis, $cena, $obrazok) {

            $sql = "UPDATE products SET Nazov = :nazov, Popis = :popis, Cena = :cena, Obrazok = :obrazok WHERE ID = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nazov', $nazov);
            $stmt->bindParam(':popis', $popis);
            $stmt->bindParam(':cena', $cena);
            $stmt->bindParam(':obrazok', $obrazok);
            $stmt->execute();
        }

    }

    class Contact {
        private $db;

        public function __construct($db) {
            $this->db = $db;
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function create($meno, $email, $text) {

            $sql = "INSERT INTO spravy (Meno, Email, Text) VALUES (:meno, :email, :text)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':meno', $meno);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':text', $text);
            $stmt->execute();
            header("Location: thankyou.php");
            exit();
        }
    }

    
?>