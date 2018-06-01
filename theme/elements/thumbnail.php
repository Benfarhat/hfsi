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
