<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <?php get_header(); ?>
</head>

<body>
  <div class="wrapper">
    <!-----header---->
    <?php get_template_part('includes/header'); ?>

    <div class="pickup">
      <h1 class="pickup__title">Pick Up</h1>
      <?php
      $pickup = array(
        'meta_query' => array(
          array(
            'key' => 'my_pickup',
            'value' => '1'
          )
        )
      );
      $pickup_query = new WP_Query($pickup);
      ?>
      <ul class="pickup__list">
        <?php while ($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
          <li class="pickup__item">
            <!---アイキャッチ--->
            <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "post__image"));
            else :
            ?>
              <img class="post__image" src="<?php echo get_template_directory_uri(); ?>/img/main2.jpg" alt="no-image" />
            <?php endif; ?>
            <!---アイキャッチ--->
            <p class="pickup__text"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a></p>

            <a href="<?php the_permalink(); ?>" class="pickup__link more-button">Read More</a>
          </li>
        <?php endwhile; // end of the loop.
        ?>
      </ul>

      <?php wp_reset_postdata(); ?>
    </div>

    <div class="container">
      <main>
      <?php get_template_part('includes/main'); ?>
      </main>

      <aside>
        <?php get_sidebar(); ?>
      </aside>
    </div>

    <footer>
      <?php get_template_part('includes/footer'); ?>
    </footer>

  </div>

  <?php get_footer(); ?>

</body>

</html>
