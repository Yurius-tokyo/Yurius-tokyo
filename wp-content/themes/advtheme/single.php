<?php
get_header();
?>
	<?php if(has_post_thumbnail()): ?>
	<section id="article-visual" class="uk-section uk-section-default uk-background-cover uk-height-1-1" data-src="<?php the_post_thumbnail_url(); ?>" uk-img>
		<div><img></div>
	</section>
	<?php endif; ?>
	<section id="single" class="uk-section uk-section-default " >
		
		<div class="uk-container uk-container-expand">
			<div class="uk-child-width-1-1@m uk-child-width-1-1@s uk-grid-divider" uk-grid>
				<div class=" ">
					
					<?php if(have_posts()): while(have_posts()):the_post(); ?>
	  
					  <h1><a class="uk-link-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					  
					  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
					  <div><?php the_category(', '); ?></div>
					  <p class="contents"><?php the_content(); ?></p>
					  
					<?php endwhile; endif; ?>
					  
					<?php previous_post_link('%link','Previous'); ?>
					<?php next_post_link('%link','Next'); ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>

	</section>

<?php
get_footer(); ?>