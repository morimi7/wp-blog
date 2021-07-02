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
          <h1 class="category__title">
            <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
              echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
              echo '「' . $_GET['s'] . '」の検索結果：' . $wp_query->found_posts . '件'; // 検索キーワードと該当件数を表示
            }
            ?>
          </h1>
          <?php get_template_part('includes/article-list'); ?>

        <?php else : ?>
          <p class="post__text no-result-message">検索されたキーワードに一致する記事はありませんでした</p>
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
