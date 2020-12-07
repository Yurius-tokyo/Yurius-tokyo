<?php
get_header();
?>


	<?php  get_template_part('subnav'); ?>
	<section id="single" class="uk-section uk-section-default " >

		<div class="uk-container">
			<div class="" uk-grid>
				<div class="uk-width-expand@m uk-width-1-1@s">

					<?php if(have_posts()): while(have_posts()):the_post();
									$cat = get_the_category();
									$cat_name = $cat[0]->cat_name;
									$cat_id = $cat[0]->cat_ID;
					?>
						<div class="">
						  <h1><?php the_title(); ?></h1>
							<?php the_category(', '); ?> |
						  <time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
						</div>

						<div class="post-content">
							<?php if(has_post_thumbnail()): ?>
								<img data-src="<?php the_post_thumbnail_url(); ?>" width="" height="" alt="" uk-img>
							<?php endif; ?>

						  <?php the_content(); ?>
						</div>
						<div id="author" class="uk-card uk-card-body">
							<div class="uk-flex uk-flex-middle uk-text-center">
								<div class="uk-width-2-4@m">
			            <h3 class="uk-card-title">執筆者</h3>
								</div>
								<div class="uk-width-1-4@m">

									<?php $user_id = get_the_author_meta('ID'); echo get_avatar( $user_id ); ?>
								</div>
								<div class="uk-width-2-4@m">
									<span><?php the_author(); ?></span>
								</div>
							</div>
		        </div>

						<div id="lead" class="uk-card uk-card-body uk-text-center uk-margin-top box_shadow">
							<p class="">
								ホームページ制作のご依頼を承っています。お気軽にご相談ください。
							</p>
							<a href="#contact" uk-icon="icon: chevron-down; ratio: 2.0" uk-scroll></a>

						</div>
					<?php endwhile; endif; ?>


					<?php wp_reset_postdata(); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>
		</div>

	</section>

<?php
get_footer(); ?>
