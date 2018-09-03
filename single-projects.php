<?php get_header(); ?>
<?php get_template_part('template-parts/sidebar'); ?>

<div class="projects__body">
  <a class="return-to-blog" href="<?php echo site_url('/projects'); ?>">&larr; Back to All Projects</a>
  <div class="vertical-space-small"></div>

  <div class="single-project-content">
    <?php while(have_posts()) {
      the_post(); ?>

      <h1 style="color: black"><?php the_title(); ?></h1>

      <?php echo get_the_content(); ?>

      <div class="vertical-space-small"></div>

          <div class="technologies__list"><!-- Technologies list -->
            <h2 style="color:black;" class="mb-1">Technologies:</h2>

            <ul>
              <?php
               //echo get_the_term_list($post->ID, 'technologies', '<li>', '</li><li>', '</li>');
              $project_technologies = wp_get_object_terms($post->ID, 'technologies');

              foreach($project_technologies as $technology) { ?>
                <?php // var_dump($technology);  ?>
                <li><?php  echo $technology->name ?></li>
              <?php } ?>
            </ul>
          </div><!-- col-1-of-2 End Technologies list-->

          <div class="technologies__list technologies__list--small"><!-- Project Thumbnail  -->
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('medium', array('class' => 'project__thumbnail'));
            } ?>
          </div><!-- End Project Thumbnail  -->







    <div class=""></div>
      <?php
        $custom = get_post_custom();
        // var_dump($custom);
        // foreach($custom as $key => $value) {
        // echo $key.': '.$value.'<br />';
      // }
      ?>
      <?php if ($custom['URL']) { ?>
        <a target="_blank" href="<?php echo $custom['URL'][0]; ?> "><i class="fa fa-globe portfolio-external-links" /></i></a>
      <?php } ?>

      <?php if ($custom['GitHub']) { ?>
        <a target="_blank" href="<?php echo $custom['GitHub'][0]; ?>"><i class="fa fa-github portfolio-external-links"></i></a>

      <?php } ?>


      <?php } ?>








  </div>
  <?php get_footer(); ?>
</div><!-- .projects__body -->


  <div class="vertical-space-small"></div>
</div>
<?php get_footer(); ?>
