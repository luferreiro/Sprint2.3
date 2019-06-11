<?php
require_once ("funciones.php");
require_once ("helpers.php");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- conecto a bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home</title>
   <link rel="stylesheet" href="css/master.css">
   </head>
 <body>

    <!-- Pongo div de navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="img/logo2.jpg" width="40" height="40" alt="">
        SKÅL
      </a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Bienvenido
        <?php
          if(isset($_SESSION["email"])) {
            echo $_SESSION["nombre"];
          }
        ?>
      </a>
      <button class="navbar-toggler py-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ's</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          </ul>
      </div>
    </nav>
