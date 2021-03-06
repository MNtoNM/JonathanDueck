<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>

<div class="vertical-space-medium"></div>

<div class="projects__body">
  <h1>New Post Each Monday!</h1>
  <div class="single-project-content single-project-content--transparent">

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
          <?php the_excerpt(); ?> <a href="<?php echo get_the_permalink(); ?>">Read more...</a>
        </div>
        <div class="blog__meta blog__meta--bottom">
          <?php the_tags(); ?>
        </div>
      </div><!-- .blog__post -->
      <br />
    <?php } ?>
  </div><!-- .single-project-content -->
</div><!-- .projects__body -->

<?php get_footer(); ?>
