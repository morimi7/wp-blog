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
              <?php
                the_post_thumbnail("large", array("alt" => get_the_title(), "class" => "post__image"));
              ?>
              <!---アイキャッチ--->
              <span class="post__text">
                <?php the_content(); ?>
              </span>
            </article>
          <?php endwhile; ?>

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
