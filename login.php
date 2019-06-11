<?php
require_once ("funciones.php");
require_once ("helpers.php");
if($_POST){
  $errores = validar($_POST, "login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if ($usuario==null) {
      $errores["email"]="Correo electrónico o contraseña incorrectos";
    } else {
      if (password_verify($_POST["password"],$usuario["password"])===false) {
        $errores["password"]="Correo electrónico o contraseña incorrectos";
      } else {
        sesionUsuario($usuario, $_POST);
        if(validarUsuario()){
          header("location: index.php");
          exit;
        }else{
          header("location: register.php");
          exit;
        }
      }
    }
  }
}
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
  <title>Login</title>
  <link rel="stylesheet" href="css/master.css">
</head>
<body>
  <!-- Pongo el link a nav_bar.php -->
  <?php include("nav_bar.php") ?>

  <!-- Pongo div de Body de bootstrap -->
  <div class="container">
  <div class="card-body">

  <!-- Pongo los mensajes de errores -->
  <?php
         if (isset($errores)) :?>
         <ul class="alert alert-warning">
           <?php foreach ($errores as $key => $value) :?>
               <li style="list-style-type:none"> <?=$value; ?></li>
           <?php endforeach; ?>
         </ul>
       <?php endif; ?>

    <h2 class="Login">Ingresar</h2>
  <br>
  <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
<div class="form-group">
<input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email">
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
</div>
<div class="form-group">
<div class="form-check">
  <input name="recordar" type="checkbox" class="form-check-input" id="dropdownCheck" value="recordar">
  <label class="form-check-label" for="dropdownCheck">
    Recordarme
  </label>
</div>
</div>
<button type="submit" class="btn btn-secondary">Ingresar</button>
<br>
<br>
<a class="dropdown-item" href="register.php">Crear una Cuenta</a>
<a class="dropdown-item" href="#">Olvido su Contraseña?</a>


</div>
</div>

  <!-- Pongo el link a footer.php -->
  <?php include("footer.php") ?>

 <!-- JAVA de bootstrap  -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
