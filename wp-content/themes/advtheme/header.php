<?php
	if ( is_home() ) {
    $pagename = 'home';

  }else{
  	$post = get_post();
  	$pagename = $post -> post_name;

  }
?>

<!DOCTYPE html>
<html lang="ja">
	<head>

		<meta charset="UTF-8">
		<meta name="keywords" content="<?php bloginfo('keywords'); ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=0.5,user-scalable=yes,initial-scale=1.0" />
		<link rel="icon" href="/wp-content/themes/advtheme/img/favicon.ico" />
		<!-- UIkit CSS -->
		<link rel="stylesheet" href="/wp-content/themes/advtheme/style.css">

		<!-- UIkit JS -->
		<script src="/wp-content/themes/advtheme/uikit/js/uikit.min.js"></script>
		<script src="/wp-content/themes/advtheme/uikit/js/uikit-icons.min.js"></script>

		<!-- Plugins -->

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
		<header class="uk-navbar-container" uk-navbar uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: <?php $pagename=='home' ? print 'uk-navbar-transparent' : print 'navbar_dark';?> uk-light; top: 80">
			<div class="uk-navbar-left">
				<a class="uk-navbar-item" href="/"><img width="200" height="50" id="logo" src="/wp-content/themes/advtheme/img/logo_primary.svg" uk-svg></a>
				<!-- <a class="uk-navbar-item uk-logo" href="/">Adventures Inc.</a> -->
			</div>
			<div id="menu-pc" class="uk-navbar-right">
				<!-- PC menu -->
				<ul class="uk-navbar-nav uk-nav-default uk-visible@m">

	        <li>
	            <li><a href="/tips/" class="">お役立ち記事</a></li>
	            <div class="uk-navbar-dropdown uk-hidden">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                    <li class="<?php $pagename==='' && print 'uk-active';?>"><a href="/">全て</a></li>
	                    <li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">Web制作</a></li>
	                    <li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">ビジネス</a></li>
											<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">マーケティング</a></li>
											<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">コラム</a></li>
	                </ul>
	            </div>
	        </li>
	        <li class="<?php $pagename==='web_development' && print 'uk-active' ;?>"><a href="/web_development/">ホームページ制作</a></li>
					<li class="<?php $pagename==='marketing' && print 'uk-active' ;?>"><a href="/marketing/">マーケティング支援</a></li>
					<li class="<?php $pagename==='localization' && print 'uk-active' ;?>"><a href="/localization/">翻訳</a></li>
					<li class="<?php $pagename==='company' && print 'uk-active' ;?> uk-hidden"><a href="/company/">会社案内</a></li>
	        <li><a href="/#contact">お見積もり</a></li>
	    	</ul>
				<div class="uk-navbar-item uk-visible@m">
          <a href="https://global.adventuresjp.com/" target="_blank" class="uk-button uk-button-primary">Global Services<span class="uk-margin-left" uk-icon="icon: forward"></span></a>
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
	            	<ul class="uk-nav-sub uk-hidden">
									<li class="<?php $pagename==='' && print 'uk-active';?>"><a href="/">全て</a></li>
									<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">Web制作</a></li>
									<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">ビジネス</a></li>
									<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">マーケティング</a></li>
									<li class="<?php $pagename==='' && print 'uk-active' ;?>"><a href="/">コラム</a></li>
	            	</ul>
	            </li>

							<li class="<?php $pagename==='web_development' && print 'uk-active' ;?>"><a href="/web_development/">ホームページ制作</a></li>
							<li class="<?php $pagename==='marketing' && print 'uk-active' ;?>"><a href="/marketing/">マーケティング支援</a></li>
							<li class="<?php $pagename==='localization' && print 'uk-active' ;?>"><a href="/localization/">翻訳</a></li>
							<hr />
							<li class="<?php $pagename==='company' && print 'uk-active' ;?>"><a href="/company/">会社案内</a></li>
			        <li><a href="/#contact">お見積もり</a></li>
	        </ul>
			  </div>
			</div>
			<!-- /SP menu -->
		</header>
