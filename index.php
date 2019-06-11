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
 <!-- Pongo el link a nav_bar.php -->
 <?php include("nav_bar.php") ?>

  <!-- Pongo div de Body de bootstrap -->
  <div class="container">
  <div class="card-body">

  <!-- Aca va el carrusel-->
  <section class="container">
      <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item imagen1 active">
          <!-- <img src="IMG\carrousel1.png" class="d-block w-100" alt="imagen1"> -->
        </div>
        <div class="carousel-item imagen2">
          <!-- <img src="IMG\carrousel2.png" class="d-block w-100" alt="imagen2"> -->
        </div>
        <div class="carousel-item imagen3">
          <!-- <img src="IMG\carrousel3.jpg" class="d-block w-100" alt="imagen3"> -->
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    </section>

  <!-- Aca van los productos-->
  <div class="card-deck mt-5">
    <div class="card">
      <img src="img/guardado1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - BAJA -</h5>
        <p class="card-text">
          Alto: 90cm <br>
          Ancho: 130cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/guardado2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - VAJILLERO -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 120cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/guardado3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - ALTA -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 60cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
  </div>

  <div class="card-deck mt-5">
    <div class="card">
      <img src="img/silla1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - BAJA -</h5>
        <p class="card-text">
          Alto: 90cm <br>
          Ancho: 130cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/silla2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - VAJILLERO -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 120cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/silla3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - ALTA -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 60cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
  </div>

  <div class="card-deck mt-5">
    <div class="card">
      <img src="img/mesadeluz1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - BAJA -</h5>
        <p class="card-text">
          Alto: 90cm <br>
          Ancho: 130cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/mesadeluz2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - VAJILLERO -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 120cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
    <div class="card">
      <img src="img/mesaluz3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LINEA EMILIA - ALTA -</h5>
        <p class="card-text">
          Alto: 185cm <br>
          Ancho: 60cm <br>
          Profundidad: 40cm <br>
          Madera: petiribi <br>
          Color: blanco laqueado <br></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">EN STOCK</small>
      </div>
    </div>
  </div>
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
