<div class="footer-wrapper">
  <div class="footer-content">

    <div class="about">
      <h3 class="about__title h3-title">About</h3>
      <p class="about__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <ul class="about__list">
        <li class="about__item"><a href="<?php echo esc_url(home_url()); ?>/profile/" class="about__link">プロフィール詳細</a></li>
        <li class="about__item"><a href="<?php echo esc_url(home_url()); ?>/contact/" class="about__link">お問い合わせ</a></li>
      </ul>
    </div>
    <!--about-->
    <div class="menu">
      <h3 class="menu__title h3-title">Menu</h3>
      <?php
      //メニューIDを取得する
      $menu_name = 'footer_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <ul class="menu__list">
      <?php foreach ($menu_items as $item) : ?>
        <li class="menu__item"><a href="<?php echo esc_attr($item->url); ?>" class="menu__link"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!--menu-->

    <div class="twitter">
      <h3 class="twitter__title h3-title">Twitter</h3>
      <a class="twitter-timeline" data-height="312" href="https://twitter.com/mori_code?ref_src=twsrc%5Etfw">Tweets by mori_code</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <!--twitter-->
  </div>
  <!--footer-content-->
  <span class="copy">&copy Travel & Blog</span>
</div>
<!--footer-wrapper-->
