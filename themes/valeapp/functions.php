<?php
/**
 * ValeApp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ValeApp
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
function valeapp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ValeApp, use a find and replace
		* to change 'valeapp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'valeapp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'valeapp' ),
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
			'valeapp_custom_background_args',
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
add_action( 'after_setup_theme', 'valeapp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function valeapp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'valeapp_content_width', 640 );
}
add_action( 'after_setup_theme', 'valeapp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function valeapp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'valeapp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'valeapp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'valeapp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function valeapp_scripts() {
	wp_enqueue_style( 'valeapp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'valeapp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'valeapp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'valeapp_scripts' );

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

add_action( 'wp_enqueue_scripts', 'valeapp_enqueue_styles' );
function valeapp_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'), array('parent-style'));
	wp_enqueue_style('animate', get_theme_file_uri('/css/animate.min.css'), array('parent-style'));
	wp_enqueue_style('popup', get_theme_file_uri('/css/redirectionPopup.css'), array('parent-style'));
	wp_enqueue_style('bootstrap', get_theme_file_uri('/vendor/bootstrap/bootstrap.min.css'), array('parent-style'));
	wp_enqueue_style('bootstrap-icons', get_theme_file_uri('/vendor/bootstrap-icons/bootstrap-icons.css'), array('parent-style'));
	wp_enqueue_style('swiper', get_theme_file_uri('/vendor/swiper/swiper.min.css'), array('parent-style'));
	wp_enqueue_style('swiper', get_theme_file_uri('/vendor/aos/aos.css'), array('parent-style'));
} 

add_action( 'wp_enqueue_scripts', 'load_script_js');
function load_script_js() {
	wp_enqueue_script('jquery', get_theme_file_uri('/vendor/jquery/jquery.min.js'), array(), '1.0', true);
	wp_enqueue_script('bootstrap', get_theme_file_uri('/vendor/bootstrap/bootstrap.bundle.min.js'), array(), '1.0', true);
	wp_enqueue_script('jquery-easing', get_theme_file_uri('/vendor/js/jquery.easing.min.js'), array(), '1.0', true);
	// wp_enqueue_script('clipboard', get_theme_file_uri('/vendor/clipboard/clipboard.min.js'), array(), '1.0', true);
	wp_enqueue_script('swiper', get_theme_file_uri('/vendor/swiper/swiper.min.js'), array(), '1.0', true);
	wp_enqueue_script('aos', get_theme_file_uri('/vendor/aos/aos.js'), array(), '1.0', true);
	// wp_enqueue_script('jquery-plainmodal', get_theme_file_uri('/vendor/jquery/jquery.plainmodal.min.js'), array(), '1.0', true);
	// wp_enqueue_script('paroller', get_theme_file_uri('/vendor/paroller/jquery.paroller.min.js'), array(), '1.0', true);
	wp_enqueue_script('isInViewport', get_theme_file_uri('/vendor/js/isInViewport.min.js'), array(), '1.0', true);
	// wp_enqueue_script('mixpanel', get_theme_file_uri('/js/mixpanel.js'), array(), '1.0', true);
	// wp_enqueue_script('dynamics', get_theme_file_uri('/js/dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('_dynamics', get_theme_file_uri('/js/_dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('app-javascript', get_theme_file_uri('/js/app.js'), array(), '1.0', true);
	// wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), array(), '1.0', true);
	wp_enqueue_script('form_ajax', get_theme_file_uri('/js/form_ajax.js'), array(), '1.0', true);
	wp_localize_script( 'form_ajax', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );
}

add_action('wp_ajax_front_providers_save_metaboxes', 'front_providers_save_metaboxes');
add_action('wp_ajax_nopriv_front_providers_save_metaboxes', 'front_providers_save_metaboxes');

function front_providers_save_metaboxes() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'proveedores',
	];
	$wp_query->query($args);

	parse_str($_POST['form_data'], $data);

	if(!isset($_POST['providers_register_nonce']) || !wp_verify_nonce($_POST['providers_register_nonce'], basename('page-registro-proveedores.php'))) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();
			
			$stored_email = get_post_meta($post_id, 'email', true);
			
			$email_validation = ($stored_email != sanitize_text_field($data['email']));
			if($email_validation){
				$post_name = ($data['name']. " " . $data['last_name']);
				$post_id = wp_insert_post([
					'post_type' => 'proveedores',
					'post_status' => 'publish',
					'post_title' => $post_name
				]);

				update_post_meta($post_id, 'name', sanitize_text_field($data['name']));
				update_post_meta($post_id, 'last_name', sanitize_text_field($data['last_name']));
				update_post_meta($post_id, 'email', sanitize_text_field($data['email']));
				update_post_meta($post_id, 'password', sanitize_text_field($data['password']));
				update_post_meta($post_id, 'phone_number', sanitize_text_field($data['phone_number']));
				update_post_meta($post_id, 'address', sanitize_text_field($data['address']));
				update_post_meta($post_id, 'cd_postal', sanitize_text_field($data['cd_postal']));
				update_post_meta($post_id, 'city', sanitize_text_field($data['city']));
				update_post_meta($post_id, 'country', sanitize_text_field($data['country']));
				update_post_meta($post_id, 'schedule', sanitize_text_field($data['schedule']));
				update_post_meta($post_id, 'enterprise', sanitize_text_field($data['enterprise']));
				update_post_meta($post_id, 'enterprise_name', sanitize_text_field($data['enterprise_name']));
				update_post_meta($post_id, 'enterprise_logo', sanitize_text_field($data['enterprise_logo']));
				update_post_meta($post_id, 'profile_photo', sanitize_text_field($data['profile_photo']));
				update_post_meta($post_id, 'description', sanitize_text_field($data['description']));
				update_post_meta($post_id, 'membership', sanitize_text_field($data['membership']));
				wp_send_json_success();
			} else {
				wp_send_json_error();
			}
		}
	}
}

add_action('wp_ajax_login_providers', 'login_providers');
add_action('wp_ajax_nopriv_login_providers', 'login_providers');

function login_providers() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'proveedores',
	];
	$wp_query->query($args);

	parse_str($_POST['login_data'], $data);

	if ($wp_query->have_posts()) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();

			$stored_email = get_post_meta($post_id, 'email', true);
			$stored_password = get_post_meta($post_id, 'password', true);
			
			$pass_validation = ($stored_password === sanitize_text_field($data['password']));
			$email_validation = ($stored_email === sanitize_text_field($data['email']));
			if($pass_validation && $email_validation){
				wp_send_json_success();
			}
		}
	}
}

add_action('wp_ajax_front_customers_save_metaboxes', 'front_customers_save_metaboxes');
add_action('wp_ajax_nopriv_front_customers_save_metaboxes', 'front_customers_save_metaboxes');

function front_customers_save_metaboxes() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'clientes',
	];
	$wp_query->query($args);

	parse_str($_POST['form_data'], $data);

	if(!isset($_POST['customers_register_nonce']) || !wp_verify_nonce($_POST['customers_register_nonce'], basename('page-registro-clientes.php'))) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();

			$stored_email = get_post_meta($post_id, 'email_customer', true);

			$email_validation = ($stored_email != sanitize_text_field($data['email_customer']));
			if($email_validation) {
				$post_name = ($data['name_customer']. " " . $data['last_name_customer']);
				$post_id = wp_insert_post([
					'post_type' => 'clientes',
					'post_status' => 'publish',
					'post_title' => $post_name
				]);

				update_post_meta($post_id, 'name_customer', sanitize_text_field($data['name_customer']));
				update_post_meta($post_id, 'last_name_customer', sanitize_text_field($data['last_name_customer']));
				update_post_meta($post_id, 'date_customer', sanitize_text_field($data['date_customer']));
				update_post_meta($post_id, 'email_customer', sanitize_text_field($data['email_customer']));
				update_post_meta($post_id, 'password_customer', sanitize_text_field($data['password_customer']));
				update_post_meta($post_id, 'phone_number_customer', sanitize_text_field($data['phone_number_customer']));
				update_post_meta($post_id, 'address_customer', sanitize_text_field($data['address_customer']));
				update_post_meta($post_id, 'cd_postal_customer', sanitize_text_field($data['cd_postal_customer']));
				update_post_meta($post_id, 'city_customer', sanitize_text_field($data['city_customer']));
				update_post_meta($post_id, 'country_customer', sanitize_text_field($data['country_customer']));
				update_post_meta($post_id, 'interests_customer', sanitize_text_field($data['interests_customer']));
				update_post_meta($post_id, 'address_customer', sanitize_text_field($data['address_customer']));
				update_post_meta($post_id, 'profile_photo_customer', sanitize_text_field($data['profile_photo_customer']));
				update_post_meta($post_id, 'description_customer', sanitize_text_field($data['description_customer']));
				wp_send_json_success();
			}
			else {
				wp_send_json_error();
			}
		}
	}
}

add_action('wp_ajax_login_customers', 'login_customers');
add_action('wp_ajax_nopriv_login_customers', 'login_customers');

function login_customers() {
	$temp = $wp_query;
	$wp_query = null;
	$wp_query = new WP_Query();
	$args = [  
		'post_type' => 'clientes',
	];
	$wp_query->query($args);

	parse_str($_POST['login_data'], $data);

	if ($wp_query->have_posts()) {
		while($wp_query->have_posts()) {
			$wp_query->the_post();
			$post_id = get_the_ID();

			$stored_email = get_post_meta($post_id, 'email_customer', true);
			$stored_password = get_post_meta($post_id, 'password_customer', true);
			
			$pass_validation = ($stored_password === sanitize_text_field($data['password_customer']));
			$email_validation = ($stored_email === sanitize_text_field($data['email_customer']));
			if($pass_validation && $email_validation){
				wp_send_json_success();
			}
		}
	}
}
