<?php if (have_posts()) : ?>
  <?php get_template_part('includes/article-list'); ?>
<?php else : ?>
  <p class="post__text">記事が見つかりませんでした。</p>
<?php endif; ?>
