<?php
/**
 * Template Name: LATEST TOPIC */
get_header();

$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 3,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);

?>
	<section id="pre-header" class="uk-visible@m"></section>
	<section id="single" class="uk-section uk-section-default">
		<div class="uk-container uk-container-expand">
			<h2 class="uk-heading-bullet">ALL TOPICS</h2>
			<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
				<?php
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
					<div class="post-thumb">
						<a href="<?php the_permalink(); ?>">
						<div class="uk-inline">
							<img src="<?php has_post_thumbnail()? the_post_thumbnail_url('yv-size') : print('/wp-content/themes/yvtheme/assets/img/img3.png'); ?>">

							<div class="uk-overlay uk-overlay-primary uk-position-bottom">
						    <h3><?php the_title(); ?></h3>
						    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
							</div>
							</a>
						</div>
					</div>
				<?php endwhile; endif;
					wp_reset_postdata();?>

			</div>
		</div>

	</section>

<?php
get_footer(); ?>
