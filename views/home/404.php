<?php
$title = "SMARTRANS | 404";
include_once "views/home/header.php";
?>



<!-- NAVBAR -->
<div class="bg-nav-smtserv">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand mx-4" href="#">
        <img src="<?php echo constant('URL'); ?>public/img/logos/logo_smartrans.png" class="logo-nav-smt" alt="">
      </a>


      <div class="justify-content-end" id="navbarSupportedContent">
        <ul class="nav justify-content-end">

          <li class="nav-item my-auto mx-2">
            <a class="nav-link item-available" href="#">Disponible en iOS y Android</a>
          </li>
          <li class="nav-item my-auto mx-2">
            <a class="nav-link btn btn-down-smt" href="#">DOWNLOAD</a>
          </li>
          <li class="nav-item my-auto mx-2">
            <a class="nav-link bar-smt" id="open-close"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</div>

<script src="<?php echo constant('URL'); ?>public/counter/jqueryajax.min.js"></script>
<script>
  jQuery(document).ready(function($) {
    $(".counter").counterUp({
      delay: 10,
      time: 1000,
    });
  });
</script>

<!-- MENU TOGGLE -->
<?php include_once "views/home/aside.php"; ?>

<div class="container" style="margin-top: 7%; margin-bottom:7%;">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center title-smt"><span class="color-dblue"><i class="fas fa-exclamation-circle"></i></span></h2>
      <h1 class="title-smt text-center"><span class="color-dblue">ERROR | <span class="counter">404</span></span></h1>
      <h5 class="subtitle-smt text-center"><span class="color-dblue">Pagina no disponible</span></h5>
      <p class="text-center">
        <a href="<?php echo constant('URL'); ?>" style="text-decoration:none;"><span class="color-aqua"><i class="fas fa-undo"></i> volver al inicio</span></a>
      </p>
    </div>
  </div>
</div>

<script src="<?php echo constant('URL'); ?>public/counter/waypoints.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/counter/jquery.counterup.min.js"></script>

<?php
include_once "views/home/footer.php";
?>