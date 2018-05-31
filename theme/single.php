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
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <!-- title -->
          <div class="row entry-header animated slideInRight">
            <div class="col-sm-12">
              <h2 class="titre mb-1"><?php the_title(); ?></h2>
              <?php
              $categories = get_the_category();
              if(count($categories)>0):
                ?>
                <div class="mb-1">
                <?php
                foreach($categories as $category)
                echo '<small><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'hfsi' ), $category->name ) ) . '" class="text-muted">' . esc_html( $category->name ) . '</a></small> ';
                ?>
                </div>
                <?php
              endif;
              ?>
            </div>
          </div>
          <!-- /title -->
          <!-- thumbnail -->
          <div class="row entry-thumbnail animated slideInLeft">
            <div class="col-sm-12">
            <?php if ( '' !== get_the_post_thumbnail() ) : ?>
              <div class="post-thumbnail" style="height:260px;background:#ddd url('<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'large')[0] ?>') no-repeat fixed right top;background-size: cover;">
                <a href="<?php the_permalink(); ?>">
                  <?php // the_post_thumbnail(); ?>
                </a>
              </div><!-- .post-thumbnail -->
            <?php endif; ?>
            </div>
          </div>
          <!-- /thumbnail -->
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
