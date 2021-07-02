<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
  <?php get_header(); ?>
</head>

<body>
  <div class="wrapper">
    <!-----header---->
    <?php get_template_part('includes/header'); ?>

    <div class="container">
      <main>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="post">
              <h1 class="post__title">
                <?php the_title(); ?>
              </h1>
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
              <span class="post__text">
                <?php the_content(); ?>
              </span>
            </article>
          <?php endwhile; ?>

          <ul class="pager">
            <li class="pager__link">
              <?php if (get_previous_post()) : ?>
                <?php previous_post_link('&lt; %link', '前の記事へ'); ?>
              <?php endif; ?>
            </li>
            <li class="pager__link">
              <?php if (get_next_post()) : ?>
                <?php next_post_link('%link &gt;', '次の記事へ'); ?>
              <?php endif; ?>
            </li>
          </ul>
        <?php else : ?>
          <p class="post__text">記事が見つかりませんでした。</p>
        <?php endif; ?>
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
