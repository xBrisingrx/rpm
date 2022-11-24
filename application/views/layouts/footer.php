<footer>
        <div class="g-color-gray-dark-v5 g-theme-bg-gray-dark-v3">
          <div class="container">

            <div class="text-center text-md-left g-brd-top g-brd-gray-dark-v2 g-py-40">
              <div class="row">
                <div class="col-md-6 d-flex align-items-center g-mb-15 g-mb-0--md">
                  <p class="w-100 mb-0">
                    &copy; <?php echo date('Y') ?> Todos los derechos reservado 
                    <a class="g-font-weight-600 g-color-white" href="#">Mauro Sampaoli soluciones informáticas</a>
                  </p>
                </div>

                <div class="col-md-6">
                  <ul class="list-inline float-md-right mb-0">
                    <li class="list-inline-item g-mr-10">
                      <a class="u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5" 
                        href="https://instagram.com/revolution.parts.motors"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item g-mr-10">
                      <a class="u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5" 
                        href="https://www.facebook.com/people/Concesionario-oficial-Cummins-RPM-SA/100087060410183/"
                        target="_blank">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="u-icon-v2 g-width-35 g-height-35 g-font-size-16 g-color-gray-light-v1 g-color-white--hover g-bg-primary--hover g-brd-gray-dark-v2 g-brd-primary--hover g-rounded-5" href="https://wa.me/1xxxxx"><i class="fa fa-whatsapp"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-migrate/jquery-migrate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper.js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.min.js')?>"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php echo base_url('assets/vendor/appear.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/slick-carousel/slick/slick.js')?>"></script>

    <!-- JS Unify -->
    <script src="<?php echo base_url('assets/js/hs.core.js')?>"></script>
    <script src="<?php echo base_url('assets/js/components/hs.header.js')?>"></script>
    <script src="<?php echo base_url('assets/js/helpers/hs.hamburgers.js')?>"></script>
    <script src="<?php echo base_url('assets/js/components/hs.scroll-nav.js')?>"></script>
    <script src="<?php echo base_url('assets/js/helpers/hs.height-calc.js')?>"></script>
    <script src="<?php echo base_url('assets/js/components/hs.carousel.js')?>"></script>
    <script src="<?php echo base_url('assets/js/components/hs.go-to.js')?>"></script>
    <script src="<?php echo base_url('assets/js/components/gmap/hs.map.js')?>"></script>

    <!-- JS Customization -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

    <!-- JS Plugins Init. -->
    <script>
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }
      $(document).on('ready', function () {
        // initialization of carousel
        $('#carousel5').on('click', '.js-thumb', function (e) {
          e.stopPropagation();
          var i = $(this).data('slick-index');

          if ($('#carousel5').slick('slickCurrentSlide') !== i) {
            $('#carousel5').slick('slickGoTo', i);
          }
        });

        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of header height offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
  </body>
</html>