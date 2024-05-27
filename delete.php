<?php
require_once("DB/db.php");
require_once("DB/classes.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = new Crud($pdo);
    $product->delete($id);
    header("Location: produkty.php"); 
}
?>