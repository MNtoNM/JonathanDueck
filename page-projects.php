<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="static-background">
  <div class="bg-image">
    <div class="vertical-space-small"></div>
    <h1 class="faux-center">PROJECTS</h1>

    <?php
      $query = new WP_Query(
        array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      );
    ?>

    <div class="row project-row">
      <ul>
        <?php
          while ( $query -> have_posts() ) {
            $query -> the_post(); ?>

              <div class="col-1-of-3">
                  <a href="<?php echo get_permalink( $id = 0, $leavename = false ) ?>">
                    <?php the_post_thumbnail( $size="medium", array('class' => 'project-tile', 'data-id' => 'post-' . get_the_id() )); ?>
                  </a>
              </div>

          <?php
            wp_reset_query();
            }
           ?>
        </ul>
      </div>
    </div>

    <div class="vertical-space-medium"></div>
  </div>

<?php get_footer();
