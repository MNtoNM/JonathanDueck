
<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="blog__container">
  <div class="vertical-space-small"></div>
 <h1><?php echo "Tag: " . single_tag_title('', false); ?></h1>
<?php while(have_posts()) {
  the_post(); ?>
    <div class="blog__post">
      <div class="blog__title">
        <h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="blog__meta blog__meta--top">
        <?php echo "Posted " . get_the_date() . " in " . get_the_category_list(', '); ?>
      </div>
      <div class="blog__content">
        <?php the_excerpt(); ?>
      </div>
      <div class="blog__meta blog__meta--bottom">
        <?php echo "<strong>Tags:</strong> " . get_the_tag_list(' '); ?>
      </div>
    </div><!-- .blog__post -->
    <br />
  <?php } ?>
</div><!-- .blog__container -->
<?php get_footer(); ?>
