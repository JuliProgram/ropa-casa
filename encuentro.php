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
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="encuentro" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php");?>
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

        </div>

    </main>
    
    <footer class="container mt-auto py-4">
      <div class="row">
      <div class="col-12 col-sm-4 pt-4 link-blanco text-center">
            <a href="https://depcsuite.com/?v=d72a48a8ebd2">
            <i class="fa-brands fa-facebook"></i>
          </a>
         </div>
         <div class="col-12 col-sm-4 pt-3 link-blanco text-center">
            <a href="https://depcsuite.com/?v=d72a48a8ebd2">
            <i class="fa-brands fa-instagram"></i>
          </a>
          
         </div>
         <div class="col-12 col-sm-4 pt-3 link-blanco text-center">
          <a href="mailto:torres_226@hotmail.com"></a>
          <a href="contactos.php">
            <i class="fa-solid fa-envelope"></i></a>
         </div>
         <a href="https://api.whatsapp.com/send?phone=+541126161384">
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
         </a>
      </div>
  </footer>
</body>
</html>