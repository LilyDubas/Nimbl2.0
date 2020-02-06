<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MDB</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/game.css">
</head>
<body>
<?php include "header.php" ?>
<div class="container">
  <div id="game" class="justify-center flex-column">
    <div id="hud">
      <div class="hud-item">
        <p id="progressText" class="hud-prefix" >Question</p>
          <div id="progressBar">
              <div id="progressBarFull"></div>
          </div>
      </div>
      <div class="hud-item">
        <p class="hud-prefix">Score</p>
        <h1 class="hud-main-text" id="score">0</h1>
      </div>
    </div>
    <img src="assets/img/SolarSystem.png" alt="Illustration du système solaire" id="SolarSystem">
    <h2 id="question">Laquelle de ces planètes n'a pas d'anneaux?</h2>
      <div class="choice-container">
          <p class="choice-prefix">A</p>
          <p class="choice-text" data-number='1'>Saturne</p>
      </div>
    <div class="choice-container">
      <p class="choice-prefix">B</p>
      <p class="choice-text" data-number='2'>Jupiter</p>
    </div>
    <div class="choice-container">
      <p class="choice-prefix">C</p>
      <p class="choice-text" data-number='3'>Mars</p>
    </div>
  </div>
</div>
<footer>
  <a class="text-white" href="#"> Mentions légales</a>
  <a class="text-white" href="#"> Politique RGPD</a>
  <a class="text-white" href="#"> Cookies</a>
</footer>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/mdb.min.js"></script>
<script type="text/javascript" src="assets/js/script.jsassets/"></script>
<script src="assets/js/game.js"></script>
</body>
<?php include 'footer.php' ?>
</html>
