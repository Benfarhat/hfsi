<?php
// Add comment to html
echo "  <!-- Slideshow -->";

$args = array(
  'category_name' => get_theme_mod('category_carousel'),
  'posts_per_page' => get_theme_mod('num_category_carousel', 5)
);
$the_query = new WP_Query( $args );
?>

  <div id="slideshow-section">
      <div class="container my-5">
          <div class="row">
            <h2 class="titre animated bounceInRight title_carousel"><?= get_theme_mod('title_carousel') ?></h2>
          </div>
          <div class="row">

              <div id="carousel" class="carousel slide position-relative animated bounceInLeft" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators d-flex flex-column">
                <?php
                for ($i = 0; $i < $the_query->post_count; $i++) {
                    echo '<li data-target="#carousel" data-slide-to="'.$i.'"';
                    if($i == 0) echo ' class="active"';
                    echo '></li>';
                }
                ?>
              </ol>
              <div class="carousel-inner" role="listbox">
                <?php
                $i=0;
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $link = get_permalink();
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                ?>
                <div class="carousel-item<?php if($i==0) echo " active"; $i++;?>">
                <?php
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  $image_url = get_the_post_thumbnail_url();
                } else {
                  $image_url = get_template_directory_uri() . '/img/laboratoire2.jpg';
                }
                ?>
                  <img src="<?= $image_url ?>" alt="<?= $title ?>">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h3 class="bd-title"><?= $title ?></h3>

                    <p><?= $excerpt ?></p>
                    <a href="<?= $link ?>" class="btn btn-outline-success text-uppercase align-items-end"><i class="fa fa-long-arrow-right"></i> Lire la suite</a>
                  </div>
                </div>
                <?php
                endwhile;
                ?>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

        </div>
  </div>

  <?php
  echo "<!-- /Slideshow -->";
  // Reset data
  wp_reset_postdata();
