<?php 
 $pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="java/style.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
<header>
  <?php  include_once("header.php");?> 
</header>
    <main class="container">
      <div class="carrousell mt-5">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/invierno photoshoppng.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/inviernopho2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/hombre-invierno.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
      <div class="row">
        <div class="col-6">asdfkdsaf</div>
        <div class="col-6">asdfkdsaf</div>
      </div>
    </main>
    <footer class=" bg-danger mt-auto py-1">
      <?php include_once("footer.php") ?>
  </footer>       
</body>
</html>
</body>
</html>