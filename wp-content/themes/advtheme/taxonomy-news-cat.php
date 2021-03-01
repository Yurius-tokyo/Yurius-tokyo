<?php
/**
 * Template Name: News */
get_header();

$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 20,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'news',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);

?>

	<section id="tips_list" class="uk-section uk-section-default">
		<div class="uk-container">
			<div class="" uk-grid>
				<div class="uk-width-expand@m uk-width-1-1@s">
					<h1><?php the_taxonomies(); ?></h1>
					<?php //Post
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
								$terms = get_the_terms( $post->ID,'news-cat');
								$cat_name = $terms[0]->name;
					?>
					<div class="uk-card uk-grid-collapse uk-margin uk-box-shadow-medium post_thumb">
				    <div class="">
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
			</div>
		</div>

	</section>

<?php
get_footer(); ?>
