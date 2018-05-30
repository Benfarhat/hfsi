<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hfsi
 */

get_header();
?>
<?php
if ( get_theme_mod('enable_category_carousel') ):
// Add comment to html
echo "  <!-- Slideshow -->";

$args = array(
  'category_name' => get_theme_mod('category_carousel'),
  'posts_per_page' => get_theme_mod('num_category_carousel', 5)
);
$the_query = new WP_Query( $args );
?>

  <div id="slideshow-section">
      <div class="container my-5">
          <div class="row">
            <h2 class="titre animated bounceInRight title_carousel"><?= get_theme_mod('title_carousel') ?></h2>
          </div>
          <div class="row">

              <div id="carousel" class="carousel slide position-relative animated bounceInLeft" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators d-flex flex-column">
                <?php
                for ($i = 0; $i < $the_query->post_count; $i++) {
                    echo '<li data-target="#carousel" data-slide-to="'.$i.'"';
                    if($i == 0) echo ' class="active"';
                    echo '></li>';
                }
                ?>
              </ol>
              <div class="carousel-inner" role="listbox">
                <?php
                $i=0;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $link = get_permalink();
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                ?>
                <div class="carousel-item<?php if($i==0) echo " active"; $i++;?>">
                <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  $image_url = get_the_post_thumbnail_url();
                } else {
                  $image_url = get_template_directory_uri() . '/img/laboratoire2.jpg';
                }
                ?>
                  <img src="<?= $image_url ?>" alt="<?= $title ?>">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h3 class="bd-title"><?= $title ?></h3>

                    <p><?= $excerpt ?></p>
                    <a href="<?= $link ?>" class="btn btn-outline-success text-uppercase align-items-end"><i class="fa fa-long-arrow-right"></i> Lire la suite</a>
                  </div>
                </div>
                <?php
                endwhile;
                ?>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
  </div>

  <?php
  echo "<!-- /Slideshow -->";
  // Reset data
  wp_reset_postdata();
  endif;
  ?>


  <!-- Horaire et rendez vous -->
  <section id="horaire-rdv">
    <div class="container mt-3">
      <div class="row">
        <!-- Horaire -->
        <div id="horaire" class="col-md-6">
            <div class="row">
              <h2 class="titre animated slideInLeft">Vos résultats de laboratoire</h2>
            </div>
            <div class="row mt-3 animated slideInLeft">
              <div class="col-sm-12">
                <div class="card bg-light">
                  <div class="card-body">

                      <form>
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="inputEmail4">Numéro des analyses</label>
                              <input type="email" class="form-control" id="numanalyse" placeholder="Numéro des analyses">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Matricule</label>
                              <input type="password" class="form-control" id="identifiant" placeholder="Votre identifiant">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Date des analyses</label>
                              <input type="password" class="form-control" id="identifiant" placeholder="Cliquer pour afficher le calendrier">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success">Consulter</button>
                        </form>

                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
                <h2 class="titre animated slideInLeft">Infos</h2>
              </div>
            <div class="row mt-3 animated slideInLeft">
                <div class="col-sm-6">
                  <div class="card bg-success">
                    <div class="card-body">
                      <h5 class="card-title text-white">Urgences</h5>
                      <div class="text-center text-white">
                        <h3 class="card-text">24heures/24</h3>
                        <h3 class="card-text">7jours/7</h3>
                      </div>
                      <a href="#" class="mt-2 btn btn-outline-light">Lire ...</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Horaires de travail</h5>
                      <table class="table table-hover table-sm">
                          <thead>
                            <tr>
                              <th scope="col">Jour</th>
                              <th scope="col">De</th>
                              <th scope="col">à</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Lundi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Mardi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Mercredi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Jeudi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Vendredi</th>
                              <td>07:00</td>
                              <td>13:00</td>
                            </tr>
                            <tr>
                              <th scope="row">Samedi</th>
                              <td>08:00</td>
                              <td>14:00</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <!-- Rendez vous -->
        <div id="rdv" class="col-md-6">
          <div class="row">
            <h2 class="titre animated slideInRight">Rendez-vous en ligne</h2>
          </div>
          <div class="card-body animated slideInRight">

              <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Matricule</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Votre identifiant">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Services</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choisissez un service...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Localisation</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Rue / Localité / Gouvernorat">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Date souhaitée</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Cliquez pour afficher le calendrier">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success">Sign in</button>
                </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Horaire et rendez vous -->

  <!-- Content -->
  <section id="content-loop" class="py-5">
    <div class="container p-0">

        <div class="row">
            <h2 class="titre animated slideInRight">Nos services</h2>
          </div>

        <div class="row mt-3 animated slideInLeft">
            <div class="col-sm-4">
              <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title">Neurologie</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-secondary">
                <div class="card-body">
                  <h5 class="card-title">Cardiologie</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-info">
                <div class="card-body">
                  <h5 class="card-title">Chirugie</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-outline-light">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        <div class="row mt-3 animated slideInRight">
            <div class="col-sm-4">
              <div class="card bg-light">
                <div class="card-body">
                  <h5 class="card-title">Hopital du jour</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-info">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-light">
                <div class="card-body">
                  <h5 class="card-title">Nutrition</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-secondary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-light">
                <div class="card-body">
                  <h5 class="card-title">Laboratoire</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-info">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
    </div>
  </section>
  <!-- /Content -->
  <!-- Code du patient -->
  <section id="code-patient" class="color-white text-center position-relative my-5 py-5">
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
<?php
get_footer();
