
  <!-- Content -->
  <section id="content-loop" class="py-2">
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
