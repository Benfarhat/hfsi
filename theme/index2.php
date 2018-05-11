<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- title -->
    <title>Hôpital F.S.I.</title>
	<!-- meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For Robots -->
    <meta name="robots" content="noimageindex">
    <meta name="googlebot" content="noimageindex">
	<!-- Semantic property -->
	<meta property="og:language" content="fr">
	<meta property="og:locale" content="fr">
	<meta property="og:title" content="HFSI">
	<meta property="og:url" content="hopital.interieur.gov.tn/">
	<meta property="og:description" content="HFSI">
	<meta property="og:updated_time" content="2018-05-09T13:28:51-04:00">
	<meta property="og:image" content="/img/armoirie.png">
	<meta property="og:image:secure_url" content="/img/armoirie.png">
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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="Ministère, Tunisie, Hopital, Hôpital, Médical, patients, e-learning, formation, rdv">
	<meta name="description" content="HFSI">
	<meta name="author" content="Benfarhat Elyes">
	<meta name="geo.placename" content="Tunis, Tunisie">
	<meta name="geo.region" content="TN-11">
	<meta name="geo.position" content="36.8787259;10.3247723">
	<meta name="ICBM" content="36.8787259, 10.3247723">
	<link href="/feed" title="Fil d'actualités RSS" type="application/rss+xml" rel="alternate">
	<!-- scripts -->

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap et Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Possibilité d'intégrer la version Bootstrap accessibility de Paypal
	Bootstrap Accessibility Plugin, v1.0
	https://github.com/paypal/bootstrap-accessibility-plugin
	-->
    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon et icones apple touch -->
	<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon-180x180.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 institution">
                            <p class="hidden-sm hidden-xs text-uppercase"><i class="fa fa-institution"></i> <?php bloginfo( 'name' ); ?></p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external youtube" data-animate-hover="pulse"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="external flickr" data-animate-hover="pulse"><i class="fa fa-flickr"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal" rel="nofollow" ><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Connexion</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<span class="site-title"><img src="img/logo/3/logo24.png"/> <span class="text-primary">Hôpital</span> F.S.I. </span><span class="sr-only">Accueil</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Menu</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="#"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-institution"></i> L'hôpital <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
														<center>
															<img src="img/logo/2/logo512.png" class="img-responsive hidden-xs" alt="">
														</center>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Présentation</h5>
                                                        <ul>
                                                            <li><a href="#">Présentations & chiffres clés</a>
                                                            </li>
                                                            <li><a href="#">Organisations</a>
                                                            </li>
                                                            <li><a href="#">Attributions</a>
                                                            </li>
                                                            <li><a href="#">Historique</a>
                                                            </li>
                                                        </ul>

                                                        <h5>Famille et proches</h5>
                                                        <ul>
                                                            <li><a href="#">Rendre visite à un patient</a>
                                                            </li>
                                                            <li><a href="#">Cartographie de l'hôpital</a>
                                                            </li>
                                                            <li><a href="#">Foire aux questions</a>
                                                            </li>
                                                        </ul>

                                                        <h5>Infos administratives et financières</h5>
                                                        <ul>
                                                            <li><a href="#">Appels d'offre</a>
                                                            </li>
                                                            <li><a href="#">Recrutement</a>
                                                            </li>
                                                            <li><a href="#">Demande de stage</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Pôle médecine</h5>
                                                        <ul>
                                                            <li><a href="#">Médecine générale</a>
                                                            </li>
                                                            <li><a href="#">Cardiologie</a>
                                                            </li>
                                                            <li><a href="#">Nephralgie</a>
                                                            </li>
                                                            <li><a href="#">Oncologie</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Pôle Chirurgie</h5>
                                                        <ul>
                                                            <li><a href="#">Médecine générale</a>
                                                            </li>
                                                            <li><a href="#">Cardiologie</a>
                                                            </li>
                                                            <li><a href="#">Nephralgie</a>
                                                            </li>
                                                            <li><a href="#">Oncologie</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Pôle Spécialité</h5>
                                                        <ul>
                                                            <li><a href="#">Médecine générale</a>
                                                            </li>
                                                            <li><a href="#">Cardiologie</a>
                                                            </li>
                                                            <li><a href="#">Nephralgie</a>
                                                            </li>
                                                            <li><a href="#">Oncologie</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Pôle Psychologie</h5>
                                                        <ul>
                                                            <li><a href="#">Médecine générale</a>
                                                            </li>
                                                            <li><a href="#">Cardiologie</a>
                                                            </li>
                                                            <li><a href="#">Nephralgie</a>
                                                            </li>
                                                            <li><a href="#">Oncologie</a>
                                                            </li>
                                                        </ul>

                                                        <h5>Pôle Médico-technique</h5>
                                                        <ul>
                                                            <li><a href="#">Imagerie médicale</a>
                                                            </li>
                                                            <li><a href="#">Laboratoire</a>
                                                            </li>
                                                            <li><a href="#">Nephralgie</a>
                                                            </li>
                                                            <li><a href="#">Oncologie</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Espace Patients<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <img src="img/espace-patients.jpg" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h5><i class="fa fa-unlock"></i> Informations utiles</h5>
                                                        <ul>
                                                            <li><a href="#">Votre arrivé</a>
                                                            </li>
                                                            <li><a href="#">Votre séjour</a>
                                                            </li>
                                                            <li><a href="#">Démarches à faire pour votre sortie</a>
                                                            </li>
                                                            <li><a href="#">Code de la santé publique</a>
                                                            </li>
                                                            <li><a href="#">Code du patient</a>
                                                            </li>
                                                            <li><a href="#">Documents utiles</a></li>
                                                            <li><a href="#">Demandez un accès en ligne</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h5><i class="fa fa-lock"></i> Services en ligne</h5>
                                                        <ul>
                                                            <li><a href="#">Rechercher un médecin</a>
                                                            </li>
                                                            <li><a href="#">Rechercher une consultation</a>
                                                            </li>
                                                            <li><a href="#">Faire une demande de rendez vous</a>
                                                            </li>
                                                            <li><a href="#">Gérer vos rendez vous</a>
                                                            </li>
                                                            <li><a href="#">Consulter vos résultats d'examen</a>
                                                            </li>
                                                            <li><a href="#">Votre dossier médical</a>
                                                            </li>
                                                            <li><a href="#">Déposer une suggestion</a>
                                                            </li>
                                                            <li><a href="#">Faire une réclamation</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-md"></i> Staff Médical <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <img src="img/staff02.jpg" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <h5><i class="fa fa-unlock"></i> Infos utiles</h5>
                                                        <ul>
                                                            <li><a href="#">Conseils</a>
                                                            </li>
                                                            <li><a href="#">Alertes</a>
                                                            </li>
                                                        </ul>
                                                        <h5><i class="fa fa-lock"></i> Mes Activités</h5>
                                                        <ul>
                                                            <li><a href="#">Mon agenda</a>
                                                            </li>
                                                            <li><a href="#">Mes participations aux évènements</a>
                                                            </li>
                                                            <li><a href="#">Encadrements</a>
                                                            </li>
                                                            <li><a href="#">Mes articles</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h5><i class="fa fa-lock"></i> Activités en lignes</h5>
                                                        <ul>
                                                            <li><a href="#">Consulter un dossier</a>
                                                            </li>
                                                            <li><a href="#">Consulter un résultats d'analyse</a>
                                                            </li>
                                                            <li><a href="#">Mes rendez vous</a>
                                                            </li>
                                                            <li><a href="#">Annuaire F.S.I.</a>
                                                            </li>
                                                            <li><a href="#">Gérer mon accès</a>
                                                            </li>
                                                            <li><a href="#">Collaborations</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><i class="fa fa-graduation-cap"></i> E-learning <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Matière 1</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                            <li><a href="#">Module 5</a></li>
                                                        </ul>
                                                        <h5>Matière 2</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                        </ul>
                                                        <h5>Matière 3</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Matière 4</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                            <li><a href="#">Module 5</a></li>
                                                            <li><a href="#">Module 6</a></li>
                                                            <li><a href="#">Module 7</a></li>
                                                            <li><a href="#">Module 8</a></li>
                                                        </ul>
                                                        <h5>Matière 5</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                            <li><a href="#">Module 5</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Matière 6</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                        </ul>
                                                        <h5>Matière 7</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                            <li><a href="#">Module 4</a></li>
                                                            <li><a href="#">Module 5</a></li>
                                                        </ul>
                                                        <h5>Matière 8</h5>
                                                        <ul>
                                                            <li><a href="#">Module 1</a></li>
                                                            <li><a href="#">Module 2</a></li>
                                                            <li><a href="#">Module 3</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Autres tutos en ligne</h5>
                                                        <ul>
                                                            <li><a href="#">Site 1</a></li>
                                                            <li><a href="#">Site 2</a></li>
                                                            <li><a href="#">Site 3</a></li>
                                                            <li><a href="#">Site 4</a></li>
                                                            <li><a href="#">Site 5</a></li>
                                                            <li><a href="#">Site 6</a></li>
                                                            <li><a href="#">Site 7</a></li>
                                                            <li><a href="#">Site 8</a></li>
                                                        </ul>
                                                        <h5>Vidéos tutos en ligne</h5>
                                                        <ul>
                                                            <li><a href="#">Site 1</a></li>
                                                            <li><a href="#">Site 2</a></li>
                                                            <li><a href="#">Site 3</a></li>
                                                            <li><a href="#">Site 4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-address-book-o"></i> Contact <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="fa fa-phone"></i> Contact</a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i> Localisation</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> Suggestions</a></li>
                                        <li><a href="#"><i class="fa fa-bullhorn"></i> Reclamations</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">
				<div id="particles-js" style="position:absolute;width:100%;overflow:hidden;min-height:100px;"></div>
                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-6 right">
                                    <h1>Rendez vous à distance</h1>
                                    <p>Demandez un compte adhérant.
                                        <br />& gérer vos demandes de rendez vous à distance.</p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="img/isometric1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-4 text-center">
                                    <img class="img-responsive" src="img/picture1.png" alt="">
                                </div>

                                <div class="col-sm-8">
                                    <h2>E-Learning</h2>
                                    <ul class="list-style-none">
                                        <li>Formez vous</li>
                                        <li>&</li>
                                        <li>Informez vous</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-8 right">
                                    <h1>Gérer vos dossiers</h1>
                                    <ul class="list-style-none">
                                        <li>Gérer vos dossiers</li>
                                        <li>& vos résultats d'examens</li>
                                        <li>sans aucun déplacement</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <img class="img-responsive" src="img/picture2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="img-responsive" src="img/isometric2.png" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <h1>Participez en ligne</h1>
                                    <ul class="list-style-none">
                                        <li>Aidez nous à nous améliorer</li>
                                        <li>en nous envoyant vos suggestions</li>
                                        <li>ou vos réclamations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

        <section class="bar background-white">
            <div class="container">

                <div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="heading text-center">
								<h2>L'Hôpital F.S.I.</h2>
							</div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-sitemap"></i>
                                </div>
                                <h3>Organisations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <h3>Attributions</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <h3>Présentations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map"></i>
                                </div>
                                <h3>Localisations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <h3>Nous contacter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h3>Demande d'un accès en ligne</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Tutos récents</h2>
                        </div>

                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                        <!-- *** TESTIMONIALS CAROUSEL ***
 _________________________________________________________ -->

                        <ul class="owl-carousel testimonials same-height-row">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-1.jpg">
                                            <h5>Dr Foulen Ben Foulen</h5>
                                            <p>ABClogie</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-2.jpg">
                                            <h5>Dr Foulen Ben Foulen</h5>
                                            <p>ABClogie</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-3.png">
                                            <h5>Dr Foulen Ben Foulen</h5>
                                            <p>ABClogie</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>Dr Foulen Ben Foulen</h5>
                                            <p>ABClogie</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>

                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="img/person-4.jpg">
                                            <h5>John McIntyre</h5>
                                            <p>CEO, TransTech</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>

                </div>
            </div>
        </section>
        <!-- /.bar -->

        <section class="bar background-image-fixed-6 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-heartbeat"></i>
                        </div>
                        <h3 class="text-uppercase">Code du patient</h3>
                        <p class="lead">Le patient qui effectue un séjour dans notre établissement bénéficie d'un certain nombre de droits garantis par une charte.</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-template-transparent-black btn-lg">Consulter le code du patient</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Nos tutoriaux</h2>
                    </div>

                    <p class="lead">Vous faites partie du staff médical ou êtes stagiaires, vous pouvez contribuer à nos tutoriaux en ligne et partager vos connaissances et expériences avec l'ensemble de la communauté médicale.<br>
					Cette section est ouverte à tous et à toutes. <span class="accent">Consulter la liste des tutos</span>
                    </p>

                    <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

                    <div class="row">


                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/tutos/med1-thumb.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Voir le tuto</a>
                                        </p>
                                    </div>
                                </div>
								<iframe src="https://www.youtube.com/embed/ew_Vwspul6k" frameborder="0" allowfullscreen></iframe>
                                <div class="content">
                                    <h4><a href="#">Titre 1</a></h4>
                                    <p class="author-category">Par <a href="#">Dr. foulen ben Foulen</a> dans <a href="#">Hemologie</a>
                                    </p>
                                    <p class="intro">lorem ipsum doret imet lorem ipsum doret imet lorem ipsum doret imet .</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Lire plus</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/tutos/med2-thumb.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Voir le tuto</a>
                                        </p>
                                    </div>
                                </div>
								<iframe src="https://www.youtube.com/embed/z3L6xaZdp7A" frameborder="0" allowfullscreen></iframe>
                                <div class="content">
                                    <h4><a href="#">Titre 2</a></h4>
                                    <p class="author-category">Par <a href="#">Dr. foulen ben Foulen</a> dans <a href="#">Hemologie</a>
                                    </p>
                                    <p class="intro">lorem ipsum doret imet lorem ipsum doret imet lorem ipsum doret imet .</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Lire plus</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/tutos/med5-thumb.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Voir le tuto</a>
                                        </p>
                                    </div>
                                </div>
								<iframe src="https://www.youtube.com/embed/rnEkZVxoeoc" frameborder="0" allowfullscreen></iframe>
                                <div class="content">
                                    <h4><a href="#">Titre 3</a></h4>
                                    <p class="author-category">Par <a href="#">Dr. foulen ben Foulen</a> dans <a href="#">Hemologie</a>
                                    </p>
                                    <p class="intro">lorem ipsum doret imet lorem ipsum doret imet lorem ipsum doret imet .</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Lire plus</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <img src="img/tutos/med4-thumb.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Voir le tuto</a>
                                        </p>
                                    </div>
                                </div><iframe src="https://www.youtube.com/embed/gKqsOBVPVDU" frameborder="0" allowfullscreen></iframe>
                                <div class="content">
                                    <h4><a href="#">Titre 4</a></h4>
                                    <p class="author-category">Par <a href="#">Dr. foulen ben Foulen</a> dans <a href="#">Hemologie</a>
                                    </p>
                                    <p class="intro">lorem ipsum doret imet lorem ipsum doret imet lorem ipsum doret imet .</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Lire plus</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>


                    </div>
                    <!-- /.row -->

                    <!-- *** BLOG HOMEPAGE END *** -->

                </div>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.bar -->

        <section class="bar background-gray no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Nos sites</h2>
                        </div>

                        <ul class="owl-carousel customers">
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								Portail du Ministère
                            </li>
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								Site des données ouvertes v1
                            </li>
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								Site des données ouvertes v2
                            </li>
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								Site des services
                            </li>
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								Site des concours
                            </li>
                            <li class="item">
                                <img src="img/blason.png" alt="" style="width:55%" class="img-responsive"><br><br>
								B3 en ligne
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->
                    </div>

                </div>
            </div>
        </section>


        <!-- *** GET IT ***
_________________________________________________________ -->

        <section class="bar background-image-fixed-3 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-heartbeat"></i>
                        </div>
                        <h3 class="text-uppercase">Vous n'avez pas de compte en ligne</h3>
                        <p class="lead">Un compte en ligne vous permet de gérer votre dossier mais simplifie également les opérations de prises de rendez vous et d'accès à vos résultats d'analyse sans aucun déplacement.</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-template-transparent-black btn-lg">Demandez un compte en ligne</a>
                        </p>
                    </div>

                </div>
            </div>
        </section>


    <!-- =========================
       Map
    ============================== -->
    <section id="map" class="map">
        <div id="map-container">

        </div>
    </section> <!-- *** end Map Container *** -->


        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Vous rendez visite à un patient?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Consulter la carte de l'hôpital FSI</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>Footer 1</h4>

                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                    <hr>


                    <h4>Footer 2</h4>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">


                    <h4>Footer 3</h4>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">


                    <h4>Footer 4</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">


                    <h4>Footer 5</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2018</p>
                    <p class="pull-right">Intégration - <a href="http://www.interieur.gov.tn">Benfarhat Elyes</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
			},
			"image": {
			  "src": "img/github.svg",
			  "width": 100,
			  "height": 100
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

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOsiOjjoOiFBmXLU0adNjsnCKLpcDfRyI"></script>

	<script>

  /* ========================================================================
     Component: Map
   ========================================================================== */
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    var myLatlng = new google.maps.LatLng(36.8787259, 10.3247723);
    var mapOptions = {
        zoom: 15,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
        center: myLatlng,

        styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural.terrain","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-27"},{"lightness":"1"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"},{"color":"#38a7bb"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"color":"#2a2121"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#7f1a1a"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#38a7bb"},{"visibility":"on"}]}],
        stylesdefault: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],
    };
    var mapElement = document.getElementById('map-container');
    var map = new google.maps.Map(mapElement, mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hôpital H.F.S.I. la Marsa'
    });
  }

	</script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

	<!-- A utiliser pour rendre les cours vidéo responsive
	https://dollarshaveclub.github.io/reframe.js/
	-->


</body>

</html>
