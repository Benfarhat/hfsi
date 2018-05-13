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

<body <?php body_class(); ?>>
  <a class="skip-link screen-reader-text btn btn-warning d-none d-sm-block d-md-none" href="#content"><?php esc_html_e( 'Aller au contenu', 'hfsi' ); ?></a>
  <!-- Title and connexion menu -->
  <nav id="menu-top" class="navbar navbar-expand-md navbar-light bg-light p-0">
    <div class="container">
        <a class="navbar-brand position-relative animated bounceInLeft" href="<?= home_url('/')?>"><img class="position-relative" src="<?= get_template_directory_uri() ?>/img/40px-Flag_of_Tunisia.png" height="16px" alt=""> <span class="text-success"><?php bloginfo('name'); ?></span> <?php bloginfo('description'); ?></a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0" role="navigation">
              <li class="nav-item">
                  <a class="nav-link facebook" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link twitter" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link youtube" href="#"><i class="fa fa-youtube"></i></a>
              </li>
              <li class="nav-item dropdown text-white bg-success">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in"></i> Connexion</a>
                  <div class="dropdown-menu dropdown-menu-right animeated flipInY" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="#"><i class="fa fa-user-md" aria-hidden="true"></i> Staff médical</a>
                      <a class="dropdown-item" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Patients</a>
                  </div>
              </li>
          </ul>
      </div>
    </div>

  </nav>
  <!-- /Title and connexion menu -->
  <!-- Header -->
  <header id="header-top">
    <div id="particles-js" class="overlay position-absolute"></div>
    <div class="container position-relative d-flex flex-column">
      <div class="overlay rgba4 animated bounceInRight">
        <div class="row py-5">
          <div class="col-md-3 offset-md-1 text-center title" role="banner">
            <img src="<?= get_template_directory_uri() ?>/img/logo/3/logo128.png" alt="">
            <h2 class="text-whiete">HOPITAL FSI</h2>
            <h3 class="text-wheite">La Marsa</h3>
          </div>
          <div class="col-md-8">
            <nav class="nav ml-auto justify-content-end">
              <a class="nav-link active" href="#"><i class="fa fa-shield"></i> Famille et proches</a>
              <a class="nav-link" href="#"><i class="fa fa-user-md"></i> Staff médical</a>
              <a class="nav-link" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> E-learning</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /Header -->
  <!-- Logo and Primary menu -->
  <nav id="menu" class="navbar navbar-expand-md navbar-dark bg-success sticky-top">
    <div class="container animated bounceInLeft" role="navigation">
      <!-- Left side -->
<?php

$defaults = array(
	'theme_location'  => 'menu-primary-left',
	'menu'            => 'menu-primary-left',
	'container'       => 'ul',
	'container_class' => 'nav mr-auto justify-content-start',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav mr-auto justify-content-start %2$s">%3$s</ul>',
	'depth'           => 3,
	'walker'          => new hfsi_walker_nav_menu()
);

wp_nav_menu( $defaults );
// new hfsi_walker_nav_menu()
?>
<!--
      <ul class="nav mr-auto justify-content-start">
          <li class="nav-item">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Organisation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Attributions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Opendata</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu  animated fadeIn">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu  animated fadeIn">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
      </ul>
      -->
      <!-- Right side -->
      <ul class="nav mr-auto justify-content-end flex-1">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
            <div class="dropdown-menu dropdown-menu-right animated fadeIn">
              <a class="dropdown-item" href="#">Contact</a>
              <a class="dropdown-item" href="#">Localisation</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Suggestions</a>
              <a class="dropdown-item" href="#">Reclamations</a>
            </div>
          </li>
      </ul>

    </div>

  </nav>
  <!-- /Logo and Primary menu -->
  <!-- Slideshow -->
  <div id="slideshow-section">
      <div class="container my-5">
          <div class="row">
            <h2 class="titre animated bounceInRight">Espace étudiants</h2>
          </div>
          <div class="row">

              <div id="carousel" class="carousel slide position-relative animated bounceInLeft" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators d-flex flex-column">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="<?= get_template_directory_uri() ?>/img/laboratoire2.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h3 class="bd-title">Evènements</h3>

                    <h3>Lorem, ipsum dolor.</h3>
                    <small>Category 1</small>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quia quas ullam illo assumenda quis vero soluta accusamus? Labore, soluta!</p>
                    <a href="#" class="btn btn-outline-success text-uppercase align-items-end"><i class="fa fa-long-arrow-right"></i> Lire la suite</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?= get_template_directory_uri() ?>/img/instrument2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block text-dark">
                      <h3 class="bd-title">Another title</h3>

                      <h3>Lorem, ipsum dolor.</h3>
                      <small>Category 2</small>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quia quas ullam illo assumenda quis vero soluta accusamus? Labore, soluta!</p>
                      <a href="#" class="btn btn-outline-success text-uppercase align-items-end"><i class="fa fa-long-arrow-right"></i> Lire la suite</a>

                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?= get_template_directory_uri() ?>/img/dentist.jpg" alt="">
                  <div class="carousel-caption d-none d-md-block text-dark">
                      <h3 class="bd-title">Last title</h3>

                      <h3>Lorem, ipsum dolor.</h3>
                      <small>Category 3</small>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quia quas ullam illo assumenda quis vero soluta accusamus? Labore, soluta!</p>
                      <a href="#" class="btn btn-outline-success text-uppercase align-items-end"><i class="fa fa-long-arrow-right"></i> Lire la suite</a>

                  </div>
                </div>
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
  <!-- /Slideshow -->

  <!-- Horaire et rendez vous -->
  <section id="horaire-rdv">
    <div class="container">
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
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Numéro des analyses</label>
                              <input type="email" class="form-control" id="numanalyse" placeholder="Numéro des analyses">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Identifiant</label>
                              <input type="password" class="form-control" id="identifiant" placeholder="Votre identifiant">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success">Sign in</button>
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
                      <a href="#" class="mt-2 btn btn-outline-light">Go somewhere</a>
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
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
