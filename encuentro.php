<?php 
 $pg = "encuentros";


?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacto</title>
    <Link rel="shorcut icon" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="java/style.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="encuentro" class="d-flex flex-column h-100">
<header>
  <?php include_once("header.php") ?>
</header>
    <main class="container">
        <div class="row">
          <div class="col-12 py-5">
            <h1>Puntos de Encuentro</h1>
        </div>  
        </div>
        <div class="row locacion text-center">
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">ChangoMas! - El Talar</a>
            <p>Ruta 197 y Panamericana</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Estacion Tigre</a>
            <p>Tigre</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Rincon de Milberg</a>
            <p>Terminal de Colectivos 60</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Pregunte Otras Zonas</a>
            <p>Disponible solo en Zona Norte</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Rincon de Milberg</a>
            <p>Terminal de Colectivos 60</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Rincon de Milberg</a>
            <p>Terminal de Colectivos 60</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Rincon de Milberg</a>
            <p>Terminal de Colectivos 60</p>
            </div>
            <div class="col-6 py-3">
            <i class="px-2 icon fa-solid fa-location-dot"></i>
            <a href="">Rincon de Milberg</a>
            <p>Terminal de Colectivos 60</p>
            </div>
        </div>
    </main>
    <footer class=" bg-danger mt-auto py-1">
      <?php include_once("footer.php") ?>
  </footer>
</body>
</html>