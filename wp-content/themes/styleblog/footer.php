<?php wp_footer();
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Styleblog
 */

?>

<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-left wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
		<?php
              
			  dynamic_sidebar('custom-footer1');
		  
		  ?>
			
			
			<div class="bht1">
				<a href="singlepage.html">Read More</a>
			</div>
		</div>
		<div class="col-md-4 footer-middle wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
	
		<?php
              
			  dynamic_sidebar('custom-footer2');
		  
		  ?>
		</div>
		<div class="col-md-4 footer-right wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
		<?php
              
			  dynamic_sidebar('custom-footer3');
		  
		  ?>
		

			<div class="clearfix"> </div>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="copyright wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="container">
	<p><?php echo esc_html(get_theme_mod('copyright_text', '')); ?></p>
		
	</div>
</div>

</body>

</html>