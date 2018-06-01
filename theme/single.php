<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

  <?php
      while ( have_posts() ) : the_post();
      hfsi_setPostViews(get_the_ID());
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
        <?php get_template_part( 'elements/breadcrumb' ); ?>
          <!-- title -->
          <div class="row entry-header animated slideInRight">
            <div class="col-sm-12">
              <h2 class="titre mb-1"><?php the_title(); ?></h2>
                <div class="mb-1 text-muted"><small>

                <?php
                // Get categories list ***************************
                $categories = get_the_category();
                if ( !empty( $categories ) ) {

                  if( count($categories) > 0 )
                    echo '<i class="fa fa-bookmark-o"></i> ';

                  foreach( $categories as $category )
                  echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Voir tous les articles dans la catégorie  %s', 'hfsi' ), $category->name ) ) . '" class="text-muted">' . esc_html( $category->name ) . '</a> ';

                  if( count($categories) > 0 ) echo " | ";
                }
                // End get tags list

                // Get tags list ********************************
                $tags = get_the_tags();
                if ( !empty( $tags ) ) {

                  echo '<i class="fa fa-tags"></i> Mots clés: ';

                  $i = 0;
                  foreach( $tags as $tag ){
                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'Voir tous les articles avec le mot clés %s', 'hfsi' ), $tag->name ) ) . '" class="text-muted">' . esc_html( $tag->name ) . '</a> ';
                    $i++;

                    if( $i < count($tags) ) echo " • ";
                  }

                  if(count($tags) > 0 ) echo " | ";
                }
                // End get tags list
                ?>
                <i class="fa fa-clock-o"></i> <?php the_date( 'd/m/Y', null, null, true ); ?> |
                <i class="fa fa-eye"></i> <?= hfsi_getPostViews(get_the_ID()) ?> <?= hfsi_getPostViews(get_the_ID()) > 1 ? "vues" : "vue" ?></small>
              </div>
            </div>
          </div>
          <!-- /title -->

          <?php get_template_part( 'elements/thumbnail' ); ?>

          <!-- content -->
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
          <!-- /content -->
        </div>
      </article><!-- #post-## -->
<?php
				// If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :7
        ?>
        <div class="comment container animated slideInRight">
          <div class="row">
            <div class="col-sm-12">
            <?php
					    comments_template();
            ?>
            </div>
          </div>
        </div>
        <?php
				endif;

			endwhile; // End of the loop.
      ?>
  </main>
  <!-- /Content -->




<?php
get_footer();
