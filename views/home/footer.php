<!-- FOOTER -->
<footer class="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
      </div>
    </div>
    <div class="row justify-content-center py-5">

      <div class="col-11 col-md-4">
        <p class="text-end textoinicial">
          <a class="" href="#">
            <img src="<?php echo constant('URL'); ?>public/img/logos/logo_smartrans.png" class="logo-nav-smt" alt="">
          </a>
        </p>
        <p class="text-end textoinicial">
          <span class="item-social-foot"><a href="https://m.facebook.com/smartrans/" class="color-dblue"><i class="fab fa-facebook-f"></i></a></span>

          <span class="item-social-foot"><a href="https://instagram.com/smartrans.pty?igshid=YmMyMTA2M2Y=" class="color-dblue"><i class="fab fa-instagram"></i></a></span>

          <span class="item-social-foot"><a href="https://www.linkedin.com/company/smartranspanama/" class="color-dblue"><i class="fab fa-linkedin"></i></a></span>

          <span class="item-social-foot"><a href="https://youtube.com/channel/UCmXQ0fRP6e07YRi0bJogPQw" class="color-dblue"><i class="fab fa-youtube"></i></a></span>
        </p>
      </div>


      <div class="col-11 col-md-8 my-auto">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-2 my-2">
                <a href="" class="link-foot">Home</a>
              </div>
              <div class="col-md-4">
                <a href="" class="link-foot">¿Qúe es Smartrans?</a>
              </div>
              <div class="col-md-2 my-2">
                <a href="" class="link-foot">Noticias</a>
              </div>
              <div class="col-md-2 my-2">
                <a href="" class="link-foot">Contacto</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 my-2">
                <a href="" class="link-foot">Flota</a>
              </div>
              <div class="col-md-4 my-2">
                <a href="" class="link-foot">Aumento de ingresos</a>
              </div>
              <div class="col-md-2 my-2">
                <a href="" class="link-foot">Servicios</a>
              </div>


            </div>

          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="foot-copy">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 my-auto">
          <h3 class="copy-text text-center textocentral">Todos los derechos reservados por &copy;Smartrans</h3>
        </div>
        <div class="col-10 col-md-6 my-auto">
          <h3 class="copy-text text-center textocentral">powered by <img src="<?php echo constant('URL'); ?>public/img/logos/logo_smartrans.png" class="card-img-tops" width="100px" alt="..."></h3>
        </div>
      </div>
    </div>
  </div>
</footer>





<script src="<?php echo constant('URL'); ?>public/swipe/swiper.min.js"></script>
<script src="<?php echo constant('URL'); ?>/public/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo constant('URL'); ?>/public/js/popper.js"></script>
<script src="<?php echo constant('URL'); ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo constant('URL'); ?>/public/js/app.js"></script>
<script src="<?php echo constant('URL'); ?>/public/js/sliders.js"></script>

<script>
  var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 5,
      stretch: 0,
      depth: 100,
      modifier: 5,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>
</body>

</html>