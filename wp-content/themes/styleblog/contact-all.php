<?php get_header(); ?>
<?php /* Template Name: contact */?>




<!-- technology-left -->
<div>
    <div>
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="contact-section">
                <h2 class="w3">CONTACT</h2>


                <div class="contact-grids">
                    <div class="col-md-8 contact-grid">
                        <?php $args = array(
                            'p' => '217',
                            'post_type' => 'page'

                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                                <p>Nemo enim ips voluptatem voluptas sitsper natuaut odit aut fugit consequuntur magni dolores
                                    eosqratio nevoluptatem amet eism com odictor ut ligulate cot ameti dapibu</p>
                                <?php the_content();
                                ?>
                            </div>
                        <?php }
                        } ?>
                    <div class="col-md-4 contact-grid1">
                        <?php
                    $office_num = get_post_meta(get_the_ID(), 'office_num', true);
                      $mobile_num = get_post_meta(get_the_ID(), 'mobile_num', true);
                      $Email = get_post_meta(get_the_ID(), 'Email', true);
                      $Fax = get_post_meta(get_the_ID(), 'Fax', true);
                      ?>
                        <h4>Address</h4>
                        <div class="contact-top">


                            <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> <?php echo esc_html($office_num); ?>
                            </li>
                            <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> <?php echo esc_html($mobile_num); ?></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a
                                    href="mailto:info@example.com"><?php echo esc_html($Email); ?></a></li>
                            <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i><?php echo esc_html($Fax); ?></li>
                        </ul>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584"
                        allowfullscreen></iframe>
                </div>

            </div>
        </div>
        <?php get_sidebar();?>
        </div>
                    </div>
        <?php get_footer();