<?php
	$meta_desc;
	$image;
	if ( is_home() ) {
    $pagename = 'home';
		$meta_desc = get_bloginfo('description');
	}elseif( is_category() ) {
    $category = get_the_category();
    $cat_slug = $category[0]->category_nicename;
		$meta_desc = get_meta_description_from('category');
  }elseif( is_tag() ) {
		$meta_desc = get_meta_description_from('tag');
	}elseif( is_page() ) {
		$post = get_post();
  	$pagename = $post -> post_name;
		switch ($pagename) {
			case 'tips':
				$meta_desc = 'Web制作、マーケティング、多言語化などについてのお役立ち記事です。';
				break;
			case 'web_development':
				$meta_desc = 'ブランディング、販促、インバウンドなどの目的に応じてウェブサイト制作。マーケティングに強い会社だからこそ、集客に繋がるウェブサイトを一緒に考え、作ります。サービス内容や料金など。';
				break;
			case 'marketing':
				$meta_desc = 'マーケティング支援について。広告からリードを獲得したい。オンラインストアの売り上げを増やしたい。自社に合った集客方法を知りたい。コミュニティを活発にしたい。様々なニーズにお応えします。';
				break;
			case 'localization':
				$meta_desc = '翻訳サービスの内容と料金について。ただの翻訳サービスではありません。オンラインビジネスの多国籍化をサポートします。';
				break;
			case 'company':
				$meta_desc = 'アドベンチャーズ株式会社の会社概要。';
				break;
			default:
				$meta_desc = get_bloginfo('description');
				break;
		}
  }elseif( is_single() ) {
		$meta_desc = get_meta_description_from('post');
	}elseif ( is_search() ) {
		$meta_desc = get_meta_description_from('search');
	}else {
		$meta_desc = get_bloginfo('description');
	}

	if (has_post_thumbnail()){
   $image = get_the_post_thumbnail_url();
 }else {
 	$image = '/wp-content/themes/advtheme/img/videomain.jpg';
 }
?>

<!DOCTYPE html>
<html lang="ja">
	<head>

		<meta charset="UTF-8">
		<meta name="keywords" content="<?php bloginfo('keywords'); ?>">
		<meta name="description" content="<?php echo($meta_desc); ?>">
		<meta property="og:description" content="<?php echo($meta_desc); ?>">
		<meta property="og:image" content="<?php echo($image); ?>">
		<meta property="og:title" content="<?php the_title_attribute();?> - <?php bloginfo('title'); ?>" />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0" />
		<link rel="icon" href="/wp-content/themes/advtheme/img/favicon.ico" />
		<!-- UIkit CSS -->
		<link rel="preload" href="/wp-content/themes/advtheme/style.css" as="style">
		<link rel="stylesheet" href="/wp-content/themes/advtheme/style.css">

		<!-- UIkit JS -->
		<script src="/wp-content/themes/advtheme/uikit/js/uikit.min.js"></script>
		<script src="/wp-content/themes/advtheme/uikit/js/uikit-icons.min.js"></script>

		<!-- WP head -->

		<?php wp_head(); ?>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-P97LV56');</script>
		<!-- End Google Tag Manager -->
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P97LV56"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header id="header" class="uk-navbar-container" uk-navbar uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: <?php $pagename=='home' ? print 'uk-navbar-transparent' : print 'navbar_dark';?> uk-light; top: 80">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item" href="/"><img width="200" height="50" id="logo" src="/wp-content/themes/advtheme/img/logo_primary.svg" uk-svg></a>
				<!-- <a class="uk-navbar-item uk-logo" href="/">Adventures Inc.</a> -->
			</div>
			<div id="menu-pc" class="uk-navbar-right">
				<!-- PC menu -->
				<ul class="uk-navbar-nav uk-nav-default uk-visible@m">

	        <li>
	            <a href="/tips/" class="">お役立ち記事</a>
	            <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                    <li class="<?php $pagename==='tips' && print 'uk-active';?>"><a href="/tips/">全て</a></li>
	                    <li class="<?php $cat_slug==='tips_web' && print 'uk-active' ;?>"><a href="/category/tips_web/">Web制作</a></li>
											<li class="<?php $cat_slug==='tips_business' && print 'uk-active' ;?> uk-hidden"><a href="/category/tips_business/">ビジネス</a></li>
					            <li class="<?php $cat_slug==='tips_marketing' && print 'uk-active' ;?>"><a href="/category/tips_marketing/">マーケティング</a></li>
					            <li class="<?php $cat_slug==='tips_translation' && print 'uk-active' ;?>"><a href="/category/tips_translation/">翻訳</a></li>
					            <li class="<?php $cat_slug==='tips_gamedev' && print 'uk-active' ;?>"><a href="/category/tips_gamedev/">ゲーム開発</a></li>
	                </ul>
	            </div>
	        </li>
	        <li class="<?php $pagename==='web_development' && print 'uk-active' ;?>"><a href="/web_development/">ウェブサイト制作</a></li>
					<li class="<?php $pagename==='localization' && print 'uk-active' ;?>"><a href="/localization/">翻訳</a></li>
					<li class="<?php $pagename==='marketing' && print 'uk-active' ;?>"><a href="/marketing/">マーケティング支援</a></li>
					<li class="<?php $pagename==='company' && print 'uk-active' ;?> uk-hidden"><a href="/company/">会社案内</a></li>
	        <li><a href="/#contact">お見積もり</a></li>
	    	</ul>
				<div class="uk-navbar-item uk-visible@m">
          <a href="https://global.adventuresjp.com/" target="_blank" class="uk-button uk-button-primary">English<span class="uk-margin-left" uk-icon="icon: forward"></span></a>
        </div>
	    	<!-- /PC menu -->
			</div>
			<!-- SP menu -->
			<div class="uk-navbar-right uk-hidden@m">
			  <a href="#offcanvas-slide" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-slide"></a>
			</div>


			<div id="offcanvas-slide" uk-offcanvas="flip: true; overlay: true">
		    <div class="uk-offcanvas-bar" >
		    	<button class="uk-offcanvas-close" type="button" uk-close></button>
	        <ul class="uk-nav uk-nav-default">
							<li class="<?php $pagename==='home' && print 'uk-active' ;?>"><a href="/">トップ</a></li>
	            <li class="uk-parent"><a href="/tips/">お役立ち記事</a>
	            	<ul class="uk-nav-sub">
									<li class="<?php $pagename==='tips' && print 'uk-active';?>"><a href="/tips/">全て</a></li>
									<li class="<?php $cat_slug==='tips_web' && print 'uk-active' ;?>"><a href="/category/tips_web/">Web制作</a></li>
									<li class="<?php $cat_slug==='tips_business' && print 'uk-active' ;?> uk-hidden"><a href="/category/tips_business/">ビジネス</a></li>
									<li class="<?php $cat_slug==='tips_marketing' && print 'uk-active' ;?>"><a href="/category/tips_marketing/">マーケティング</a></li>
									<li class="<?php $cat_slug==='tips_translation' && print 'uk-active' ;?>"><a href="/category/tips_translation/">翻訳</a></li>
									<li class="<?php $cat_slug==='tips_gamedev' && print 'uk-active' ;?>"><a href="/category/tips_gamedev/">ゲーム開発</a></li>
	            	</ul>
	            </li>

							<li class="<?php $pagename==='web_development' && print 'uk-active' ;?>"><a href="/web_development/">ウェブサイト制作</a></li>
							<li class="<?php $pagename==='localization' && print 'uk-active' ;?>"><a href="/localization/">翻訳</a></li>
							<li class="<?php $pagename==='marketing' && print 'uk-active' ;?>"><a href="/marketing/">マーケティング支援</a></li>
							<hr />
							<li class="<?php $pagename==='company' && print 'uk-active' ;?>"><a href="/company/">会社案内</a></li>
			        <li><a href="/#contact">お見積もり</a></li>
							<li><a href="https://global.adventuresjp.com/" target="_blank">English<span class="uk-margin-left" uk-icon="icon: forward"></span></a></li>
	        </ul>
					<?php get_search_form(); ?>
			  </div>
			</div>
			<!-- /SP menu -->
		</header>
