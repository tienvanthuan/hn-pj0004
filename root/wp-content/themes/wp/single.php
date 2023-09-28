<?php get_header() ?>

<main>
  <?php the_title(); ?>
  <?php the_time('Y.n.j'); ?>
  <?php while (have_posts()){ the_post();the_content();} ?>
</main>

<?php get_footer() ?>