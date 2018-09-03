<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>


    <div class="vertical-space-medium"></div>

    <?php
      $query = new WP_Query(
        array(
          'post_type' => 'projects',
          'posts_per_page' => -1,
          'order' => 'ASC'
        )
      );
    ?>

    <!-- <div class="container"> -->
      <div class="single-project__body">
        <h1 class="heading">PROJECTS</h1>
        <div class="vertical-space-small"></div>
        <ul>
          <?php
            while ( $query -> have_posts() ) {
              $query -> the_post(); ?>

                <div class="">
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
      <!-- </div> -->
    <!-- </div> -->

    <div class="vertical-space-medium"></div>
  <!-- </div> -->

<?php get_footer();
