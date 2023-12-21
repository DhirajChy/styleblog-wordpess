<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Styleblog
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- <aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside>#secondary -->


<div class="col-md-3 technology-right">


	<div class="blo-top1">

		<div class="tech-btm">

			<?php

			dynamic_sidebar('custom-sidebar1');

			?>


			<h4>Popular Posts </h4>

			<?php


			// Query posts from the "Feature1" category
			$args = array(
				'category_name' => 'Feature7',
				'posts_per_page' => 5,
			);

			$query = new WP_Query($args);

			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>
					<div class="blog-grids wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

						<div class="blog-grid-left">
							<?php if (has_post_thumbnail()) { ?>
								<a href="singlepage.html"><img src="<?php echo the_post_thumbnail_url() ?>" class="img-responsive"
										alt=""></a>
							<?php } ?>

						</div>
						<div class="blog-grid-right">


							<h5><a href="singlepage.html">
									<?php the_title(); ?>
								</a> </h5>
						</div>
						<div class="clearfix"> </div>


					</div>
					<?php
				endwhile;
				wp_reset_postdata(); // Reset the post data
			else:
				echo 'No posts found in the "Feature7" category.';
			endif;
			?>

			<div class="insta wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Instagram</h4>

				<ul>
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature8',
						'posts_per_page' => 9,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>

							<?php if (has_post_thumbnail()) { ?>
								<li><a href="singlepage.html"><img src="<?php echo get_the_post_thumbnail_url(); ?>"
											class="img-responsive" alt=""></a></li>
							<?php } ?>
							<?php
						endwhile;
						wp_reset_postdata(); // Reset the post data
					else:
						echo 'No posts found in the "Feature8" category.';
					endif;
					?>
				</ul>


			</div>

			<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at
				pro</p>
			<div class="twt">

				<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
					class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button"
					title="Twitter Tweet Button"
					src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag"
					style="position: static; visibility: visible; width: 166px; height: 28px;"
					data-hashtag="TwitterStories"></iframe>
				<script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>



	</div>


</div>

<div class="clearfix"></div>