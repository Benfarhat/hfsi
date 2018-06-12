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
if ( get_theme_mod('enable_category_carousel', true) ):
  get_template_part( 'elements/slideshow' );
endif;
?>
  <?php if ( get_theme_mod('enable_webservice', true) || get_theme_mod('enable_rendezvous', true) ): // @todo
    // At this position we have at least one of them;
    $can_run_webservice = true;
    $only_admin = false;
    // if only admin mode
    if ( get_theme_mod('enable_admin_webservice', false)):
      $current_user = wp_get_current_user();
      if (user_can( $current_user, 'administrator' )) {
        $can_run_webservice = true;
        $only_admin = true; // For debug message @todo
      } else {
        $can_run_webservice = false;
      }
    endif;
    $taille = (get_theme_mod('enable_webservice', true) && $can_run_webservice && get_theme_mod('enable_rendezvous', true)) ? 6 : 12 ;
    ?>
  <!-- Resultats d'analyses et rendez vous -->
  <section id="horaire-rdv">
    <div class="container mt-3">
      <div class="row">

      <?php if ( get_theme_mod('enable_webservice') && $can_run_webservice ): ?>
        <!-- Resultats d'analyses -->
        <div id="resultat-analyse" class="col-md-<?= $taille ?>">
          <?php get_template_part( 'elements/webservice_form' ); // col-md-6 ?>
        </div>
      <?php endif; ?>

      <?php if ( get_theme_mod('enable_rendezvous', true) ): ?>
        <!-- Rendez vous -->
        <div id="rdv" class="col-md-<?= $taille ?>">
          <?php get_template_part( 'elements/appointment' ); // col-md-6 ?>
        </div>
      <?php endif; ?>

      </div>
    </div>
  </section>
  <!-- /Horaire et rendez vous -->
  <?php endif; ?>

  <?php get_template_part( 'elements/homepage' ); ?>

  <?php if ( get_theme_mod('enable_homepage2') ): ?>
    <?php get_template_part( 'elements/extended_homepage' ); ?>
  <?php endif; ?>

  <?php if ( get_theme_mod('enable_en_avant_section') ): ?>
    <?php get_template_part( 'elements/featured_article' ); ?>
  <?php endif; ?>


<?php
get_footer();
