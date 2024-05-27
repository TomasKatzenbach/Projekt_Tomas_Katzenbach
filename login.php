<?php

 session_start();
 require_once("DB/db.php");
 require_once("DB/classes.php");
 include_once "header.php";
 if (isset($_POST["submit"])) {
  $Email = $_POST["Email"];
  $Heslo = $_POST["Heslo"];
  $Login = new Login($pdo);
  $Login -> login($Email, $Heslo);
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
        <label for="email">Používateľský email:</label>
        <input type="email" id="email" name="Email" required>
        <label for="password">Heslo:</label>
        <input type="password" id="password" name="Heslo" required>
        <input type="submit" value="Prihlásiť sa" name="submit">
        <p>Nemáte účet? <a href="register.php">Registrujte sa!</a></p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
<?php include_once "footer.php";?>
</html>