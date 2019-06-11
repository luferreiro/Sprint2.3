<?php
function validar($datos, $bandera){
  $errores = [];
  if (isset($datos["email"])){
    $email = trim($datos["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errores["email"]="El email no es válido";
    }
  }
  if (isset($datos["password"])) {
    $password = trim($datos["password"]);
    if (empty($password)){
      $errores["password"]="El password no puede estar vació";
    }
    if (strlen($datos["password"])<6){
      $errores["password"]="El password debe tener mínimo 6 caracteres";
    }
  }
  if ($bandera == "registro") {

    if (isset($datos["nombre"])){
    $nombre = trim($datos["nombre"]);
    if (empty($nombre)){
      $errores["nombre"]="El nombre no puede estar vacio";
    }
  }
  if (isset($datos["apellido"])){
  $apellido = trim($datos["apellido"]);
  if (empty($apellido)){
    $errores["apellido"]="El apellido no puede estar vacio";
  }
}

  if (isset($datos["repassword"])){
    $repassword = trim($datos["repassword"]);
    if ($password != $repassword) {
      $errores["repassword"]="Las contraseñas no coinciden";
    }
  }
  if(isset($_FILES)){
    if($_FILES["avatar"]["error"]!=0){
      $errores["avatar"]="No subió ninguna imagen";
    } else {
    $avatar = $_FILES["avatar"]["name"];
    $ext = pathinfo($avatar, PATHINFO_EXTENSION);
    if($ext!="jpg" && $ext!="png" && $ext!="jpeg"){
      $errores["avatar"] = "La extensión de la imagen debe ser JPG, JPEG o PNG";
    } else {
      move_uploaded_file($_FILES["avatar"]["tmp_name"], "archivos/" . uniqid('foto_') . "." . $ext);
    }
    }
  }
}
  return $errores;
}


function armarAvatar($imagen){
  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre, PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino."/archivos/";
  $avatar = uniqid();
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen,$archivoDestino);
  $avatar = $avatar.".".$ext;
  return $avatar;
}

function armarUsuario($datos, $avatar){
  $usuario = [
    "nombre"=>$datos["nombre"],
    "email"=>$datos["email"],
    "password"=>password_hash($datos["password"],PASSWORD_DEFAULT),
    "avatar"=>$avatar,
    "perfil"=>1
  ];
  return $usuario;
}

function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuario.json",$json.PHP_EOL,FILE_APPEND);
}

function abrirBaseDatos(){
  if (file_exists("usuario.json")) {
    $baseDatosJson = file_get_contents("usuario.json");
    $baseDatosJson = explode(PHP_EOL, $baseDatosJson);
    array_pop($baseDatosJson);
    foreach ($baseDatosJson as $usuarios) {
      $arrayUsuarios[]=json_decode($usuarios, true);
    }
    return $arrayUsuarios;
  } else {
    return null;
  }
}

function buscarEmail($email){
  $usuarios = abrirBaseDatos();
  if ($usuarios!==null) {
    foreach ($usuarios as $usuario) {
    if ($email===$usuario["email"]) {
      return $usuario;
    }
  }
}
return null;
}

function sesionUsuario($persona, $info){
  $_SESSION["nombre"]=$persona["nombre"];
  $_SESSION["apellido"]=$persona["apellido"];
  $_SESSION["email"]=$persona["email"];
  $_SESSION["avatar"]=$persona["avatar"];
  if (isset($info["recordar"])) {
    setcookie("email",$info["email"], time()+60*60*24);
    setcookie("password",$info["password"], time()+60*60*24);
  }
}
function validarUsuario(){
    if($_SESSION["email"]){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else{
        return false;
    }
}
