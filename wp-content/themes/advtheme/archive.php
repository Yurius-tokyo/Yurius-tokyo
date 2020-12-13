<?php
	get_header();
?>

<?php  //get_template_part('subnav'); ?>

<section id="tips_list" class="uk-section uk-section-default">
	<div class="uk-container">
		<div class="" uk-grid>
			<div class="uk-width-expand@m uk-width-1-1@s">
				<?php
				  if(is_category()):
				    $archive_title = single_cat_title('', false).'の記事一覧';
				  elseif(is_tag()):
				    $archive_title = single_cat_title('', false).'の記事一覧';
				  elseif(is_author()):
				    $author_id = get_query_var('author');
				    $author_name = get_the_author_meta( 'display_name', $author_id );
				    $archive_title = $author_name.'が書いた記事一覧';
				  endif;

				  if(!empty($archive_title)):
				    echo '<h1>'.$archive_title.'</h1>';
				  endif;

				  if(!empty($archive_description)):
				    echo '<p>'.$archive_description.'</p>';
				  endif;
				  ?>

				<?php
					if(have_posts()): while(have_posts()): the_post();
						$cat = get_the_category();
						$cat_name = $cat[0]->cat_name;
					?>
					<div class="uk-card uk-grid-collapse uk-margin uk-box-shadow-medium post_thumb" uk-grid>
				    <div class="uk-width-2-5@m uk-width-1-1@s uk-card-media-left uk-cover-container post_media">
				        <a href="<?php the_permalink(); ?>"><img src="<?php has_post_thumbnail()? the_post_thumbnail_url() : print('/wp-content/themes/advtheme/img/photo1.png'); ?>" alt="" uk-cover></a>
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
				<?php endwhile;
					else :
						echo "<p>記事がありません</p>";
					endif;
					wp_reset_postdata(); ?>
			</div>
				<?php get_sidebar(); ?>
		</div>
	</div>

	</section>

<?php
get_footer(); ?>
