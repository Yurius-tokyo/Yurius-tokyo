<?php

	if(is_category()){
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
  }else{
		$post = get_post();
  	$cat_slug = $post -> post_name;
  }
?>
  <nav id="sub_nav" class="uk-navbar-container uk-visible@m" uk-navbar>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li class="<?php $cat_slug=='tips' && print 'uk-active' ;?>"><a href="/tips/">全て</a></li>
            <li class="<?php $cat_slug==='tips_web' && print 'uk-active' ;?>"><a href="/category/tips_web/">Web制作</a></li>
            <li class="<?php $cat_slug==='tips_business' && print 'uk-active' ;?> uk-hidden"><a href="/category/tips_business/">ビジネス</a></li>
            <li class="<?php $cat_slug==='tips_marketing' && print 'uk-active' ;?>"><a href="/category/tips_marketing/">マーケティング</a></li>
            <li class="<?php $cat_slug==='tips_translation' && print 'uk-active' ;?>"><a href="/category/tips_translation/">翻訳</a></li>
            <li class="<?php $cat_slug==='tips_gamedev' && print 'uk-active' ;?>"><a href="/category/tips_gamedev/">ゲーム開発</a></li>
            <li class="<?php $cat_slug==='tips_web' && print 'uk-active' ;?> uk-hidden"><a href="/category/tips_web/">コラム</a></li>
        </ul>
        <div class="uk-navbar-item">

          <?php get_search_form(); ?>
        </div>
    </div>
  </nav>
