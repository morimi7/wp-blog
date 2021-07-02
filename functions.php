<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
  //メニューを追加
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    'footer_nav' => 'フッターナビゲーション',
  ]);
});

add_filter('previous_post_link', function ($output) {
  return str_replace('<a href=', '<a class="pager__left" href=', $output);
});
add_filter('next_post_link', function ($output) {
  return str_replace('<a href=', '<a class="pager__right" href=', $output);
});

function theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'main-sidebar',
    'before_title' => '<h3 class="prof__title  h3-title">',
    'after_title' => '</h3>'
  ));
}

add_action('widgets_init', 'theme_widgets_init');
