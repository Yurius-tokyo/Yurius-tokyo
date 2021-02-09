<?php
/**
 * Template Name: Tips */
get_header();

$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 20,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);

?>
	<section id="main_tips" class="uk-section uk-section-default uk-hidden">
		<div class="uk-container">
			<div uk-slider>

		    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

	        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
	            <li>
	                <img src="/wp-content/themes/advtheme/img/photo1.png" alt="">
	                <div class="uk-position-center uk-panel"><h1>1</h1></div>
	            </li>
	            <li>
	                <img src="/wp-content/themes/advtheme/img/photo2.jpg" alt="">
	                <div class="uk-position-center uk-panel"><h1>2</h1></div>
	            </li>
	            <li>
	                <img src="/wp-content/themes/advtheme/img/photo3.jpg" alt="">
	                <div class="uk-position-center uk-panel"><h1>3</h1></div>
	            </li>
	        </ul>

	        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
	        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

		    </div>

		    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

			</div>
		</div>
	</section>

	<?php get_template_part('subnav'); ?>

	<section id="tips_list" class="uk-section uk-section-default">
		<div class="uk-container">
			<div class="" uk-grid>
				<div class="uk-width-expand@m uk-width-1-1@s">
					<?php //Post
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
								$cat = get_the_category();
								$cat_name = $cat[0]->cat_name;
					?>
					<div class="uk-card uk-grid-collapse uk-margin uk-box-shadow-medium post_thumb" uk-grid>
				    <div class="uk-width-2-5@m uk-width-1-1@s uk-card-media-left uk-cover-container post_media">
				        <a href="<?php the_permalink(); ?>"><img src="<?php has_post_thumbnail()? the_post_thumbnail_url() : print('/wp-content/themes/advtheme/img/photo3.jpg'); ?>" alt="" uk-cover></a>
				        <canvas width="395" height="275"></canvas>
				    </div>
				    <div class="uk-width-3-5@m uk-width-1-1@s">
							<a href="<?php the_permalink(); ?>">
				        <div class="uk-card-body">

											<span class="uk-label label_cat uk-margin-right"><?php echo($cat_name); ?></span><time class="uk-label" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
					            <h3 class="uk-card-title"><?php the_title(); ?></h3>
					            <?php the_excerpt(); ?>

				        </div>
							</a>
				    </div>
					</div>
					<?php endwhile; endif;
					wp_reset_postdata(); // End Post ?>

				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>

	</section>

<?php
get_footer(); ?>
