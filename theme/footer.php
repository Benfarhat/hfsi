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
          <?php if(get_theme_mod('left_footer_content')):
            echo '<h5 class="title">'.get_post_field('post_title', get_theme_mod('left_footer_content') ).'</h5>';
            echo get_post_field('post_content', get_theme_mod('left_footer_content') );
          endif;?>
          </div>
          <div class="col-md-4">
          <?php if(get_theme_mod('middle_footer_content')):
            echo '<h5 class="title">'.get_post_field('post_title', get_theme_mod('middle_footer_content') ).'</h5>';
            echo get_post_field('post_content', get_theme_mod('middle_footer_content') );
          endif;?>
          </div>
          <div class="col-md-4">
          <?php if(get_theme_mod('right_footer_content')):
            echo '<h5 class="title">'.get_post_field('post_title', get_theme_mod('right_footer_content') ).'</h5>';
            echo get_post_field('post_content', get_theme_mod('right_footer_content') );
          endif;?>
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
    <script type="text/javascript">
      $(function () {
          $('#datetimepicker5').datetimepicker();
      });
  </script>

</body>

</html>
