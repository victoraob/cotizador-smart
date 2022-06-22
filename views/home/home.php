<?php
$title = "SMARTRANS | INICIO";
include_once "views/home/header.php";
?>




<!-- NAVBAR -->
<div class="bg-nav-smtserv">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand mx-4" href="<?php echo constant('URL'); ?>">
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







<!-- PUBLIC -->
<div class="section-gradient-smt">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="title-smtcot text-center">¡HAZ LA PRUEBA!</h1>
        <h2 class="subtitle-smtcot text-center">COTIZA TU PRÓXIMO ENVIO</h2>
      </div>
    </div>





    <div class="row justify-content-center">
      <div class="col-md-11 col-cot">

        <div class="row justify-content-between">
          <div class="col-md-4">
            <h2 class="title-cot">Cotizador</h2>
            <p>
              <small>Seleccione el Vehículo para realizar el transporte
              </small>
            </p>
          </div>
          <div class="col-md-7">
            <nav class="nav text-center">
              <a class="item-nav-cot-a nav-link active" aria-current="page" href="#">Vehiculos</a>
              <a class="item-nav-cot nav-link disabled" href="#">Horarios</a>
              <a class="item-nav-cot nav-link disabled" href="#">Ruta</a>
              <a class="item-nav-cot nav-link disabled">Confirmar</a>
            </nav>
          </div>
        </div>

        <form action="<?php echo constant('URL'); ?>home/temperatura" method="post">
          <div class="row mt-3">
            <div class="col-md-8 cont-car">

              <div class="row">
                <div class="col-md-4">
                  <img id="laImagen" src="<?php echo constant('URL'); ?>public/img/flota/1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 my-auto">
                  <select class="form-select select-flota" id="elSelect" name="camionCot">
                    <option selected value="1">PICKUP</option>
                    <option value="2">CAMION</option>
                    <option value="3">MULA</option>
                    <option value="4">PANEL</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-auto">
              <h3 class="text-center">Siguiente <button type="submit" class="btn btn-sigui-cot"><i class="fas fa-arrow-right"></i></button></h3>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script>
    elSelect.addEventListener("change", () => {
      laImagen.setAttribute("src", "<?php echo constant('URL'); ?>public/img/flota/" + elSelect.selectedOptions[0].value + ".png")
    })
  </script>
</div>


<br><br>
<!-- COTIZADOR -->








<?php include_once "views/home/footer.php"; ?>