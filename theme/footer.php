<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hfsi
 */

?>
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
	<?php

$defaults = array(
	'theme_location'  => 'menu-bottom',
	'menu'            => 'menu-bottom',
	'container'       => 'ul',
	'container_class' => 'nav navbar-dark justify-content-center pt-5 pb-2',
	'container_id'    => '',
	'menu_class'      => '',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="nav navbar-dark justify-content-center pt-5 pb-2 %2$s">%3$s</ul>',
	'depth'           => 2,
  'walker'          => new hfsi_walker_nav_menu(),
  'submenu_class'   => 'dropdown-menu-right'
);

if ( has_nav_menu( 'menu-bottom' ) ) {
  wp_nav_menu( $defaults );
}
?>
      <nav class="nav navbar-dark justify-content-center pt-5 pb-2">
          <a class="nav-link active" href="#">L'hopital</a>
          <a class="nav-link" href="#">Nos services</a>
          <a class="nav-link" href="#">contact</a>
          <a class="nav-link" href="#">Let's work together</a>
          <a class="nav-link" href="#">Location</a>
          <a class="nav-link" href="#">Download</a>
          <a class="nav-link" href="#">Licence</a>
          <a class="nav-link" href="#home"><i class="fa fa-chevron-up"></i></a>
        </nav>
        <p class="text-white text-center py-3"><small>&copy <?= date('Y') ?> <?php bloginfo('name') ?> <?php bloginfo('description') ?></small></p>
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
