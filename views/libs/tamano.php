<?php
$title = "SMARTRANS | COTIZADOR";
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

<section class="cotizador-check"></section>

<section class="cotizador-check2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="title-smtcot text-center">¡HAZ COMENZADO!</h1>
        <h2 class="subtitle-smtcot text-center">SIGUE LOS PASOS</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-11 col-cot">
        <div class="row justify-content-between">
          <div class="col-md-4">
            <h2 class="title-cot">Cotizador</h2>
            <p>
              <small>Seleccione el <strong>Tamaño </strong>
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
        <form action="<?php echo constant('URL'); ?>home/carga" method="post">
          <div class="row mt-3">
            <div class="col-md-8 cont-car">

              <div class="row">
                <div class="col-md-4 my-3">
                  <img src="<?php echo constant('URL'); ?>public/img/flota/<?php echo $_SESSION['vehiculo']['img']; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 my-auto">
                  <h3><span class="dblue"> <?php echo $_SESSION['vehiculo']['name']; ?>:</span> <span class="detalles-cot"></span></h3>
                  <select class="form-select select-flota form-select-sm" id="select-flota" aria-label="Default select example" name="tamano">
                    <option selected disabled>Tamaño del Vehiculo</option>

                    <?php foreach ($this->tamanos['valores'] as $val) : ?>
                      <option value="<?php echo $val['caracteristicasValoresId']; ?>"> <?php echo $val['valor']; ?></option>
                    <?php endforeach; ?>
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

</section>



<?php
include_once "views/home/footer.php";
?>