<?php get_header() ?>

<div class="page-container">
  <main class="main-content">
    <?php while (have_posts()): the_post(); ?>
      <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile ?>
    <?php sticksnglue_content_nav() ?>
  </main>
</div>

<?php get_footer() ?>
