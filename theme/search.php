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
global $wp_query;
?>
<!-- Content -->
<main id="main" class="site-main py-3" role="main">
  <!-- container -->
  <nav class="container">
    <?php if ( have_posts() ) : ?>
    <!-- Search Query and results -->
    <header class="page-header">
      <div class="row entry-header animated slideInRight">
        <div class="col-sm-12">
          <h2 class="page-title titre mb-1">
          <?php printf( __( 'Résultats de la recherche de: %s', 'hfsi' ), get_search_query() ); ?>
          </h2>
          <div class="description text-right"><small class="text-muted">Nombre de résultats: <?= $wp_query->found_posts ?></small></div>
        </div>
      </div>
    </header>
    <!-- /Search Query and results -->
    <?php endif; ?>
    <?php
      query_posts(
        array_merge(
        array(
          'paged' => $paged
        ),
        $wp_query->query
      )
      );
      $col_md = ( ( $wp_query->found_posts > 0 ) && ( $wp_query->found_posts < 5 ) ) ? 12 / $wp_query->found_posts : 4;
    ?>
    <!-- Row -->
    <div class="row">
    <?php
			while ( have_posts() ) : the_post();
      /* if we change content to experct, we need to delete this counter */
      hfsi_setPostViews(get_the_ID());
      ?>
      <!-- Result <?php the_ID(); ?> -->
      <article id="post-<?php the_ID(); ?>" class="col-md-<?= $col_md ?> d-flex align-items-stretch">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <?php the_title(); ?>
          </div>
          <div class="card-body">
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
      <!-- /Result <?php the_ID(); ?> -->
      <?php
			endwhile; // End of the loop.
      ?>
      </div>
      <!-- /Row -->
      <hr>
      <?php
      hfsi_display_pagination();
      ?>
      </div>
      <!-- /Row -->
    </div>
    <!-- container -->
  </main>
  <!-- /Content -->




<?php
get_footer();
