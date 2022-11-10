    <?php $this->load->view('sections/banner') ?>
    <?php $this->load->view('sections/about') ?>
    <?php $this->load->view('sections/products') ?>
    <?php $this->load->view('sections/filters') ?>



    <?php $this->load->view('sections/clients') ?>


    <?php $this->load->view('sections/contact') ?>

        <!-- Google (Map) [custom] -->
        <div class="g-pos-rel g-height-400">
          <div id="gMap7" class="js-g-map g-pos-abs w-100 h-100"
               data-type="custom"
               data-lat="40.674"
               data-lng="-73.946"
               data-zoom="12"
               data-title="Architecture"
               data-styles='[
                 ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                 ["", "labels", [{"visibility":"on"}]],
                 ["road.highway", "", [{"color":"#cc0033"}]],
                 ["water", "", [{"color":"#f7f4f4"}]]
               ]'
               data-pin="true"
               data-pin-icon="assets/img/pin.png"></div>
        </div>
        <!-- End Google (Map) [custom] -->