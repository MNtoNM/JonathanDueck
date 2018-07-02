<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="bg-video">
  <video class= "bg-video__content" autoplay muted loop>
    <source src="<?php echo get_template_directory_uri() . '/videos/macbook.mp4'?>" type="video/mp4">
  </video>
</div>

<?php get_footer(); ?>
