<?php
get_header();
?>


	<section id="single" class="uk-section uk-section-default " >

		<div class="uk-container">
			<div class="" uk-grid>
				<div class="uk-width-expand@m uk-width-1-1@s">

					<?php if(have_posts()): while(have_posts()):the_post();
									$terms = get_the_terms( $post->ID,'news-cat');
									$cat_name = $terms[0]->name;
									$cat_link = get_term_link( $terms[0]->term_id ,'news-cat' );
					?>
						<h1><?php the_title(); ?></h1>
						<div class="uk-clearfix">
						  <div class="uk-float-left">
								<a href="<?php echo( $cat_link ); ?>"><?php echo($cat_name); ?></a> |
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


					<?php endwhile; endif; ?>


					<?php wp_reset_postdata(); ?>
				</div>

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
