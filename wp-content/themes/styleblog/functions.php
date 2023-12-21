<?php
/**
 * Styleblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Styleblog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function styleblog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Styleblog, use a find and replace
		* to change 'styleblog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'styleblog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'styleblog' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'styleblog_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'styleblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function styleblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'styleblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'styleblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function styleblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'styleblog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'styleblog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'styleblog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function styleblog_scripts() {
	wp_enqueue_style( 'styleblog-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'styleblog-boostrap-style', get_template_directory_uri() .'/css/bootstrap.css',array(), _S_VERSION );
	wp_enqueue_style( 'styleblog-style-style', get_template_directory_uri() . '/css/style.css',array(), _S_VERSION );
	wp_enqueue_style( 'styleblog-animate-min-style', get_template_directory_uri() . '/css/animate.min.css',array(), _S_VERSION );
	wp_enqueue_style( 'styleblog-google-font-style', '//fonts.googleapis.com/css?family=Raleway:400,600,700', array(), _S_VERSION );


	wp_style_add_data( 'styleblog-style', 'rtl', 'replace' );

	


	wp_enqueue_script( 'styleblog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'styleblog-jquery-navigation', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'styleblog-boostrap-min-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'styleblog-wow-min-navigation', get_template_directory_uri() . 'js/wow.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'styleblog_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//footer function
function mythememr_register_footer_sidebar() {
	register_sidebar(array(
		'name' => 'My Custom footer1',
	   'id' => 'custom-footer1',
	   'description' => 'This is a custom footer.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
}
add_action('widgets_init', 'mythememr_register_footer_sidebar');
function register_custom_footer_sidebar() {
    register_sidebar(array(
        'name'          => ' My Custom Footer 2', 
        'id'            => 'custom-footer2',
        'description'   => __('Custom footer sidebar 1', 'styleblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_custom_footer_sidebar');

//post function
function register_custom_footer_post() {
    register_sidebar(array(
        'name'          => ' My Custom footer3', 
        'id'            => 'custom-footer3',
        'description'   => __('Custom footer sidebar ', 'styleblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_custom_footer_post');


function register_sidebar1_post() {
    register_sidebar(array(
        'name'          => ' My Custom sidebar1', 
        'id'            => 'custom-sidebar1',
        'description'   => __('Custom footer sidebar ', 'styleblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_sidebar1_post');
function register_sidebar2_post() {
    register_sidebar(array(
        'name'          => ' My Custom sidebar2', 
        'id'            => 'custom-sidebar2',
        'description'   => __('Custom footer sidebar ', 'styleblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_sidebar2_post');
function register_header1_post() {
    register_sidebar(array(
        'name'          => ' My Custom Header1', 
        'id'            => 'custom-header1',
        'description'   => __('Custom header ', 'styleblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_header1_post');

//
function menu_register(){
			
	register_nav_menus(
		array(
			'header_menu' => __('Header Menu'),
			'footer_menu' => __('Footer Menu'),  )

   );
   
}
add_action('init','menu_register');
//
// <!-- page add meta box -->
add_action('admin_enqueue_scripts',function(){
    wp_enqueue_script('myjs',get_template_directory_uri().'/js/admin.js',array(),true);
});
function team1info() {
	
	
	echo '<div>
	<label>Team1 Name</label>
	<input type="text"  name="team1name" value="' .get_post_meta(get_the_ID(), 'team1_name', true) . '">
	</div>';
	echo '<label>Team1 Post</label>
	<input type="text" " name="team1post" value="'.get_post_meta(get_the_ID(), 'team1_post', true).'">';

	echo '<label>Team1 Detail</label>
	<input type="text" " name="team1detail" value="'.get_post_meta(get_the_ID(), 'team1_detail', true).'">';
 
	echo '<div>
	<label>Team1 image</label>
	<input type="file" id="image1" name="image1">
	<img src="' .get_post_meta(get_the_ID(), 'image', true). '" style="max-width: 20%; height: auto;">
	</div>';
 }
 
 function page_add_meta_box() {
	$current_page_template = get_page_template_slug();
	if($current_page_template == 'about-us.php'){

	add_meta_box('Team1', 'Team Member 1', 'team1info', 'page', 'normal', 'high');
 }
}
 add_action('add_meta_boxes', 'page_add_meta_box');
 
 // Save post
 add_action('save_post', 'save_team1_info');
 
 function save_team1_info($page_id) {
	 global $post;
	if (isset($_POST['team1name'])) {
		
		
		// Check for incoming data
		update_post_meta($page_id, 'team1_name', $_POST['team1name']);
	}
	global $post;
	if (isset($_POST['team1post'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'team1_post',$_POST['team1post']);
		
 
	}

	global $post;
	if (isset($_POST['team1detail'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'team1_detail',$_POST['team1detail']);
 
	}
  if (isset($_FILES['image1']['name']) && ($_FILES['image1']['error'] === UPLOAD_ERR_OK))  {
	   $uploadedfile = $_FILES['image1'];
	   $upload_overrides = array('test_form' => false);
	   $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
 
	   if ($movefile && !isset($movefile['error'])) {
		   update_post_meta($page_id, 'image',($movefile['url']));
	   } else {
		   echo 'Error uploading image: ' . $movefile['error'];
	   }
   }
 }


 function team2info() {
	echo '<div>
	<label>Team1 Name</label>
	<input type="text"  name="team2name" value="' .get_post_meta(get_the_ID(), 'team2_name', true) . '">
	</div>';
	echo '<label>Team2 Post</label>
	<input type="text" " name="team2post" value="'.get_post_meta(get_the_ID(), 'team2_post', true).'">';
	echo '<label>Team2 Detail</label>
	<input type="textarea" " name="team2detail" value="'.get_post_meta(get_the_ID(), 'team2_detail', true).'">';
 
 
	echo '<div>
	<label>Team1 image</label>
	<input type="file" id="image2" name="image2">
	<img src="' .get_post_meta(get_the_ID(), 'image2', true). '" style="max-width: 20%; height: auto;">
	</div>';
 }
 
 function pages_add_meta_box() {
	$current_page_template = get_page_template_slug();
	if($current_page_template == 'about-us.php'){

	add_meta_box('Team2', 'Team Member 2', 'team2info', 'page', 'normal', 'high');
 }
}
 
 add_action('add_meta_boxes', 'pages_add_meta_box');
 
 // Save post
 add_action('save_post', 'save_team2_info');
 
 function save_team2_info($page_id) {
	 global $post;
	if (isset($_POST['team2name'])) {
		
		
		// Check for incoming data
		update_post_meta($page_id, 'team2_name', $_POST['team2name']);
	}
	global $post;
	if (isset($_POST['team2post'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'team2_post',$_POST['team2post']);
 
	}
	global $post;
	if (isset($_POST['team2detail'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'team2_detail',$_POST['team2detail']);
 
	}
  if (isset($_FILES['image2']['name']) && ($_FILES['image2']['error'] === UPLOAD_ERR_OK))  {
	   $uploadedfile = $_FILES['image2'];
	   $upload_overrides = array('test_form' => false);
	   $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
 
	   if ($movefile && !isset($movefile['error'])) {
		   update_post_meta($page_id, 'image2',($movefile['url']));
	   } else {
		   echo 'Error uploading image: ' . $movefile['error'];
	   }
   }
 }


                        
 function addressinfo() {
	
	
	echo '<div>
	<label>office Number</label>
	<input type="text"  name="officenum" value="' .get_post_meta(get_the_ID(), 'office_num', true) . '">
	</div>';
	echo '<label>Mobile Number</label>
	<input type="text" " name="mobilenum" value="'.get_post_meta(get_the_ID(), 'mobile_num', true).'">';
	echo '<label>Email</label>
	<input type="textarea" " name="email" value="'.get_post_meta(get_the_ID(), 'Email', true).'">';
	echo '<label>Fax</label>
	<input type="textarea" " name="fax" value="'.get_post_meta(get_the_ID(), 'Fax', true).'">';
 
 
 }
 
 function address_add_meta_box() {
	$current_page_template = get_page_template_slug();
	if($current_page_template == 'contact-all.php'){

	add_meta_box('Adress', 'Address Information', 'addressinfo', 'page', 'normal', 'high');
 }
}
 
 add_action('add_meta_boxes', 'address_add_meta_box');
 
 // Save post
 add_action('save_post', 'address_info');
 
 function address_info($page_id) {
	 global $post;
	if (isset($_POST['officenum'])) {
		
		
		// Check for incoming data
		update_post_meta($page_id, 'office_num', $_POST['officenum']);
	}
	global $post;
	if (isset($_POST['mobilenum'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'mobile_num',$_POST['mobilenum']);
 
	}
	global $post;
	if (isset($_POST['email'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'Email',$_POST['email']);
 
	}
	global $post;
	if (isset($_POST['fax'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'Fax',$_POST['fax']);
 
	}
 }


                        
//customizaton api

function customize_social_links($wp_customize) {
	// Add a section for social links
	$wp_customize->add_section('social_links', array(
		'title' => __('Social Links', 'styleblog'),
		'priority' => 30,
	));

	// Add settings and controls for Facebook link
	$wp_customize->add_setting('facebook_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('facebook_link', array(
		'label' => __('Facebook', 'styleblog'),
		'section' => 'social_links',
		'type' => 'text',
	));

	// Add settings and controls for Twitter link
	$wp_customize->add_setting('pin_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('pin_link', array(
		'label' => __('Pin Url', 'styleblog'),
		'section' => 'social_links',
		'type' => 'text',
	));




$wp_customize->add_setting('linkedin_link', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control('linkedin_link', array(
	'label' => __('Linkedin', 'styleblog'),
	'section' => 'social_links',
	'type' => 'text',
));


$wp_customize->add_setting('be_link', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control('be_link', array(
	'label' => __('BE Url', 'styleblog'),
	'section' => 'social_links',
	'type' => 'text',
));


$wp_customize->add_setting('vimeo_link', array(
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control('vimeo_link', array(
	'label' => __('Vimeo Url', 'styleblog'),
	'section' => 'social_links',
	'type' => 'text',
));



}
add_action('customize_register', 'customize_social_links');

function customize_enable_links($wp_customize) {
	// Add a section for social links
	$wp_customize->add_section('social_links', array(
		'title' => __('Social Links', 'styleblog'),
		'priority' => 30,
	));

$wp_customize->add_setting('social_link_enabled_disabled', array(
	'default' => true, 
	'sanitize_callback' => 'sanitize_checkbox',
));
$wp_customize->add_control('social_link_enabled_disabled', array(
	'label' => __('Enable/Disable Social Link', 'styleblog'),
	'section' => 'social_links',
	'type' => 'checkbox',
));
}
add_action('customize_register', 'customize_enable_links');


function customize_copyright_policy($wp_customize) {
	$wp_customize->add_section('copyright_policy', array(
		'title' => __('Copyright Policy', 'styleblog'),
		'priority' => 90,
	));

	// Add setting and control for Copyright Text
	$wp_customize->add_setting('copyright_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('copyright_text', array(
		'label' => __('Copyright Text', 'styleblog'),
		'section' => 'copyright_policy',
		'type' => 'textarea', 
	));

	
}

add_action('customize_register', 'customize_copyright_policy');



function customize_style_logo($wp_customize) {
	
	$wp_customize->add_section('style_logo', array(
		'title' => __('Style Logo', 'styleblog'),
		'priority' => 35,
	));

	
	$wp_customize->add_setting('heading', array(
		'default' => '',
		
	));
	$wp_customize->add_control('heading', array(
		'label' => __('Heading', 'styleblog'),
		'section' => 'style_logo',
		'type' => 'text',
	));


$wp_customize->add_setting('subheading', array(
	'default' => '',
	
));
$wp_customize->add_control('subheading', array(
	'label' => __('Subheading', 'styleblog'),
	'section' => 'style_logo',
	'type' => 'text',
));

}
add_action('customize_register', 'customize_style_logo');

function customize_banner($wp_customize) {
	
	$wp_customize->add_section('style_banner', array(
		'title' => __('Banner', 'styleblog'),
		'priority' => 100,
	));

	
	$wp_customize->add_setting('heading_text', array(
		'default' => '',
		
	));
	$wp_customize->add_control('heading_text', array(
		'label' => __('Heading', 'styleblog'),
		'section' => 'style_banner',
		'type' => 'text',
	));


$wp_customize->add_setting('subheading_text', array(
	'default' => '',
	
));
$wp_customize->add_control('subheading_text', array(
	'label' => __('Subheading', 'styleblog'),
	'section' => 'style_banner',
	'type' => 'text',
));
$wp_customize->add_setting('readmore', array(
	'default' => '',
	
));
$wp_customize->add_control('readmore', array(
	'label' => __('Sub-heading', 'styleblog'),
	'section' => 'style_banner',
	'type' => 'text',
));

}
add_action('customize_register', 'customize_banner');


////
function theme_customizer_options($wp_customize){
	
	$wp_customize->add_section('fashion_travel_music', array(
		'title' => __('Travel Fashion Music', 'styleblog'),
		'priority' => 100,
	));

	$wp_customize->add_setting( 'fashion_image1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'fashion_image1', array(
        'label' => 'Fashion Image1',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'fashion_image2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'fashion_image2', array(
        'label' => 'Fashion Image2',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'fashion_image3', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'fashion_image3', array(
        'label' => 'Fashion Image3',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
    $wp_customize->add_setting( 'travel_image1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'travel_image1', array(
        'label' => 'Travel Image1',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'travel_image2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'travel_image2', array(
        'label' => 'Travel Image2',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'travel_image3', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'travel_image3', array(
        'label' => 'Travel Image3',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'music_image1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'music_image1', array(
        'label' => 'Music Image1',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'music_image2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'music_image2', array(
        'label' => 'Music Image2',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',
       
    ));
	$wp_customize->add_setting( 'music_image3', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( 'music_image3', array(
        'label' => 'Music Image3',
        'priority' => 20,
        'section' => 'fashion_travel_music',
		'type' => 'text',

       
    ));
}
 
add_action( 'customize_register', 'theme_customizer_options' );
