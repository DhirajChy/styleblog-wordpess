<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Styleblog
 */

get_header();
?>

<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="blog">

				<h2 class="w3">TRAVEL</h2>
				<div class="blog-grids1">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Travel2',
						'posts_per_page' => 6,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="col-md-6 blog-grid">
								<div class="blog-grid-left1">
									<?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"
												class="img-responsive"></a>
									<?php } ?>
								</div>
								<div class="blog-grid-right1">
									<a href="<?php the_permalink() ?>">
										<?php the_title(); ?>
									</a>
									<h4>28 July 2023</h4>
									<p>
										<?php the_content(); ?>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="more m1">
									<a class="btn effect6" href="<?php the_permalink(); ?>">Learn More</a>
								</div>
							</div>

							<?php
						endwhile;
					

						wp_reset_postdata(); // Reset the post data
					else:
						echo 'No posts found in the "Feature4" category.';
					endif;
					?>
				</div>


			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();