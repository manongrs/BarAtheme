<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Librairie Centrale à Toulouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Bienvenue à la Librairie Centrale, située en plein cœur de Toulouse. Découvrez notre sélection de livres, notre salon de thé et participez à nos événements.">
  <meta name="keywords" content="Librairie, Salon de thé, Livres, Événements, Toulouse, Librairie Centrale">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  
  .container {
    padding: 80px 120px;
  }
 
 /*-------------------------partie logo ----------------------------*/
 
 .presentation {
	padding: 0px 0px;
  }

/*------------------------- partie 4 rond --------------------------------------*/
  
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  
  .person:hover {
    border-color: #f1f1f1;
  }
  
  
  /*---------------------- Nav Bar--------------------------------------------*/
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  
  /* -----------------partie footer -------------------- */ 
  
  .footer {
	text-align: center;
	background-color: #2d2d30;
	opacity: 0.9;
	color: #f5f5f5;
	padding: 15px 80px;
  }
  
   footer a:hover {
    color: red;
    text-decoration: none;
  } 
 
 /* -----------------partie petit écran -------------------- */
 
 
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<header>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Librairie</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="livres.php">Livres</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

<main>
<!-- Container (The Band Section) -->
<section id="band" class="container text-center">
  <h3>Librairie Centrale</h3>
  <p><em>Une librairie en plein centre de Toulouse</em></p>
  <br>
  <!-- partie logo -->
  <div class="container-fluid presentation text-center">
    <div class="col-sm-12">
      <a href="#demo" data-toggle="img-thumbnail">
        <img src="logoLivre.avif" class="img-thumbnail" alt="Logo de la Librairie Centrale" width="200" height="200">
      </a>
    </div>
  </div>
</section>

<!-- partie services -->
<section class="container">
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center"><strong>Librairie</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="librairie.jpg" class="img-circle person" alt="Librairie" width="200" height="200">
      </a>
      <div id="demo" class="collapse">
        <p>Ouverte tous les jours dimanches compris.</p>
        <p>Un service de restauration de 11h00 à 14h.</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Salon de thé</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="the.jpg" class="img-circle person" alt="Salon de thé" width="200" height="200">
      </a>
      <div id="demo2" class="collapse">
        <p>Différents types de thés disponibles</p>
        <p>Snacks disponibles sur place</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Petite restauration</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="gat.jpg" class="img-circle person" alt="Petite restauration" width="200" height="200">
      </a>
      <div id="demo3" class="collapse">
        <p>Plusieurs gâteaux disponibles</p>
        <p>Nombreuses sucreries pour l'accompagnement</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Évènements</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="dedicace.jpg" class="img-circle person" alt="Évènements" width="200" height="200">
      </a>
      <div id="demo4" class="collapse">
        <p>Plusieurs séances de dédicaces dans le mois</p>
        <p>Discutez avec les différents auteurs</p>
      </div>
    </div>
  </div>
</section>

<!-- Partie CONTACT -->
<section class="contact">
  <div class="container-fluid presentation">
    <h2>Contact</h2>
    <br>
    <div class="row text-center">
      <div class="col-sm-6">
        <div class="thumbnail">
          <br>
          <p><b>Horaires:</b></p>
          <p>Dimanche/Lundi 10:00-17:00</p>
          <p>Mardi 09:00-18:00</p>
          <p>Mercredi 11:00-18:00</p>
          <p>Jeudi 09:00-18:00</p>
          <p>Vendredi 11:00-18:00</p>
          <p>Samedi 09:30-18:00</p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="thumbnail">
          <br>
          <p><b>Contact:</b></p>
          <p>Tel: 06 61 07 08 41</p>
          <p>Mail: librairie@gmail.com</p>
          <p><b>Adresse:</b></p>
          <p>56 rue Dumeril</p>
          <p>31400 Toulouse</p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<!-- Footer -->
<footer class="footer">
  <div class="container-fluid text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>&copy; 2024 Librairie Centrale. Tous droits réservés.</p>
  </div>
</footer>

</body>
</html>
