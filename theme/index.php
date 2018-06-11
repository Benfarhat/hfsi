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
  get_template_part( 'elements/slideshow' );
endif;
?>
  <?php if ( get_theme_mod('enable_webservice') || true ): // @todo
    // At this position we have at least on of them;
    $taille = (get_theme_mod('enable_webservice') && true) ? 6 : 12 ;
    ?>
  <!-- Resultats d'analyses et rendez vous -->
  <section id="horaire-rdv">
    <div class="container mt-3">
      <div class="row">
      <?php if ( get_theme_mod('enable_webservice') ): ?>
        <!-- Resultats d'analyses -->
        <div id="resultat-analyse" class="col-md-<?$ $taille ?>">
          <?php get_template_part( 'elements/webservice_form' ); // col-md-6 ?>
        </div>
      <?php endif; ?>
        <!-- Rendez vous -->
        <div id="rdv" class="col-md-<?$ $taille ?>">
          <?php get_template_part( 'elements/appointment' ); // col-md-6 ?>
        </div>
      </div>
    </div>
  </section>
  <!-- /Horaire et rendez vous -->

  <!-- Content -->
  <section id="content-loop" class="py-5">
    <div class="container p-0">

        <div class="row">
            <h2 class="title_loop_homepage titre animated slideInRight"><?= get_theme_mod('title_loop_homepage', 'Nos derniers articles'); ?></h2>
          </div>

    <?php
      //global $wp_query;

      $args = array(
        'posts_per_page' => get_theme_mod('num_loop_homepage', 24),
        'ignore_sticky_posts' => !get_theme_mod('enable_sticky_loop_homepage', true),
      );

      if ( get_theme_mod('category_loop_homepage') ):
        $args['category_name'] = get_theme_mod('category_loop_homepage');
      endif;
      $wp_query_homepage = new WP_Query( $args );
      // var_dump($wp_query_homepage);
    ?>
    <!-- Row -->
    <div class="row">
    <?php
			while ( $wp_query_homepage->have_posts() ) : $wp_query_homepage->the_post();
      /* if we change content to experct, we need to delete this counter */
      hfsi_setPostViews(get_the_ID());
      ?>

      <article id="post-<?php the_ID(); ?>" class="col-md-4 d-flex align-items-stretch">
        <div <?php
        $classes = array(
          'card',
          'mb-4',
          'box-shadow',
        );
        post_class( $classes );
        /* @todo Maybe adding visual effect to sticky elements */
        ?>>
        <?php if (has_post_thumbnail( get_the_ID() ) ): ?>
          <img class="card-img-top" alt="<?php the_title(); ?>" style="height: 225px; width: 100%; display: block;" src="<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ?>" data-holder-rendered="true">
        <?php else : ?>
        <div class="d-flex flex-row" style="background-color:var(--<?php $color = array('success', 'danger', 'warning', 'secondary', 'dark'); echo $color[rand(0, 4)]; ?>);height: 225px; width: 100%; display: block;">
          <div class="flex-1 align-self-center text-center">
            <h6 class="text-uppercase text-white" style="border-bottom:1px solid rgba(255,255,255,.1);padding-bottom:8px;"><?php the_title(); ?></h6>
          </div>
        </div>
        <?php endif; ?>
        <div class="card-body">
          <h5 class="card-title title"><?php the_title(); ?></h5>
          <p class="card-text"><?= the_excerpt(); ?></p>
          </div>
          <div class="card-footer">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="btn-group col-lg-5">
                <a href="<?= get_permalink( get_the_ID() )?>" class="btn btn-sm btn-outline-success">Consulter <i class="fa fa-angle-right"></i></a>
                <?php edit_post_link( '<i class="fa fa-edit"></i>', '', '', null, 'btn btn-sm btn-outline-secondary btn-edit-post-link' ); ?>
              </div>
              <small class="col-lg-7 text-muted d-flex justify-content-end"><span><i class="fa fa-eye"></i> <?= hfsi_getPostViews(get_the_ID()) ?> <?= hfsi_getPostViews(get_the_ID()) > 1 ? "vues" : "vue" ?>&nbsp;|&nbsp;<i class="fa fa-clock-o"></i> <?php the_date( 'd/m/Y', null, null, true ); ?></span></small>
            </div>
          </div>
        </div>
      </article>
      <?php
			endwhile; // End of the loop.
      ?>
      </div>
      <!-- /Row -->
      <?php
      // var_dump($wp_query_homepage->query_vars);
      if ( get_theme_mod('category_loop_homepage') ):
        // Get the URL of current (or selected) category
        $category_link = get_category_link( $wp_query_homepage->query_vars['cat'] );
        ?>
        <a class="btn btn-success" href="<?= esc_url( $category_link ); ?>"><i class="fa fa-bars"></i> Tout voir</a>
        <hr>
        <?php
      endif;
      ?>
    </div>
  </section>
  <!-- /Content -->
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
