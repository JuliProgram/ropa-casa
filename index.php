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
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
    <div class="row py-3">
            <div class="row d-flex align-items-center">
              <div class="col-4">
                <i class="px-2 icon fa-solid fa-location-dot"></i>
                <a href="">Puntos de encuentro</a>
              </div>
              <div class="col-4 text-center">
                <h1 class="logo" >Mi tienda</h1>
              </div>  
              <div class="col-4">
                <div class="row">
                    <div class="col-1 icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="col-6">
                    <form action="">
                        <input class="search-buttom" type="text" placeholder="Buscar">
                    </form>
                        </div>
                    <div class="col-5 text-end">
                        <i class="px-2 fa-solid fa-user"></i>
                        <i class="px-2 fa-solid fa-heart"></i>
                        <i class="px-2 fa-solid fa-cart-shopping"></i>
                    </div>
                    </div>
                </div>    
              </div>
            </div>
            <div class="opciones py-3">
                    <div class="row text-center">
                        <div class="col-2">
                            <a href="">Invierno</a>
                        </div>
                        <div class="col-2">
                            <a href="">Zapatos</a>
                        </div>
                        <div class="col-2">
                            <a href="">Remeras</a>
                        </div>
                        <div class="col-2">
                            <a href="">Pantalones</a>
                        </div>
                        <div class="col-2">
                            <a href="">Niños</a>
                        </div>
                        <div class="col-2">
                            <a href="">Accesorios</a>
                        </div>
                    </div>
                    </div>
        <?php include_once("menu.php");?>
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
            <img src="images/ropa main.png" alt="">
          </div>
        </div>
        <div class="row">
          
        </div>
    </main>
    <footer class="container mt-auto py-4">
      <div class="row">
         <div class="col-12 col-sm-3 pt-3">
          <a href="https://github.com/" target="_blank">
            <i class="fa-brands fa-facebook"></i>
          <a href="https://ar.linkedin.com/" target="_blank">
            <i class="fa-brands fa-instagram"></i></a>
         </div>
         <div class="col-12 col-sm-3 pt-3 link-blanco">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePc Suite</a>
         </div>
         <div class="col-12 col-sm-3 pt-3 link-blanco">
          <a href="mailto:torres_226@hotmail.com">torres_226@hotmail.com</a>
         </div>
         <a href="https://api.whatsapp.com/send?phone=+541126161384">
          <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
         </a>
      </div>
  </footer>       
</body>
</html>
</body>
</html>