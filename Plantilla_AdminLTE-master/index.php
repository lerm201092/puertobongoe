<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Plantilla HTML LR</title>
  <!-- Styles -->
  <meta name="viewport" content="width=device-width, initial-scale=1"         />
  <link rel="stylesheet" href="./vendor/fontawesome/css/all.min.css"          />
  <link rel="stylesheet" href="./vendor/src/css/adminlte.min.css"             />
  <link rel="stylesheet" href="./vendor/src/css/fonts.css"                    />
  <link rel="stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.min.css" />
  <!-- Scripts -->
  <script src="./vendor/jquery/dist/jquery.min.js"></script>
  <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./vendor/popper.js/dist/popper.min.js"></script>
  <script src="./vendor/src/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Lienzo de la pagina -->
  <div class="wrapper">

    <!-- Navbar --> 
    <?php include "./vendor/src/include/navbar.php"; ?> 
    
    <!-- Menu -->
    <?php include "./vendor/src/include/menu.php"; ?>    

    <!-- Contenedor principal -->
    <div class="content-wrapper">

      <!-- Header del contenido -->
      <?php include "./vendor/src/include/content-header.php"; ?>

      <!-- Contenido de la pagina -->
      <section class="content">


      </section>
      <!-- /.Contenido de la pagina -->

    </div>
    <!-- /.Contenedor principal -->

      <!-- Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2018-2019 <a href="http://www.facebook.com/luisramos92">Mi Plantilla</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
    <!-- /.Footer -->    
  </div>
  <!-- /.Lienzo de la pagina -->


</body>
</html>
