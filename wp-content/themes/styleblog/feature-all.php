<?php get_header(); ?>
<?php /* Template Name: feature-all */?>



<!-- technology-left -->

<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="agile-1">
                <div class="featured-services">
                    <h2 class="w3">FEATURES</h2>
                    <div class="featured-services-grids">
                        <div class="col-md-4 featured-services-grid">
                            
                            <div class="featured-services-grd">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <h4>vel illum qui dolorem</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia.</p>

                            </div>
                        </div>
                        <div class="col-md-4 featured-services-grid">
                            <div class="featured-services-grd">
                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                <h4>vel illum qui dolorem</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia.</p>

                            </div>
                        </div>
                        <div class="col-md-4 featured-services-grid">
                            <div class="featured-services-grd">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                <h4>vel illum qui dolorem</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia.</p>

                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="features-main">
                    <div class="fea-top">
                        <h3 class="w3">AMAZING FEATURES</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta.</p>
                    </div>
                    <div class="feature-botttom">
                    <?php


// Query posts from the "Feature1" category
$args = array(
    'category_name' => 'Amazing-Features',
    'posts_per_page' => 4,
);

$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post(); ?>
                        <div class="col-md-6 fea-grid">
                       
                            <div class="fea-img">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                                <?php } ?>
                            </div>
                            <div class="fea-text">
                                <h4><?php the_title();?></h4>
                                <p><?php the_content();?></p>
                            </div>
                            <div class="clearfix"> </div>
                              
                   
                        </div>
                        <?php
						endwhile;
                      
						wp_reset_postdata(); // Reset the post data
					else:
						echo 'No posts found in the "Amazing-Features" category.';
					endif;
					?>
                       
                        
                    </div>
                </div>
            </div>

            
        </div>
        <?php get_sidebar();?>
</div>
</diV>

<?php get_footer();