<?php get_header(); ?>
<?php /* Template Name: home-page */?>

<div class="services w3l wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="container">
		<div class="grid_3 grid_5">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab"
							data-toggle="tab" aria-controls="expeditions" aria-expanded="true">FASHION</a></li>
					<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab"
							aria-controls="safari">TRAVEL</a></li>
					<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab"
							aria-controls="trekking">MUSIC</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">

					<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">
						<img src="<?php echo esc_url(get_theme_mod('fashion_image1')); ?>" alt="Fashion Image 1">
						<img src="<?php echo esc_url(get_theme_mod('fashion_image2')); ?>" alt="Fashion Image 2">
						<img src="<?php echo esc_url(get_theme_mod('fashion_image3')); ?>" alt="Fashion Image 3">
					</div>



					<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
						<img src="<?php echo esc_url(get_theme_mod('travel_image1', '')); ?>" alt="Travel Image 1">
						<img src="<?php echo esc_url(get_theme_mod('travel_image2', '')); ?>" alt="Travel Image 2">
						<img src="<?php echo esc_url(get_theme_mod('travel_image3', '')); ?>" alt="Travel Image 3">

					</div>



					<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">


						<img src="<?php echo esc_url(get_theme_mod('music_image1', '')); ?>" alt="Music Image 1">
						<img src="<?php echo esc_url(get_theme_mod('music_image2', '')); ?>" alt="Music Image 2">
						<img src="<?php echo esc_url(get_theme_mod('music_image3', '')); ?>" alt="Music Image 3">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<!-- technology-left -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="tech-no">
				<!-- technology-top -->

				<div class="tc-ch wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature2',
						'posts_per_page' => 1,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post();
							?>

							<div class="tch-img">
								<?php if (has_post_thumbnail()) { ?>
									<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"
											class="img-responsive" alt=""></a>
								<?php } ?>


							</div>

							<h3><a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a></h3>
							<h6>
								<?php styleblog_posted_by(); ?>
								<?php styleblog_posted_on(); ?>
							</h6>
							<p>
								<?php the_content(); ?>
							</p>
							<div class="bht1">
								<a href="<?php the_permalink(); ?>">Continue Reading</a>
							</div>


							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
							<?php
						endwhile;

					else:
						echo 'No posts found in the "Feature2" category.';
					endif;
					wp_reset_postdata(); // Reset the post data
					?>
				</div>
				<div class="clearfix"></div>
				<!-- technology-top -->
				<!-- technology-top -->
				<div class="w3ls">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature3',
						'posts_per_page' => 2,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="col-md-6 w3ls-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">

								<div class="tc-ch">
									<div class="tch-img">
										<?php if (has_post_thumbnail()) { ?>
											<a href="<?php the_permalink(); ?>">
												<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive"
													alt=""></a>
										<?php } ?>
									</div>

									<h3><a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a></h3>
									<h6>
										<?php styleblog_posted_by(); ?>
										<?php styleblog_posted_on(); ?>
									</h6>
									<p>
										<?php the_content(); ?>
									</p>
									<div class="bht1">
										<a href="<?php the_permalink(); ?>">Read More</a>
									</div>
									<div class="soci">
										<ul>
											<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
											<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>

							</div>
							<?php
						endwhile;

					else:
						echo 'No posts found in the "Feature3" category.';
					endif;
					wp_reset_postdata(); // Reset the post data
					?>
				</div>

				<div class="clearfix"></div>






				<!-- technology-top -->
				<div class="wthree">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature4',
						'posts_per_page' => 1,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="tch-img">
									<?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"
												class="img-responsive" alt=""></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<h3><a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a></h3>
								<h6>
									<?php styleblog_posted_by(); ?>
									<?php styleblog_posted_on(); ?>
								</h6>
								<p>
									<?php the_content(); ?>
								</p>
								<div class="bht1">
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
								<div class="soci">
									<ul>

										<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
										<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>

							</div>
							<div class="clearfix"></div>
							<?php
						endwhile;

					else:
						echo 'No posts found in the "Feature4" category.';
					endif;
					wp_reset_postdata(); // Reset the post data
					?>
				</div>
				<div class="wthree">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature5',
						'posts_per_page' => 1,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="tch-img">
									<?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"
												class="img-responsive" alt=""></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<h3><a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a></h3>
								<h6>
									<?php styleblog_posted_by(); ?>
									<?php styleblog_posted_on(); ?>
								</h6>
								<p>
									<?php the_content(); ?>
								</p>
								<div class="bht1">
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
								<div class="soci">
									<ul>

										<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
										<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>

							</div>
							<div class="clearfix"></div>
							<?php
						endwhile;

					else:
						echo 'No posts found in the "Feature5" category.';
					endif;
					wp_reset_postdata(); // Reset the post data
					?>
				</div>
				<div class="wthree">
					<?php


					// Query posts from the "Feature1" category
					$args = array(
						'category_name' => 'Feature6',
						'posts_per_page' => 1,
					);

					$query = new WP_Query($args);

					if ($query->have_posts()):
						while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="col-md-6 wthree-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="tch-img">
									<?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"
												class="img-responsive" alt=""></a>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-6 wthree-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
								<h3><a href="singlepage.html">
										<?php the_title(); ?>
									</a></h3>
								<h6>
									<?php styleblog_posted_by(); ?>
									<?php styleblog_posted_on(); ?>
								</h6>
								<p>
									<?php the_content(); ?>
								</p>
								<div class="bht1">
									<a href="<?php the_permalink(); ?>">Read More</a>
								</div>
								<div class="soci">
									<ul>

										<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
										<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>

							</div>
							<div class="clearfix"></div>
							<?php
						endwhile;

					else:
						echo 'No posts found in the "Feature6" category.';
					endif;
					wp_reset_postdata(); // Reset the post data
					
					?>

				</diV>





			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();