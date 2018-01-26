<?php
include "assets/db/db.php";
include "assets/methods/methods.php";
$message="";
$db=new db;
if (isset($_POST['email'])){
extract($_POST);
  if(check_email_address($email)){
    $db->addEmail($email);
    $message="Merci de votre participation !";
  }else{
    $message="Votre email n'est pas valide";
  }




}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href='assets/css/App.css' rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Denk+One|Galada|Open+Sans|Roboto" rel="stylesheet">
</head>
<body>
  <div class="hover">
  <header class="header">
    <h5 class="commingSoon">Coming Soon</h5>
    <h1 class="brand">Mazy Culture</h1>
  </header>
  <main class="main">
        <section class="slogan">
          <h3 class="sloganText">Une coopérative d’évenements <br/> pour ceux qui savent partager</h3>
        </section>
        <div class="separationLine"></div>
        <section class="descritpion">
          <p>-
            Louez, créez et festoyez !- <br/>
            -Utilisez notre espace pour organiser vos évenements-<br/>
            -Proposez-nous vos projets socio-culturel et devenez résident officel <br/> de Mazy Culture-
          </p>
        </section>
        <section class="newsletter">
          <h4>inscrivez-vous à notre newsletter et soyez les premiers <br/> informés à la mise en ligne de notre site!</h4>
          <form action="index.php" method="POST">
            <div class="emailInput">
              <input
              type="email"
              placeholder="Entrez votre Email"
              name="email"
              oninvalid="this.setCustomValidity('Votre adresse est invalide')"
              oninput="setCustomValidity('')"
              />
              <button>Notify Me</button>
            </div>
            <h4><?php echo $message;?></h4>
          </form>
        </section>
  </main>
  <footer class="footer">
    <a href="https://www.facebook.com/sallemazyculture/"><img src="assets/img/facebook-logo.png" alt="suivez nous sur facebook"></a>
    <a href="https://twitter.com/?lang=en"><img src="assets/img/twitter.png" alt="suivez nous sur twitter"></a>
    <a href="https://www.instagram.com/?hl=en"><img src="assets/img/instagram.png" alt="suivez nous sur instagram"></a>
  </footer>

</div>
<script src="assets/js/App.js"/>
</body>
</html>
