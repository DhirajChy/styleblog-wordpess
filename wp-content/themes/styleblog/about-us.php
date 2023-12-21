<?php get_header();?>
<?php /* Template Name: about-us */?>

<!-- technology-left -->
<div class="technology">
    <div class="container">
  
        <div class="col-md-9 technology-left">
      
            <div class="w3agile-1">
                <div class="welcome">
                
                    <div class="welcome-top heading">
                    <?php if(have_posts()): ?>
                                <?php while(have_posts()):
                  the_post(); ?>
                           
                        <h2 class="w3">WELCOME</h2>
                        <div class="welcome-bottom">
                        
                            <img src="<?php echo the_post_thumbnail_url();?>" class="img-responsive" alt="">
                           <p><?php the_content();?></p>
                               
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>

                    </div>
                   
                </div>
                <div class="team">
                    <h3 class="team-heading">Meet our team</h3>
                    <div class="team-grids">

                        <div class="col-md-6 team-grid">
                        <?php
                      $team1_name = get_post_meta(get_the_ID(), 'team1_name', true);
                      $team1_post = get_post_meta(get_the_ID(), 'team1_post', true);
                      $team1_detail = get_post_meta(get_the_ID(), 'team1_detail', true);
                      $image1_url = get_post_meta(get_the_ID(), 'image', true);
                            ?>
                            <div class="team-grid1">
                            <?php if ($image1_url) : ?>
                              <img src="<?php echo esc_url($image1_url); ?>">
                                  <?php endif; ?>
                                
                                
                                <div class="p-mask">
                                    <p><?php echo esc_html($team1_detail); ?></p>

                                </div>
                            </div>
                            <h5><?php echo esc_html($team1_name); ?><span><?php echo esc_html($team1_post); ?></span></h5>
                            <ul class="social">
                                <li><a class="social-facebook" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Facebook</span></div>
                                    </a></li>
                                <li><a class="social-twitter" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Twitter</span></div>
                                    </a></li>
                                <li><a class="social-google" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Google+</span></div>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 team-grid">
                        <?php
                           $team2_name = get_post_meta(get_the_ID(), 'team2_name', true);
                           $team2_post = get_post_meta(get_the_ID(), 'team2_post', true);
                            $team2_detail = get_post_meta(get_the_ID(), 'team2_detail', true);
                             $image2_url = get_post_meta(get_the_ID(), 'image2', true);
                                   ?>
                            <div class="team-grid1">
                            <?php if ($image2_url) : ?>
                                    <img src="<?php echo esc_url($image2_url); ?>">
                                       <?php endif; ?>
                                <div class="p-mask">
                                    <p><?php echo esc_html($team2_detail); ?></p>

                                </div>
                            </div>
                            <h5><?php echo esc_html($team2_name); ?><span><?php echo esc_html($team2_post); ?></span></h5>
                            <ul class="social">
                                <li><a class="social-facebook" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Facebook</span></div>
                                    </a></li>
                                <li><a class="social-twitter" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Twitter</span></div>
                                    </a></li>
                                <li><a class="social-google" href="#">
                                        <i></i>
                                        <div class="tooltip"><span>Google+</span></div>
                                    </a></li>
                            </ul>
                        </div>


                        <div class="clearfix"> </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <?php get_sidebar();?>
       
    </div>

</div>


<?php get_footer();