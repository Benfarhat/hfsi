  <!-- Featured page -->
  <section id="code-patient" class="color-white text-center position-relative my-4 py-2">
      <div class="position-absolute overlay rgba2"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="icon icon-lg"><i class="fa fa-star"></i>
                  </div>
                  <h3 class="text-uppercase"><?= get_post_field('post_title', get_theme_mod('hfsi_en_avant_content') ) ?></h3>
                  <div id="featured_content">
                  <?= get_post_field('post_content', get_theme_mod('hfsi_en_avant_content') ) ?>
                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- /Featured page -->
  <?php
  /*
  <!-- Code du patient -->
  <section id="code-patient" class="color-white text-center position-relative my-5 py-2">
      <div class="position-absolute overlay rgba2"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="icon icon-lg"><i class="fa fa-heartbeat"></i>
                  </div>
                  <h3 class="text-uppercase">Code du patient</h3>
                  <p class="lead">Le patient qui effectue un séjour dans notre établissement bénéficie d'un certain nombre de droits garantis par une charte.</p>
                  <p class="text-center">
                      <a href="#" class="btn btn-success btn-lg">Consulter le code du patient</a>
                  </p>
              </div>

          </div>
      </div>
  </section>
  <!-- /Code du patient -->
  */ ?>
