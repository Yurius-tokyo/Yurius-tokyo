<?php
get_header();
?>
	<section id="main" class="uk-section uk-section-default ">
		<video class="back_video uk-visible@s" src="/wp-content/themes/advtheme/img/videomain.mp4" uk-video loop muted autoplay></video>
		<div class="uk-container uk-height-1-1 uk-flex uk-flex-middle">
			<div class="text-box">
				<!-- <h1 class="">新しい何かをつくろう</h1>
				<div class="uk-text-lead	">Webサイト制作からマーケティングまで、 オンラインビジネスを総合サポート </div> -->

			</div>
			<a href="#latest_blogs" class="circle_button"><img class="down_arrow" src="/wp-content/themes/advtheme/img/down_arrow.svg"></a>
		</div>

	</section>

	<section id="latest_blogs" class="uk-section">

		<div class="uk-container">
			<h2 class="uk-text-center">最新のお役立ち記事</h2>
			<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
				<?php
				$args = array(
					'posts_per_page' => 3,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish'
				);
				$the_query = new WP_Query($args);

				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$cat = get_the_category();
						$excerpt = get_the_excerpt();
						$cat_name = $cat[0]->cat_name;
					?>
					<a href="<?php the_permalink(); ?>" class=" uk-inline">
						<div class="uk-card uk-card-default uk-card-hover">
							<div class="uk-card-media-top uk-cover-container post_media">
								<img src="<?php has_post_thumbnail()? the_post_thumbnail_url() : print('/wp-content/themes/advtheme/img/photo3.jpg'); ?>" uk-cover>
								<canvas width="375" height="220"></canvas>

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
				<a class="dark_button" href="/tips/">もっと見る</a>
			</div>
		</div>
	</section>


	<section id="services" class="uk-section">
		<img class="oval1" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
		<div class="uk-container">
			<h2 class="light uk-text-center">サービス</h2>
			<div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<div class="uk-padding service1">
					<img class="" data-src="/wp-content/themes/advtheme/img/neon_web.png" alt="" uk-img>
				</div>

				<div class="uk-padding">
					<h3 class="light">ウェブ制作</h3>
					<p class="light">ビジネスの拡大には、プロフェッショナルなウェブサイトが欠かせませんね。コーポレートサイト、Eコマース、ランディングページなど、目的に合わせて効果的なウェブサイトを制作します。</p>
					<a href="/web_development/" class="white_button uk-margin-medium-top">詳しく見る<span uk-icon="arrow-right"></span></a>
				</div>
			</div>
			<div id="locagames" class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<img class="oval2" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
				<div class="uk-padding">
					<h3 class="light">ゲーム販売支援</h3>
					<p class="light">PCゲームマーケットプレイスLocaGamesを通じて、インディーゲームの販売や海外展開の支援を行っています。</p>
					<a href="https://loca.games/" class="white_button uk-margin-medium-top">詳しく見る<span uk-icon="arrow-right"></span></a>
				</div>
				<div class="uk-padding service2">
					<img class="" data-src="/wp-content/themes/advtheme/img/lg_logo_square.png" alt="" uk-img>
				</div>
			</div>
			<div class="uk-child-width-1-2@m uk-child-width-1-1@s uk-flex uk-flex-middle" uk-grid>
				<img class="oval3" src="/wp-content/themes/advtheme/img/oval.svg" alt="">
				<div class="uk-padding service3">
					<img class="" data-src="/wp-content/themes/advtheme/img/neon_loca.png" alt="" uk-img>
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

	<section id="news" class="uk-section">
		<div class="uk-container">
			<h2 class="uk-text-center">最新ニュース</h2>
			<div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-karge" uk-grid>
				<?php //Post
					$args = array(
						'posts_per_page' => 20,
						'paged' => $paged,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'news',
						'post_status' => 'publish'
					);
					$the_query = new WP_Query($args);

					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
							$terms = get_the_terms( $post->ID,'news-cat');
							$cat_name = $terms[0]->name;
				?>
				<a href="<?php the_permalink(); ?>" class="uk-inline news_block">
					<div class="uk-card uk-card-hover uk-card-default uk-card-body">
		          <h3 class="uk-card-title"><?php the_title(); ?></h3>
							<time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
							<hr>
		          <p><?php the_excerpt(); ?></p>
		      </div>
				</a>
				<?php endwhile; endif;
					wp_reset_postdata(); // End Post ?>
			</div>
			<div class="uk-margin-large-top uk-text-center ">
				<a class="dark_button" href="/news/">もっと見る</a>
			</div>
		</div>

	</section>



<?php
get_footer(); ?>
