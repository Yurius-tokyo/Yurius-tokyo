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
						<h1><?php the_title(); ?></h1>
						<div class="uk-clearfix">
						  <div class="uk-float-left">
								<?php the_category(', '); ?> |
						  	<time class="" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
							</div>
							<div class="uk-float-right sns_share uk-position-relative">
							   <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" class="uk-icon-button uk-margin-small-right" uk-icon="twitter" target="_blank"></a>
								 <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&display=popup" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook" target="_blank"></a>
								 <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="uk-icon-button  uk-margin-small-right" uk-icon="linkedin" target="_blank"></a>
								 <a href="javascript:void(0);" id="copy_button" class="uk-icon-button  uk-margin-small-right" uk-icon="push"></a>
								 <input id="show_url" class="uk-input uk-position-absolute" type="text" value="<?php the_permalink(); ?>" hidden>
							</div>
						</div>
						<hr />
						<div id="post_content">
							<?php if(has_post_thumbnail()): ?>
								<img data-src="<?php the_post_thumbnail_url(); ?>" width="" height="" alt="" uk-img>
							<?php endif; ?>

						  <?php the_content(); ?>
						</div>
						<hr />
						<div id="after_post">
							<div>
								<?php the_tags('<span class="tag_list">','</span> <span class="tag_list">','</span>'); ?>
							</div>

						</div>


						<div id="author" class="uk-card uk-card-body">
							<div class="uk-flex uk-flex-middle uk-text-center">
								<div class="uk-width-2-4@m">
			            <h3 class="uk-card-title">執筆者</h3>
								</div>
								<div class="uk-width-1-4@m uk-hidden">

									<?php $user_id = get_the_author_meta('ID'); echo get_avatar( $user_id ); ?>
								</div>
								<div class="uk-width-2-4@m">
									<span><?php the_author(); ?></span>
									<a href="https://www.linkedin.com/in/yuri-tamai-325b2779/" target="_blank"><span class="uk-margin-left" uk-icon="linkedin"></span></a>
								</div>
							</div>
		        </div>

						<div id="lead" class="uk-card uk-card-body uk-text-center uk-margin-top box_shadow">
							<p class="">
								ホームページ制作、多言語サイト制作のご依頼を承っています。お気軽にご相談ください。
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
<script>
document.getElementById("copy_button").onclick = function() {
	var urlDiv = document.createElement("textarea");
	urlDiv.id = "copyTarget";
	urlDiv.style = "position:absolute; left:-9999px; top:0px;";
	urlDiv.innerHTML = location.href;
  document.body.appendChild(urlDiv);
  let obj = document.getElementById("copyTarget");
  let range = document.createRange();
  range.selectNode(obj);
  window.getSelection().addRange(range);
  document.execCommand('copy');
  UIkit.notification({message: 'URLをコピーしました',timeout: 1000});
};
</script>
