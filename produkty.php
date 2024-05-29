<?php
session_start();
require_once("DB/db.php");
require_once("DB/classes.php");
include_once "header.php";

if (isset($_POST['submit'])) {
  $nazov = $_POST['nazov'];
  $popis = $_POST['popis'];
  $cena = $_POST['cena'];
  
  if(isset($_FILES['obrazok']) && $_FILES['obrazok']['error'] == 0){
    $obrazok = $_FILES['obrazok']['name'];
    $fileTmpPath = $_FILES['obrazok']['tmp_name'];
    $dest_path = "img/" . $obrazok;

    if(move_uploaded_file($fileTmpPath, $dest_path)){
      $product = new Crud($pdo);
      $product->create($nazov, $popis, $cena, $dest_path);

      header("Location: produkty.php");
      exit;
    } else {
      echo "There was an error moving the uploaded file.";
    }
  } else {
    echo "No file uploaded or there was an upload error.";
  }
}



if (isset($_POST["edit"])) {
  $id = $_POST["id"];
  $nazov = $_POST["nazov"];
  $popis = $_POST["popis"];
  $cena = $_POST["cena"];
  $obrazok = null;


  if (isset($_FILES['obrazok']) && $_FILES['obrazok']['error'] == 0) {
    $upload_dir = 'img/';
    $filename = basename($_FILES['obrazok']['name']);
    $target_file = $upload_dir . $filename;


    if (move_uploaded_file($_FILES['obrazok']['tmp_name'], $target_file)) {
        $obrazok = $target_file;
    }
  }

  $product = new Crud($pdo);
  $product->update($id, $nazov, $popis, $cena, $obrazok);


  header("Location: produkty.php");
  exit;
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Produkty</title>
</head>
<body>
<main>
  <section>
    <!-- Hlavička stránky -->
    <div class="container">
      <header class="jumbotron text-center custom-jumbotron">
        <h1>Ponuka produktov</h1>
        <p>
          Z ponuky našich produktov si môžete vybrat to čo vás najviac zaujme.
        </p>
        <p>
          Individuálna konzultácia je nevyhnutná.
        </p>
      </header>
    </div>
  </section>
<?php
if(isset($_SESSION['role']) && ($_SESSION['role'] == 'Admin')) {
  echo '<a href="#" class="btn btn-primary position-fixed d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#myModal" style="bottom: 20px; right: 20px; width: 60px; height: 60px; font-size: 30px; border-radius: 15px;"><i class="fas fa-plus"></i></a>';
}
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vložiť produkt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="produkty.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nazov">Názov</label>
                  <input type="text" class="form-control" id="nazov" name="nazov" >
                </div>
                <div class="form-group">
                  <label for="popis">Popis</label>
                  <textarea class="form-control" id="popis" name="popis" ></textarea>
                </div>
                <div class="form-group">
                  <label for="cena">Cena</label>
                  <input type="number" class="form-control" id="cena" name="cena" >
                </div>
                <div class="form-group">
                  <label for="obrazok">Obrázok</label>
                  <input type="file" class="form-control" id="obrazok" name="obrazok" >
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Zrušiť</button>
                  <button type="submit" class="btn btn-primary" name="submit">Vytvoriť</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Upraviť produkt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" id="editId" name="id">
          <div class="form-group">
            <label for="editNazov">Nazov</label>
            <input type="text" class="form-control" id="editNazov" name="nazov" >
          </div>
          <div class="form-group">
            <label for="editPopis">Popis</label>
            <textarea class="form-control" id="editPopis" name="popis" ></textarea>
          </div>
          <div class="form-group">
            <label for="editCena">Cena</label>
            <input type="number" class="form-control" id="editCena" name="cena" >
          </div>
          <div class="form-group">
            <label for="editObrazok">Obrazok</label>
            <input type="file" class="form-control" id="editObrazok" name="obrazok" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zrušiť</button>
          <button type="submit" class="btn btn-primary" name="edit">Uložiť</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php

$product=new Crud($pdo);
$product->read();

?>

<script>
$(document).ready(function() {
    $('.edit').on('click', function() {
      var id = $(this).data('id');
      var nazov = $(this).data('nazov');
      var popis = $(this).data('popis');
      var cena = $(this).data('cena');
      var obrazok = $(this).data('obrazok');
  
      $('#editId').val(id);
      $('#editNazov').val(nazov);
      $('#editPopis').val(popis);
      $('#editCena').val(cena);
    });
  });
</script>

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