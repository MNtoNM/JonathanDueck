
<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="blog__container">
  <a class="return-to-blog" href="<?php echo site_url('/blog'); ?>">&larr; Back to All Posts</a>

<?php while(have_posts()) {
  the_post(); ?>
    <div class="blog__post">
      <h1 class="blog__title">
        <?php the_title(); ?>
      </h1>
      <div class="blog__meta blog__meta--top">
        <?php echo "Posted " . get_the_date() . " in " . get_the_category_list(', '); ?>
      </div>
      <div class="blog__content">
        <?php the_content() ?>
      </div>
      <div class="blog__meta blog__meta--bottom">
        <?php echo "<strong>Tags:</strong> " . get_the_tag_list(', '); ?>
      </div>
    </div><!-- .blog__post -->
    <br />
  <?php } ?>
</div><!-- .blog__container -->
<?php get_footer(); ?>
