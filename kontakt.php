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
  <header>
    <!-- Navigačná lišta -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="index.html">CodeOcean</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
      </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Domov</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produkty.html">Produkty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="o-nas.html">O nás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.html">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>
    </header>
  <main>
    <section>
      <!---------Formulár------->
      <div class="container mt-5">
        <h2>Napíš nám</h2>
        <form action="thankyou.html">
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
            <button type="submit" class="btn btn-primary">Odoslať</button>
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
        <a href="index.html" class="btn btn-primary">Kde?</a>
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
  <footer class="text-dark text-center">
    <div class="container d-md-flex justify-content-md-between">
      <!-- Prvý stĺpec - autorské práva -->
      <div class="mb-3">
        <p class="mb-0">&copy; 2023 CodeOcean.</p>
        <p>Všetky práva vyhradené.</p>
      </div>
      
      <!-- Stredný stĺpec - sociálne siete a ikony -->
      <div class="text-center">
        <p>Sociálne Siete</p>
        <ul class="list-inline social-icons">
          <li class="list-inline-item mx-2">
            <a href="https://www.facebook.com/tomas.katzenbach" target="_blank">
              <i class="fab fa-facebook-f fa-2x"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a href="https://twitter.com/tomikaas1" target="_blank">
              <i class="fab fa-twitter fa-2x"></i>
            </a>
          </li>
          <li class="list-inline-item mx-2">
            <a href="https://www.instagram.com/tomaash.wav/" target="_blank">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
          </li>
        </ul>
      </div>
      
      <!-- Pravý stĺpec - mailto a telefón -->
      <div class="mb-3">
        <p class="mb-0">Email: <a href="mailto:tomaash69@gmail.com">codeocean@codeocean.com</a></p>
        <p class="mb-0">Tel: +421 944 645 429</p>
      </div>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
  
</body>
</html>