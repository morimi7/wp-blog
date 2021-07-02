<header class="header">
  <h1 class="header__logo"><a class="header__link" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo@2x.png" alt="travel-blog"></a></h1>
  <?php
  //メニューIDを取得する
  $menu_name = 'global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <nav class="main-nav">
    <ul class="main-nav__list">
      <?php foreach ($menu_items as $item) : ?>
        <li class="main-nav__item"><a href="<?php echo esc_attr($item->url); ?>" class="main-nav__link"><?php echo esc_html($item->title); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
