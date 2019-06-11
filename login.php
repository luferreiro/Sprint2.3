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
