


<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>


<div class="projects__body">
  <a class="return-to-blog" href="<?php echo site_url('/projects'); ?>">&larr; Back to All Projects</a>

  <div class="vertical-space-small"></div>

  <?php while(have_posts()) {
    the_post(); ?>

  <h1><?php the_title(); ?></h1>
  <div class="single-project-content">
    <?php echo get_the_content(); ?>
    <h2 style="color:black;">Technologies:<?php echo $post->ID; ?></h2>

<?php
  $taxonomy = 'technologies';
  $terms = get_terms($taxonomy);

  if( $terms && !is_wp_error( $terms ) ) { ?>
    <ul>
      <?php foreach( $terms as $term ) { ?>
        <li><?php echo $term->name; ?></li>
      <?php } ?>
    </ul>
  <?php } ?>

  <ul>
    <?php
      // echo get_the_term_list($post->ID, 'technologies', '<li>', '</li><li>', '</li>');
      $project_technologies = wp_get_object_terms($post->ID, 'technologies');
      foreach($project_technologies as $technology) { ?>
        <li><?php echo $technology->name ?></li>
      <?php } ?>
  </ul>
    <?php
      $custom = get_post_custom();
      // var_dump($custom);
      // foreach($custom as $key => $value) {
      // echo $key.': '.$value.'<br />';
    // }
    ?>
    <?php if ($custom['URL']) { ?>
      <h4>Live URL: <?php echo $custom['URL'][0]; ?> </h4>
    <?php } ?>

    <?php if ($custom['GitHub']) { ?>
      <h4>GitHub: <?php echo $custom['GitHub'][0]; ?></h4>
    <?php } ?>

    <?php
      if ( has_post_thumbnail() ) {
    	   the_post_thumbnail('medium');
      } ?>

  <?php } ?>
  </div>

</div>
<?php get_footer(); ?>
