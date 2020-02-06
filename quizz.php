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
  <link rel="stylesheet" href="assets/css/quiz.css">
</head>
<body>
<?php include "header.php" ?>
  <!-- <div class="jumbotron jumbotron-fluid" id="quizzWelcome">
      <h1 class="display-3 text-center">Bienvenu sur l'espace quizz!</h1>
      <p class="lead">Défie Pilou et tes amis en répondant aux quizz et remporte des trophées!</p>
      <p></p>
  </div> -->
  <!--<div class="jumbotron" id="jumboSolar">
    <h1 class="display-3" id="systemeSolaire">Le système solaire</h1>
    <div class="quiz-container">
      <div id="quiz"></div>
    </div>
    <button id="previous">Previous Question</button>
    <button id="next">Next Question</button>
    <button id="submit">Submit Quiz</button>
    <div id="results"></div>
    </div>-->

<div class="container">
    <div id="home" class="flex-center flex-column">
      <h1>Le système solaire</h1>
      <img src="assets/img/SolarSystem.png" alt="Illustration du système solaire" id="SolarSystem">
      <a class="btn" href="game.php">Jouer!</a>
      <a class="btn" href="highscores.php">Highscores</a>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--<script src="assets/js/quiz.js"></script>-->
</body>
<?php include 'footer.php' ?>
</html>
