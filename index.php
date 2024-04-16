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
        <div class="row fondo">
          <div class="col-6 text-center">
            <div class="row">
              <div class="12 py-2">
                <h1>Aproveche las ofertas de verano!</h1>
                <p class="text-main">Ahorra mucho con los descuentos que tenemos para vos!</p>
              </div>
            </div>
            <div class="row">
              <div class="12 py-2">
                <button class="btn btn-primary">Ver<a href=""></a></button>
              </div>
            </div>
          </div>
          <div class="col-6 text-center">
            <img class="img-main" src="images/ropa main.png" alt="">
          </div>
        </div>
    </main>
    <footer class=" bg-danger mt-auto py-1">
      <?php include_once("footer.php") ?>
  </footer>       
</body>
</html>
</body>
</html>