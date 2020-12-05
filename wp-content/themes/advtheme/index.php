<?php
get_header();
?>
	<section id="main" class="uk-section uk-section-default ">
		<div class="uk-container uk-height-1-1 uk-flex uk-flex-middle">
			<div class="text-box">
				<h1 class="">新しい何かをつくろう</h1>
				<div class="uk-text-lead	">Webサイト制作からマーケティングまで、 オンラインビジネスを総合サポート </div>

			</div>
			<a href="#services" class="" uk-scroll><img class="down_arrow" src="/wp-content/themes/advtheme/img/down_arrow.svg"></a>
		</div>

	</section>

	<section id="latest_blogs" class="uk-section uk-hidden">

		<div class="uk-container">
			<h2 class="uk-text-center">最新のコラム</h2>
			<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
				<?php
					if(have_posts()): while(have_posts()): the_post();
						$cat = get_the_category();
						$cat_name = $cat[0]->cat_name;
					?>
					<a class="uk-inline post_thumb">
						<div class="uk-card uk-card-default" href="<?php the_permalink(); ?>">
							<div class="post_media uk-card-media-top">
								<img src="<?php has_post_thumbnail()? the_post_thumbnail_url('yv-size') : print('/wp-content/themes/advtheme/img/blog.png'); ?>">

							</div>
							<div class="uk-card-body">
								<span class="uk-label label_cat"><?php echo($cat_name); ?></span>
								<h3 class="uk-card-title"><?php the_title(); ?></h3>
							</div>

						</div>
					</a>
				<?php endwhile; endif;
					wp_reset_postdata();?>
			</div>
			<div class="uk-margin-large-top uk-text-center ">
				<a class="dark_button" href="">もっと見る</a>
			</div>
		</div>
	</section>


	<section id="services" class="uk-section">
		<img class="oval1" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
		<div class="uk-container">
			<h2 class="light uk-text-center">サービス</h2>
			<div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<div class="uk-padding service1">
					<img class="box_shadow" data-src="/wp-content/themes/advtheme/img/service1.jpg" alt="" uk-img>
				</div>

				<div class="uk-padding">
					<h3 class="light">ウェブ制作</h3>
					<p class="light">ビジネスの拡大には、プロフェッショナルなホームページが欠かせませんね。コーポレートサイト、Eコマース、ランディングページなど、目的に合わせて効果的なウェブサイトを制作します。</p>
					<a href="/web_development/" class="white_button uk-margin-medium-top">詳しく見る<span uk-icon="arrow-right"></span></a>
				</div>
			</div>
			<div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<img class="oval2" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
				<div class="uk-padding">
					<h3 class="light">マーケティング</h3>
					<p class="light">どんな商材でもデジタルマーケティングは欠かせない時代になりました。
テキスト広告、動画広告、SNS、コンテンツマーケティングなど様々な手法があります。売り上げを拡大するために最適なツールを商材に合わせてご提案し、サポートします。</p>
					<a href="/marketing/" class="white_button uk-margin-medium-top">詳しく見る<span uk-icon="arrow-right"></span></a>
				</div>
				<div class="uk-padding service2">
					<img class="box_shadow" data-src="/wp-content/themes/advtheme/img/service2.jpg" alt="" uk-img>
				</div>
			</div>
			<div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<img class="oval3" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
				<div class="uk-padding service3">
					<img class="box_shadow" data-src="/wp-content/themes/advtheme/img/service3.jpg" alt="" uk-img>
				</div>

				<div class="uk-padding">
					<h3 class="light">ローカリゼーション</h3>
					<p class="light">国境を越えてビジネスを展開したいとき、ネイティブがサービスを翻訳してそのまま展開するだけでは不十分な場合があります。
わたしたちは単なるネイティブ翻訳サービスではありません。
ターゲット地域の文化的背景に合わせ、あなたのサービスの魅力が最も伝わる表現へと進化させます。</p>
					<a href="/localization/" class="white_button uk-margin-medium-top">詳しく見る<span uk-icon="arrow-right"></span></a>
				</div>
			</div>
		</div>
	</section>

	<section id="news" class="uk-section uk-hidden">
		<div class="uk-container">
			<h2 class="uk-text-center">最新ニュース</h2>
			<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
				<a class="uk-inline news_block">
					<div class="uk-card uk-card-hover uk-card-default uk-card-body">
		          <h3 class="uk-card-title">Hover</h3>
							<span>2020/1/1</span>
							<hr>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sollicitudin mauris, volutpat quis est enim eget magna. Ultricies aliquam, sit scelerisque dictum ac facilisi pretium, elementum. In eleifend ultricies tellus scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sollicitudin mauris, volutpat quis est enim eget magna. </p>
		      </div>
				</a>
				<a class="uk-inline news_block">
					<div class="uk-card uk-card-hover uk-card-default uk-card-body">
		          <h3 class="uk-card-title">Hover</h3>
							<span>2020/1/1</span>
							<hr>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sollicitudin mauris, volutpat quis est enim eget magna. Ultricies aliquam, sit scelerisque dictum ac facilisi pretium, elementum. In eleifend ultricies tellus scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Platea sollicitudin mauris, volutpat quis est enim eget magna. </p>
		      </div>
				</a>
			</div>
			<div class="uk-margin-large-top uk-text-center ">
				<a class="dark_button" href="">もっと見る</a>
			</div>
		</div>

	</section>



<?php
get_footer(); ?>
