<?php get_header(); ?>

<?php get_template_part('template-parts/sidebar'); ?>


<div class="bg-image">
  <div class="medium-space"></div>
  <h1>CONTACT</h1>
  <div class="medium-space"></div>

  <form class="contact-form">
    <input class="field field__standard" type="text" autocomplete="name" placeholder="Your Name" /><br />
    <input class="field field__standard" type="email" autocomplete="email" placeholder="Email Address" /><br />
    <textarea class="field field__textarea" placeholder="Hey Jon! ..."></textarea><br />
    <button type="submit" name="button" class="btn">Submit</button>
  </form>
</div>

<?php get_footer(); ?>
