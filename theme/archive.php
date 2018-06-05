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
  <nav class="container">
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
    <?php
    // Enable pagination and change limit value
      $current_query = $wp_query->query;
      $current_query['paged'] = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $current_query['posts_per_page'] = 3;
      query_posts($current_query);
    ?>
    <!-- Row -->
    <div class="row">
    <?php
			while ( have_posts() ) : the_post();
      /* if we change content to experct, we need to delete this counter */
      hfsi_setPostViews(get_the_ID());
      ?>

      <article id="post-<?php the_ID(); ?>" class="col-md-4 d-flex align-items-stretch">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" alt="<?php the_title(); ?>" style="height: 225px; width: 100%; display: block;" src="<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ?>" data-holder-rendered="true">
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
      <!-- Row -->
      <nav aria-label="navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

      <?php // echo paginate_links();
      $pagination =  paginate_links( array(
        //'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '/page/%#%',
        'current' => max( 1, get_query_var('paged') ),
        //'total' => $posts_array->max_num_pages,

        'show_all'           => false,
        'end_size'           => 1,
        'mid_size'           => 2,
        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
        'next_text'          => __( 'Next page', 'twentyfifteen' ),
        'type' => 'array'
    ) );
        print_r($pagination);
        if( is_array( $pagination ) ) {
          $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
          echo '<nav aria-label="navigation"><ul class="pagination justify-content-center">';
          foreach ( $pagination as $page ) {
            print_r($page);
                  echo '<li class="page-item">'.$page.'</li>';
          }
         echo '</ul></nav>';
          }
       ?>
      <?php
          $defaults = array(
            'range'           => 4,
            'custom_query'    => FALSE,
            'previous_string' => __( 'Previous', 'hfsi' ),
            'next_string'     => __( 'Next', 'hfsi' ),
            'before_output'   => '<nav aria-label="navigation"><ul class="pagination justify-content-center">',
            'after_output'    => '</ul></nav>'
        );
        the_posts_pagination( array(
        'mid_size'  => 2,
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'hfsi' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'hfsi' ) . '</span>',
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'hfsi' ) . ' </span>',
      ) ); ?>

      </div>
      <!-- /Row -->
    </div>
    <!-- container -->
  </main>
  <!-- /Content -->




<?php
get_footer();
