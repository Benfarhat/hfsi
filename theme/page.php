<?php
/**
 * The template for displaying all statics pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
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

  <?php
			while ( have_posts() ) : the_post();
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">

          <!-- Title -->
          <div class="row entry-header">
            <div class="col-sm-12">
              <h2 class="titre animated slideInRight"><?php the_title(); ?></h2>
            </div>
          </div>
          <!-- /Title -->

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
