<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HFSI</title>
  <!-- Favicon et icones apple touch -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/img/icons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/img/icons/apple-touch-icon-180x180.png" />
  <!-- meta -->
  <!-- For Robots -->
  <meta name="robots" content="noimageindex">
  <meta name="googlebot" content="noimageindex">
  <!-- Semantic property -->
  <meta property="og:language" content="fr">
  <meta property="og:locale" content="fr">
  <meta property="og:title" content="HFSI">
  <meta property="og:url" content="www.url.com">
  <meta property="og:description" content="description">
  <meta property="og:updated_time" content="time">
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/img/armoirie.png">
  <meta property="og:image:secure_url" content="<?= get_template_directory_uri() ?>/img/armoirie.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="80">
  <meta property="og:image:height" content="125">
  <meta property="business:contact_data:street_address" content="Rue Mohamed Fadhel Ben Achour">
  <meta property="business:contact_data:locality" content="Marsa">
  <meta property="business:contact_data:postal_code" content="1000">
  <meta property="business:contact_data:country_name" content="Tunisia">
  <meta property="place:location:latitude" content="36.8787259">
  <meta property="place:location:longitude" content="10.3247723">
  <!-- meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="keywords" content="keywords">
  <meta name="description" content="description">
  <meta name="author" content="Benfarhat Elyes">
  <meta name="geo.placename" content="Tunis, Tunisie">
  <meta name="geo.region" content="TN-11">
  <meta name="geo.position" content="36.8787259;10.3247723">
  <meta name="ICBM" content="36.8787259, 10.3247723">
  <link href="/feed" title="Fil d'actualitÃ©s RSS" type="application/rss+xml" rel="alternate">

  <?php wp_head(); ?>
  <!-- script -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body <?php body_class(); ?>>
  <!-- Title and connexion menu -->
  <nav id="menu-top" class="navbar navbar-expand-md navbar-light bg-light p-0">
    <div class="container">
        <a class="navbar-brand position-relative animated bounceInLeft" href="#"><img class="position-relative" src="<?= get_template_directory_uri() ?>/img/40px-Flag_of_Tunisia.png" height="16px" alt=""> <span class="text-success"><?php bloginfo( 'name' ); ?></span> of our Website</a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
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
  <section id="header-top">
    <div id="particles-js" class="overlay position-absolute"></div>
    <div class="container position-relative d-flex flex-column">
      <div class="overlay rgba4 animated bounceInRight">
        <div class="row py-5">
          <div class="col-md-3 offset-md-1 text-center title">
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
  </section>
  <!-- /Header -->
  <!-- Logo and Primary menu -->
  <nav id="menu" class="navbar navbar-expand-md navbar-dark bg-success sticky-top">
    <div class="container animated bounceInLeft">
      <!-- Left side -->
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
  <footer>
  <!-- footer - top -->
  <div id="footer-top" class="section py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="contact">
                  <address>
                    <strong>Smart , Inc.</strong><br>
                    14 Hached St<br>
                    Tunis, TN1000<br>
                    <abbr title="Phone">P:</abbr> (216) 71-000-000
                  </address>

                  <address>
                    <strong>Full Name</strong><br>
                    <a href="mailto:#">contact.us@example.com</a>
                  </address>
                </div>
          </div>
          <div class="col-md-4">


              <ul>
                  <li>Lorem ipsum dolor sit amet</li>
                  <li>Consectetur adipiscing elit</li>
                  <li>Integer molestie lorem at massa</li>
                  <li>Facilisis in pretium nisl aliquet</li>
                  <li>Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                      <li>Ac tristique libero volutpat at</li>
                    </ul>
                  </li>
              </ul>

          </div>
          <div class="col-md-4">

              <ul class="list-unstyled">
                  <li><i class="fa fa-home"></i> Lorem ipsum dolor sit amet</li>
                  <li><i class="fa fa-user"></i> Consectetur adipiscing elit</li>
                  <li><i class="fa fa-facebook"></i> Integer molestie lorem at massa</li>
                  <li><i class="fa fa-twitter"></i> Facilisis in pretium nisl aliquet</li>
                  <li><i class="fa fa-instagram"></i> Lorem ipsum dolor sit amet</li>
                  <li><i class="fa fa-youtube"></i> Consectetur adipiscing elit</li>
                  <li><i class="fa fa-vin"></i> Integer molestie lorem at massa</li>
                  <li><i class="fa fa-cog"></i> Facilisis in pretium nisl aliquet</li>
              </ul>

          </div>
        </div>
      </div>
    </div>
  <!-- /footer - top -->
  <!-- footer - bottom -->
  <section id="footer-bottom" class="bg-dark mt-2">
      <nav class="nav navbar-dark justify-content-center py-5">
          <a class="nav-link active" href="#">L'hopital</a>
          <a class="nav-link" href="#">Nos services</a>
          <a class="nav-link" href="#">contact</a>
          <a class="nav-link" href="#">Let's work together</a>
          <a class="nav-link" href="#">Location</a>
          <a class="nav-link" href="#">Download</a>
          <a class="nav-link" href="#">Licence</a>
          <a class="nav-link" href="#home"><i class="fa fa-chevron-up"></i></a>
        </nav>
  </section>
  <!-- /footer - bottom -->
  </footer>
  <?php wp_footer(); ?>
  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script>
	particlesJS('particles-js',

	  {
		"particles": {
		  "number": {
			"value": 80,
			"density": {
			  "enable": true,
			  "value_area": 800
			}
		  },
		  "color": {
			"value": "#ffffff"
		  },
		  "shape": {
			"type": "circle",
			"stroke": {
			  "width": 0,
			  "color": "#000000"
			},
			"polygon": {
			  "nb_sides": 5
			}
		  },
		  "opacity": {
			"value": 0.5,
			"random": false,
			"anim": {
			  "enable": false,
			  "speed": 1,
			  "opacity_min": 0.1,
			  "sync": false
			}
		  },
		  "size": {
			"value": 5,
			"random": true,
			"anim": {
			  "enable": false,
			  "speed": 40,
			  "size_min": 0.1,
			  "sync": false
			}
		  },
		  "line_linked": {
			"enable": true,
			"distance": 150,
			"color": "#ffffff",
			"opacity": 0.4,
			"width": 1
		  },
		  "move": {
			"enable": true,
			"speed": 6,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"attract": {
			  "enable": false,
			  "rotateX": 600,
			  "rotateY": 1200
			}
		  }
		},
		"interactivity": {
		  "detect_on": "canvas",
		  "events": {
			"onhover": {
			  "enable": true,
			  "mode": "grab"
			},
			"onclick": {
			  "enable": true,
			  "mode": "push"
			},
			"resize": true
		  },
		  "modes": {
			"grab": {
			  "distance": 400,
			  "line_linked": {
				"opacity": 1
			  }
			},
			"bubble": {
			  "distance": 400,
			  "size": 40,
			  "duration": 2,
			  "opacity": 8,
			  "speed": 3
			},
			"repulse": {
			  "distance": 200
			},
			"push": {
			  "particles_nb": 4
			},
			"remove": {
			  "particles_nb": 2
			}
		  }
		},
		"retina_detect": true,
		"config_demo": {
		  "hide_card": false,
		  "background_color": "#22A7F0",
		  "background_image": "",
		  "background_position": "50% 50%",
		  "background_repeat": "no-repeat",
		  "background_size": "cover"
		}
	  }

	);</script>

</body>

</html>
