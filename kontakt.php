<?php
 session_start();
 require_once("DB/db.php");
 require_once("DB/classes.php");
 include_once "header.php";

  if (isset($_POST["submit"])) {
    $meno = $_POST["meno"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    $contact = new Contact($pdo);
    $contact->create($meno, $email, $text);
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
    <title>Kontakt</title>
  </head>
<body>
  <main>
    <section>
      <!---------Formulár------->
      <div class="container mt-5">
        <h2>Napíš nám</h2>
        <form method="post">
          <div class="mb-3">
            <label for="meno" class="form-label">Meno:</label>
            <input type="text" class="form-control" id="meno" name="meno" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">Váš text:</label>
            <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary" name="submit">Odoslať</button>
          </div>
          <div class="form-check mt-2">
            <input type="checkbox" class="form-check-input" id="suhlas" name="suhlas" required>
            <label class="form-check-label" for="suhlas">Súhlasím so spracovaním údajov</label>
          </div>
        </form>
      </div>
    </section>
    <section>
      <!---------Tabuľka-------->
      <div class="container mt-5">
        <h2 class="mb-4">Alebo nás navštív</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Deň</th>
              <th>Čas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pondelok - Piatok</td>
              <td>8:00 - 18:00</td>
            </tr>
            <tr>
              <td>Sobota - Nedeľa</td>
              <td>Zatvorené</td>
            </tr>
          </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Kde?</a>
      </div>
    </section>
    <section>
      <!------Cookies------>
      <div id="cookieConsent" class="fixed-bottom">
        Táto stránka používa cookies. Kliknutím na "Súhlasím" s tým súhlasíte.
        <button onclick="acceptCookies()">Súhlasím</button>
    </div>
    </section>
  </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
  
</body>
</html>