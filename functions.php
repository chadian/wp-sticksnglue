<?php
  function sticksnglue_content_nav() {
    global $wp_query;

    if ($wp_query->max_num_pages > 1): ?>
      <nav>
        <div class="nav-previous">
          <?php next_posts_link('Older posts', $wp_query->max_num_pages); ?>
        </div>
        <div class="nav-next">
          <?php previous_posts_link('Newer posts', $wp_query->max_num_pages); ?>
        </div>
      </nav>
    <?php endif;
  }
?>
