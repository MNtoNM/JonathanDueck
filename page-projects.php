<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="bg-image">
  <div class="vertical-space-medium"></div>
  <h1>PROJECTS</h1>

  <?php
    $query = new WP_Query(
      array(
        'post_type' => 'projects',
        'posts_per_page' => -1
      )
    );
  ?>

  <div class="row project-row">
    <?php
      while ( $query -> have_posts() ) {
        $query -> the_post(); ?>

          <div class="col-1-of-3">
              <a href="/projects/<?php echo get_the_ID(); ?>"><?php the_post_thumbnail( $size="medium", array('class' => 'project-tile')); ?></a>
          </div>

      <?php
        wp_reset_query();
        }
       ?>
    </div>


  <div class="vertical-space-medium"></div>
</div>

<?php
  // custom query
?>



<?php get_footer();
