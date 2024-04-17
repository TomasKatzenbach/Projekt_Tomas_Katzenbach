<?php
 session_start();
 require_once("DB/db.php");
 require_once("DB/classes.php");
 include_once "header.php";
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

<!-- Hlavička stránky -->
<div class="container">
  <header class="jumbotron text-center custom-jumbotron">
    <h1>Vitaj na našom webe!</h1>
    <p>
      Sme mladá a dynamická firma zameraná na tvorbu moderných a efektívnych webových stránok pre podniky všetkých veľkostí. 
      Naša vášeň spočíva v tom, ako vytvárať online prítomnosť, ktorá nielen oslovuje, ale aj konvertuje návštevníkov na zákazníkov.
    </p>
  </header>
</div>

<main>
  <!----------------Carousel------------------>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/foto1.jpg" class="d-block w-100" alt="Obrázok 1">
    </div>
    <div class="carousel-item">
      <img src="img/foto2.jpg" class="d-block w-100" alt="Obrázok 2">
    </div>
    <div class="carousel-item">
      <img src="img/foto3.jpg" class="d-block w-100" alt="Obrázok 3">
    </div>
    <div class="carousel-item">
      <img src="img/foto4.jpg" class="d-block w-100" alt="Obrázok 4">
    </div>
    <div class="carousel-item">
      <img src="img/foto5.jpg" class="d-block w-100" alt="Obrázok 5">
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Předchozí</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Další</span>
  </a>
</div>
<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- Google Mapa -->
        <div class="about-content">
          <h1>Náš Tím</h1>
          <p>
            V srdci našej kreatívnej dielne sa nachádza tím 20 oddaných profesionálov, ktorí zdieľajú vášeň pre 
            inovácie a digitálny dizajn.

            Naša spoločnosť sa pýši svojou mladou energiou a schopnosťou prispôsobiť sa rýchlo meniacim sa 
            trendom v oblasti webového dizajnu. Sme presvedčení, že mladý a zohratý tím je kľúčom k úspechu v dnešnej digitálnej ére.

            Pri vytváraní a upravovaní webových stránok sa snažíme nielen o esteticky príjemné a funkčné 
            výsledky, ale aj o poskytnutie jedinečného zážitku našim klientom. Sme tu, aby sme transformovali 
            vaše myšlienky a požiadavky do vizuálnych a interaktívnych digitálnych skvostov.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="img/nas-tim.jpg" alt="Nas-Tim" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<!--------------O-Nás---------------->
<section class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="google-map">
          <!-- Google Mapa -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.2238499788763!2d18.092032789351947!3d48.30866354882003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b3ee43b2f6763%3A0x75a567f979f5bed3!2sUniverzita%20Kon%C5%A1tant%C3%ADna%20Filozofa!5e0!3m2!1ssk!2ssk!4v1702419020075!5m2!1ssk!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Naše Pracovisko</h2>
        <p>
          Vitajte na našom pracovisku!

          Nachádzame sa v Nitre. Sme hrdí na to, že sme súčasťou dynamického a inovatívneho prostredia.

          Pri nás nájdete nielen pracovisko, ale aj komunitu ľudí s vášňou pre úpravu, vytváranie webov. 
          Sme presvedčení, že inšpirujúce prostredie podporuje vznik nových nápadov a spoluprácu medzi jednotlivcami.

          Ak máte akékoľvek otázky alebo by ste sa chceli stretnúť osobne, neváhajte nás kontaktovať. 
          Tešíme sa na stretnutie s vami a na to, ako môžeme spolu dosiahnuť skvelé veci.
        </p>
      </div>
    </div>
  </div>
</section>
</div>
<section>
  <div class="container">
      <h2 class="text-center">Prečo si vybrať práve nás</h2>
      <div id="accordion">
          <!-- Položky akordeónu -->
          <div class="card">
              <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Kreatívny a unikátny dizajn pre vašu značku
                      </button>
                  </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                      Náš dizajn je zameraný na kreativitu a unikátnosť, aby zdôraznil vašu značku a prilákal pozornosť.
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Špecializácia na responzívny dizajn pre všetky typy zariadení
                      </button>
                  </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                      Naša firma sa špecializuje na responzívny dizajn, aby vaša stránka vyzerala dobre na všetkých zariadeniach.
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Skúsený tím odborníkov
                      </button>
                  </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                      Naši skúsení odborníci v oblasti dizajnu a vývoja sú pripravení vám poskytnúť najlepšie riešenia.
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Flexibilné možnosti prispôsobenia
                      </button>
                  </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                      Poskytujeme flexibilné možnosti prispôsobenia, aby sme splnili špecifické požiadavky a očakávania každého klienta.
                  </div>
              </div>
          </div>

          <div class="card">
              <div class="card-header" id="headingFive">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Zameranie na maximálnu spokojnosť klienta
                      </button>
                  </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                      Naša firma sa zameriava na dosiahnutie maximálnej spokojnosti klienta a dlhodobých vzťahov.
                  </div>
              </div>
          </div>
      </div>
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
<?php include_once "footer.php";?>
</html>