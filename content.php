<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="post__title"><?php the_title() ?></h1>
  <div class="post__content">
    <?php the_content() ?>
  </div>
</article>
