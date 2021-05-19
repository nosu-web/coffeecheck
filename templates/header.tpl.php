<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-coffee px-4">
    <a class="navbar-brand" href="/"><?= SITE_NAME ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Карта</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">О проекте</a>
        </li>
        <?php if ($_SESSION["name"]) : ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Выход</a>
          </li>
        <? endif; ?>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="btn btn-light" href="add.php" role="button">Добавить точку</a>
        </li>
      </ul>
    </div>
  </nav>
</header>