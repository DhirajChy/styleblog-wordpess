<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Styleblog
 */
wp_head();
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script
		type="<?php echo get_template_directory_uri(); ?>/applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<script>
		new WOW().init();
	</script>

	<!-- //animation-effect -->
</head>

<body>
	<div class="header" id="ban">
		<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<div class="header-search">
					<div class="search">
						<input class="search_box" type="checkbox" id="search_box">
						<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
								aria-hidden="true"></span></label>
						<div class="search_form">
					
                            <?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-7" id="link-effect-7">
							<ul class="nav navbar-nav">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'header_menu',
										'menu_class' => 'link-effect-7',
									)
								);
								?>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
			<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s"
				style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				<ul>
					<?php
					$social_link_enabled_disabled = get_theme_mod('social_link_enabled_disabled', true);
					
					if ($social_link_enabled_disabled) {
						$facebook_link = get_theme_mod('facebook_link');
						if ($facebook_link) {
							echo '<li><a href="' . esc_url($facebook_link) . '" class="#"></a></li>';
						}

						$pin_link = get_theme_mod('pin_link');
						if ($pin_link) {
							echo '<li><a href="' . esc_url($pin_link) . '" class="pin"></a></li>';
						}

						$linkedin_link = get_theme_mod('linkedin_link');
						if ($linkedin_link) {
							echo '<li><a href="' . esc_url($linkedin_link) . '" class="in"></a></li>';
						}

						$be_link = get_theme_mod('be_link');
						if ($be_link) {
							echo '<li><a href="' . esc_url($be_link) . '" class="be"></a></li>';
						}

						$vimeo_link = get_theme_mod('vimeo_link');
						if ($vimeo_link) {
							echo '<li><a href="' . esc_url($vimeo_link) . '" class="vimeo"></a></li>';
						}
					}
					?>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-bottom">
    <div class="container">
	
        <div class="logo wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
            <h1><a href="#"><?php echo esc_html(get_theme_mod('heading', '')); ?></a></h1>
            <p>
                <label class="of"></label>
                <?php echo esc_html(get_theme_mod('subheading', '')); ?>
                <label class="on"></label>
            </p>
        </div>
		<?php
    
        ?>
    </div>
</div>

	<div class="banner">
		<div class="container">
			<h2><?php echo esc_html(get_theme_mod('heading_text', '')); ?></h2>
			<p><?php echo esc_html(get_theme_mod('subheading_text', '')); ?></p>
			<a href="<?php the_permalink();?>"><?php echo esc_html(get_theme_mod('readmore', '')); ?></a>
		</div>
	</div>
