<?php
/* Настройки сайта */
require("config/common.php");

/* Подключение к БД */
require("includes/mysqli.inc.php");

/* Стартуем сессию */
session_start();
?>
<!doctype html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <?php require("templates/styles.tpl.php"); ?>
  <link rel="stylesheet" href="vendor/leaflet-1.7.1/dist/leaflet.css">

  <title><?= SITE_NAME ?></title>
</head>

<body>
  <!-- HEADER -->
  <?php require("templates/header.tpl.php"); ?>

  <main class="container-fluid">
    <!-- MAP -->
    <?php require("templates/map.tpl.php"); ?>
  </main>

  <!-- JAVASCRIPT -->
  <?php require("templates/scripts.tpl.php"); ?>
  <script src="vendor/leaflet-1.7.1/dist/leaflet.js"></script>
  <script src="assets/js/map.js"></script>
</body>

</html>
<?php
/* Закрываем соединение с БД */
$mysqli->close();
