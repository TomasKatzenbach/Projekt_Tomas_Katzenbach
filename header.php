<header>
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
        <a class="nav-link" href="index.php">Domov</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produkty.php">Produkty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="o-nas.php">O nás</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>
      <li class="nav-item">
        <?php if (isset($_SESSION["user_id"]) && isset($_SESSION["role"])): ?>
          <a class="nav-link"><?php echo $_SESSION["role"]; ?></a>
        <?php endif; ?>
      </li>
      <?php if (isset($_SESSION["user_id"]) && isset($_SESSION["role"])): ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
</header>