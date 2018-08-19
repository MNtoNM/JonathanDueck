<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>


<div class="bg-image">
  <div class="vertical-space-medium"></div>
  <h1><?php the_title(); ?></h1>
  <p><?php the_content(); ?></p>
</div>
<?php get_footer(); ?>
