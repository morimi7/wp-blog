<form method="get" class="searchform" action="<?php echo esc_url( home_url('/') ); ?>">
    <input type="search" placeholder="キーワードで検索する" name="s" class="searchfield" value="" />
    <button type="searchsubmit" value="&#xf002;" alt="検索" title="検索" class="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt=""></button>
</form>
