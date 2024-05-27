<?php

 session_start();
 require_once("DB/db.php");
 require_once("DB/classes.php");
 include_once "header.php";
if (isset($_POST["submit"])) {
    $Meno = $_POST["Meno"];
    $Priezvisko = $_POST["Priezvisko"];
    $Email = $_POST["Email"];
    $Heslo = $_POST["Heslo"];
    $Tel_cislo = $_POST["Tel_cislo"];
    $Register = new Login($pdo);
    $Register -> Register($Meno, $Priezvisko, $Email, $Tel_cislo, $Heslo);
}
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="author" content="Tomáš Katzenbach">
  <title>Domov</title>
</head>
<body>
<div class="container">
    <h2>Prihlásenie</h2>
    <form method="post">
        <div>
            <label for="meno">Meno:</label>
            <input type="text" id="meno" name="Meno" required>
        </div>
        <div>
            <label for="priezvisko">Priezvisko:</label>
            <input type="text" id="priezvisko" name="Priezvisko" required>
        </div>
        <div>
            <label for="email">Používateľský email:</label>
            <input type="email" id="email" name="Email" required>
        </div>
        <div>
            <label for="password">Heslo:</label>
            <input type="password" id="password" name="Heslo" required>
        </div>
        <div>
            <label for="tel">Telefónne číslo:</label>
            <input type="tel" id="tel" name="Tel_cislo" required>
        </div>
        <input type="submit" value="Registrovať" name="submit">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
<?php include_once "footer.php";?>
</html>