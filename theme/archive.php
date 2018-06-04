<?php
/**
 * The template for displaying archive pages
 * A fantastic all in one "Fallback" for: author, category, taxonomy, date and tag,
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage HFSI
 * @since 1.0
 * @version 1.0
 */

get_header();
?>
  <!-- Content -->
  <main id="main" class="site-main py-3" role="main">
    <!-- container -->
    <div class="container">
      <?php get_template_part( 'elements/breadcrumb' ); ?>
      <?php if ( have_posts() ) : ?>
      <!-- Archive title and description -->
      <header class="page-header">
        <div class="row entry-header animated slideInRight">
          <div class="col-sm-12">
            <h2 class="page-title titre mb-1">
            <?php

            if ( is_category() ) {
                $title = single_cat_title( '', true );
            } elseif ( is_tag() ) {
                $title = single_tag_title( '', true );
            } elseif ( is_author() ) {
                $title = get_the_author();
            } elseif ( is_year() ) {
                $title = sprintf( __( 'Année: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
            } elseif ( is_month() ) {
                $title = sprintf( __( 'Mois: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
            } elseif ( is_day() ) {
                $title = sprintf( __( 'Jour: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
            } elseif ( is_post_type_archive() ) {
                $title = sprintf( __( 'Archives: %s' ), post_type_archive_title( '', false ) );
            } else {
              the_archive_title( '', '' );
            }
            ?>
            </h2>
            <?php the_archive_description( '<div class="description text-right"><small class="text-muted">', '</small></div>' ); ?>
          </div>
        </div>
      </header>
      <!-- /Archive title and description -->
      <?php endif; ?>
    <!-- Row -->
    <div class="row">
    <?php
			while ( have_posts() ) : the_post();
      /* if we change content to experct, we need to delete this counter */
      hfsi_setPostViews(get_the_ID());
      ?>

      <article id="post-<?php the_ID(); ?>" class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=<?php the_title(); ?>" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ?>" data-holder-rendered="true">
          <div class="card-body">
          <h5 class="card-title title"><?php the_title(); ?></h5>
            <p class="card-text"><?= the_excerpt(); ?></p>
          </div>
          <div class="card-footer">
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?= get_permalink( get_the_ID() )?>" class="btn btn-sm btn-outline-success">Consulter <i class="fa fa-chevron-right"></i></a>
              </div>
              <small class="text-muted"><i class="fa fa-eye"></i> <?= hfsi_getPostViews(get_the_ID()) ?> <?= hfsi_getPostViews(get_the_ID()) > 1 ? "vues" : "vue" ?>&nbsp;|&nbsp;<i class="fa fa-clock-o"></i> <?php the_date( 'd/m/Y', null, null, true ); ?></small>
            </div>
          </div>
        </div>
      </article>
<?php
/*
          <!-- thumbnail -->
          <div class="row entry-thumbnail animated slideInLeft">
            <div class="col-sm-12">
            <?php if ( '' !== get_the_post_thumbnail() ) : ?>
              <div class="post-thumbnail" style="height:260px;background:#ddd url('<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ?>') no-repeat fixed right top;background-size: cover;">
                <div class="overlay rgba3 hover0"></div>
              </div><!-- .post-thumbnail -->
            <?php endif; ?>
            </div>
          </div>
          <!-- /thumbnail -->
*/
?>
<?php
/*

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <!-- Title -->
          <div class="row entry-header animated slideInRight">
            <div class="col-sm-12">
              <h3 class="title mb-1"><?php the_title(); ?></h3>
                <div class="mb-1 text-muted"><small>

                <?php
                // Get categories list ***************************
                $categories = get_the_category();
                if ( !empty( $categories ) ) {
                  echo '<i class="fa fa-bookmark-o"></i> ';

                  foreach( $categories as $category )
                  echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Voir toutes les pages dans la catégorie  %s', 'hfsi' ), $category->name ) ) . '" class="text-muted">' . esc_html( $category->name ) . '</a> ';

                  if( count($categories) > 0 ) echo " | ";
                }
                // End get tags list

                // Get tags list ********************************
                $tags = get_the_tags();
                if ( !empty( $tags ) ) {

                  echo '<i class="fa fa-tags"></i> Mots clés: ';
                  print_r(count($tags));
                  $i = 0;
                  foreach( $tags as $tag ){
                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Voir toutes les pages avec le mot clés %s', 'hfsi' ), $tag->name ) ) . '" class="text-muted">' . esc_html( $tag->name ) . '</a> ';
                    $i++;

                    if( $i < count($tags) ) echo " • ";
                  }

                  if(count($tags) > 0 ) echo " | ";
                }
                // End get tags list
                ?>
                <i class="fa fa-eye"></i> <?= hfsi_getPostViews(get_the_ID()) ?> <?= hfsi_getPostViews(get_the_ID()) > 1 ? "vues" : "vue" ?></small>
              </div>
            </div>
          </div>
          <!-- /Title -->

          <?php get_template_part( 'elements/thumbnail' ); ?>

          <!-- Content -->
          <div class="row entry-content mt-3 animated slideInLeft">
            <div class="col-sm-12">
              <?php
                the_content();
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . __( 'Pages:', 'hfsi' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div>
          </div>
          <!-- /Content -->

        </div>
      </article><!-- #post-## -->
      */


			endwhile; // End of the loop.
      ?>
      </div>
      <!-- /Row -->
    </div>
    <!-- container -->
  </main>
  <!-- /Content -->




<?php
get_footer();
