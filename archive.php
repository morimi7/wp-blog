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
        <!--カテゴリー名取得-->
        <?php
        $cat = get_the_category();
        $cat = $cat[0];
        $catname = get_cat_name($cat->term_id);     // カテゴリー名を取得
        ?>
        <h1 class="category__title"><?php echo $catname; ?>一覧</h1>
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
