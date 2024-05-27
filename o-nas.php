<?php
 session_start();
 require_once("DB/db.php");
 require_once("DB/classes.php");
 include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>O Nás</title>
      </head>
</head>
<body>
<main>
  <!-- Hlavička stránky -->
  <div class="container">
    <header class="jumbotron text-center custom-jumbotron">
      <p>
        "V podnikaní je sila nekonečných možností. Každý krok otvára nové dvere a ponúka príležitosť rásť. 
        Pre podnikateľa nie sú neúspechy koniec, ale skôr škola, kde sa učíme a posúvame vpred."
      </p>
      <h5>CodeOcean</h5>
    </header>
  </div>
  
  <section>
    <div class="container mt-5">
      <div class="row">
        <!-- Obrázok vľavo -->
        <div class="col-md-6">
          <img src="img/historia.jpg" alt="Historia firmy" class="img-fluid">
        </div>
        
        <!-- Text vpravo -->
        <div class="col-md-6">
          <h2>História našej firmy</h2>
          <p>
            Vítame vás na našej ceste! Naša spoločnosť je aktívnym hráčom v oblasti tvorby webstránok a online prítomnosti.
          </p>
          <p>
            S pýchou oznamujeme, že úspešne pôsobíme na trhu už 5 rokov. 
            Počas tejto doby sme mohli pracovať s mnohými skvelými klientmi a vytvárať moderné a efektívne webové stránky pre ich podnikanie.
          </p>
          <p>
            V súčasnom rýchlo sa meniacom svete je dôležité neustále sa prispôsobovať novým trendom a výzvam. 
            Naša firma, CodeOcean, je odhodlaná byť lídrom v oblasti digitálneho dizajnu a online prítomnosti. 
          </p>
          <p>
            Naša cesta začala s jednoduchou víziou - poskytovať našim klientom nielen profesionálne webové stránky, ale aj digitálnu identitu, 
            ktorá rezonuje s ich hodnotami a poslaním. Od svojich skromných začiatkov sme rástli a rozvíjali svoje schopnosti a portfólio.
          </p>
          <p>
            Sme hrdí na to, že sme boli svedkami úspechu našich klientov, od malých podnikateľov až po veľké spoločnosti. 
            Náš skúsení tím kreatívcov, dizajnérov a vývojárov je pripravený prijať výzvy a priniesť inovatívne riešenia do každého projektu.
          </p>
          <p>
            V našej firme neustále investujeme do vzdelávania a rozvoja, aby sme zostali v popredí vo svete digitálneho dizajnu. 
            Sme tu, aby sme vám pomohli dosiahnuť a prekročiť vaše digitálne ciele.
          </p>
          <p>
            Ďakujeme vám za dôveru a možnosť spolupracovať s vami na vašich projektoch. 
            Tešíme sa na ďalších 5 rokov kreativity, inovácií a úspechov s vami!
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-5">
      <div class="row">
        <!-- Text vľavo -->
        <div class="col-md-6">
          <h2>Prečo sme začali našu firmu</h2>
          <p>
            Naša cesta začala s vášňou a víziou zmeny v digitálnom svete. Chceli sme vytvoriť niečo viac než len webové stránky. 
            Chceli sme vytvárať digitálnu prítomnosť, ktorá inšpiruje, komunikuje a prináša hodnotu našim klientom.
          </p>
          <p>
            V dnešnej konkurenčnej online krajine veríme, že každý podnik, bez ohľadu na svoju veľkosť, si zaslúži kvalitnú digitálnu reprezentáciu. 
            Naša firma, CodeOcean, bola založená s cieľom pomáhať iným podnikom dosiahnuť svoj plný online potenciál.
          </p>
          <p>
            Cítili sme, že existuje potreba pre kreatívny prístup k dizajnu a vývoju, ktorý by prekročil bežné štandardy. 
            Chceli sme byť motorom inovácií v oblasti digitálneho dizajnu a priniesť do života jedinečné a účinné digitálne riešenia.
          </p>
          <p>
            Sme hrdí na to, že sme vytvorili miesto, kde sa stretávajú nápady, talent a technológia. 
            Veríme, že úspech našich klientov je naším úspechom, a preto každý deň pracujeme na tom, aby sme 
            prekonávali očakávania a prinášali pozitívne zmeny do digitálneho sveta.
          </p>
          <p>
            Ďakujeme vám za dôveru a príležitosť byť s vami na tejto ceste. 
            Tešíme sa na to, ako môžeme spoločne rásť a dosahovať úspechy v digitálnom priestore.
          </p>
        </div>
        
        <!-- Obrázok vpravo -->
        <div class="col-md-6">
          <img src="img/preco.jpg" alt="Prečo sme začali našu firmu" class="img-fluid">
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
</html>