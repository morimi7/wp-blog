  <?php while (have_posts()) : the_post(); ?>
    <article class="post">
      <h2 class="post__title"><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a></h2>
      <ul class="post__meta">
        <li class="post__date"><?php the_time(get_option('date_format')); ?></li>
        <li class="post__category"><?php the_category(); ?></li>
      </ul>
      <!---アイキャッチ--->
      <?php
      if (has_post_thumbnail()) :
        the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "post__image"));
      else :
      ?>
        <img class="post__image" src="<?php echo get_template_directory_uri(); ?>/img/main2.jpg" alt="no-image" />
      <?php endif; ?>
      <!---アイキャッチ--->
      <h3 class="post__text">
        <?php the_excerpt(); ?>
      </h3>
      <a href="<?php the_permalink(); ?>" class="post__link more-button">Read More</a>
    </article>
  <?php endwhile; ?>

  <!---ページネーション--->
  <?php wp_pagenavi(); ?>
