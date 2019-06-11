<?php
require_once ("funciones.php");
require_once ("helpers.php");
if($_POST){
  $errores = validar($_POST, "registro");
  if(count($errores)==0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;
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

    <h2 class="Register">Registrarse</h2>

      <br>
        <form class="px-4 py-3 mx-auto text-center" action="" method="POST" enctype= "multipart/form-data">
          <div class="form-group">
            <input name="nombre" type="text" class="form-control" id="nombre" value="<?= isset($errores["nombre"])? "": persistir("nombre") ?>" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input name="apellido" type="text" class="form-control" id="apellido" value="<?= isset($errores["apellido"])? "": persistir("apellido") ?>" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" value="<?= isset($errores["email"])? "": persistir("email") ?>" placeholder="Email">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" value="" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input name="repassword" type="password" class="form-control" id="repassword" value="" placeholder="Rectifique su Contraseña">
          </div>
          <div class="form-group">
            <input name="avatar" type="file" class="form-control" id="avatar" value="" placeholder="Adjunte su foto de perfil">
          </div>
              <button type="submit" class="btn btn-secondary">Registrarse</button>
        </form>
  </div>
  </div>

  <!-- Pongo el link a footer.php -->
  <?php include("footer.php") ?>
