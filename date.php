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
        <h1 class="category__title"><?php echo get_query_var('year').'年'.get_query_var('monthnum').'月'; ?></h1>
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
