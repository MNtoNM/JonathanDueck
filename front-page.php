<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>
<div class="container">
  <div class="vertical-space-medium"></div>

  <!-- <video poster="<?php get_template_directory_uri() . '/assets/images/macbook-keyboard-still-min.png'; ?>" playsinline autoplay muted loop>
    <source src="<?php echo get_template_directory_uri() . '/assets/videos/macbook.mp4'; ?>" type="video/mp4" />
  </video> -->

  <div class="home__headline">Jonathan Dueck</div>

  <div class="home__subheadline">Purveyor of Fine Internets</div>

  <div class="vertical-space-small"></div>

  <div class="btn-group">
    <a class="btn btn-center" href="/projects">Portfolio</a>
    <!-- <a class="btn btn-center" href="/blog">Blog</a> -->
    <a class="btn btn-center" href="/contact">Contact</a>
  </div>

</div>
<?php get_footer(); ?>
