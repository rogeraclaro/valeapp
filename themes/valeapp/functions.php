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
	// wp_enqueue_script('mixpanel', get_theme_file_uri('/js/mixpanel.js'), array(), '1.0', true);
	// wp_enqueue_script('dynamics', get_theme_file_uri('/js/dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('_dynamics', get_theme_file_uri('/js/_dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('app-javascript', get_theme_file_uri('/js/app.js'), array(), '1.0', true);
	// wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), array(), '1.0', true);
	wp_enqueue_script('form_ajax', get_theme_file_uri('/js/form_ajax.js'), array(), '1.0', true);
	wp_localize_script( 'form_ajax', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
	//wp_enqueue_script('isInViewport', get_theme_file_uri('/vendor/js/isInViewport.min.js'), array(), '1.0', true);
	// wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ) );
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



add_action( 'show_user_profile', 'add_providers_user' );
add_action( 'edit_user_profile', 'add_providers_user' );
 
function add_providers_user( $user ) {
?>
    <h3><?php _e('Datos del Proveedor'); ?></h3>
    
	<table class="form-table">
            <tr>
                <th class= "row-title">
                    <label for="name">Nombre:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'first_name', true ); ?>" type="text" id="first_name" name="first_name" class="regular-text" placeholder="Ej. Juan" required>
                </td>
            </tr>
            <tr>
                <th class= "row-title">
                    <label for="last_name">Apellidos:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'last_name', true); ?>" type="text" id="last_name" name="last_name" class="regular-text" placeholder="Ej. Mendez" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="email">Correo Electrónico:</label>
                </th>
                <td>
                    <input value="<?php echo get_user_meta( $user->ID, 'billing_email', true); ?>" type="email" id="billing_email" name="billing_email" class="regular-text" placeholder="Ej. ejemplo@ejemplo.com" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="phone_number">Teléfono:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'phone_number', true); ?>" type="tel" id="phone_number" name="phone_number" class="regular-text" placeholder="Ej. 888888888" required>
                </td>
            </tr>
            
            <tr>
                <th class= "row-title">
                    <label for="address">Dirección:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'address', true); ?>" type="text" id="address" name="address" class="regular-text" placeholder="Ej. Av. Siempre Viva" required>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="cd_postal">Código Postal:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'cd_postal', true); ?>" type="number" id="cd_postal" name="cd_postal" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="city">Ciudad:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'city', true); ?>" type="text" id="city" name="city" class="regular-text" placeholder="Ej. Madrid">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="country">Pais:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'country', true); ?>" type="text" id="country" name="country" class="regular-text" placholder="Ej. Francia">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="schedule">Horario:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'schedule', true); ?>" type="text" id="schedule" name="schedule" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise">Autónomo o Empresa:</label>
                </th>
                <td>
                    <select id="enterprise" name="enterprise" class="postbox" >
                        <option hidden ><?php if(get_user_meta( $user->ID, 'enterprise', true)){get_user_meta( $user->ID, 'enterprise', true);} else { echo "Elige una opcion";} ?></option>
                        <option value="Autónomo" >Autónomo</option>
                        <option value="Empresa" >Empresa</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_name">Nombre de la empresa:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'enterprise_name', true); ?>" type="text" id="enterprise_name" name="enterprise_name" class="regular-text" placeholder="Ej. SMBS">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="tax_iva">Tipo de IVA:</label>
                </th>
                <td>
                    <select id="tax_iva" name="tax_iva" class="postbox" >
                        <option hidden ><?php if(get_user_meta( $user->ID, 'tax_iva', true)){get_user_meta( $user->ID, 'tax_iva', true);} else { echo "Elige una opcion";} ?></option>
                        <option value="NIE" >NIE</option>
                        <option value="NIF" >NIF</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="categorys">Áreas:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'categorys', true); ?>" type="text" id="categorys" name="categorys" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="enterprise_logo">Logotipo:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'enterprise_logo', true); ?>" type="file" id="enterprise_logo" name="enterprise_logo" class="regular-text" accept="image/png,image/jpeg">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="profile_photo">Fotos:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'profile_photo', true); ?>" type="file" id="profile_photo" name="profile_photo" class="regular-text" accept="image/png,image/jpeg" multiple>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="comments">Comentarios:</label>
                </th>
                <td>
                    <textarea value="<?php get_user_meta( $user->ID, 'comments', true); ?>" type="text" id="comments" name="comments" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="description">Descripción:</label>
                </th>
                <td>
                    <textarea value="<?php get_user_meta( $user->ID, 'description', true); ?>" type="text" id="description" name="description" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="membership">Membresia:</label>
                </th>
                <td>
                    <select id="membership" name="membership" class="postbox">
                        <option hidden ><?php if(get_user_meta( $user->ID, 'membership', true)){get_user_meta( $user->ID, 'membership', true);} else { echo "Elige una opcion";} ?></option>
                        <option value="Silver" >Silver</option>
                        <option value="Gold" >Gold</option>
                        <option value="Platinum" >Platinum</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="assessment">Valoración:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'assessment', true); ?>" type="text" id="assessment" name="assessment" class="regular-text">
                </td>
            </tr>

            <tr>
                <th class= "row-title">
                    <label for="number_iban">IBAN:</label>
                </th>
                <td>
                    <input value="<?php get_user_meta( $user->ID, 'number_iban', true); ?>" type="number" id="number_iban" name="number_iban" class="regular-text">
                </td>
            </tr>

        </table>
<?php }

add_action( 'personal_options_update', 'save_providers_database' );
add_action( 'edit_user_profile_update', 'save_providers_database' );

function save_providers_database( $user_id ) {
	$first_name = $last_name = $email = $password = $phone_number = $address = $cd_postal = $city = $country = $schedule = $enterprise = $enterprise_first_name = $tax_iva = $categorys = $enterprise_logo = $profile_photo = $comments = $description = $membership = $assessment = $number_iban = '';
	$regular_words = '/^[a-zA-Zá-úÁ-Ú\s]+$/';
    $regular_number = "/^([1-9]\d*|0)$/";
    $regular_phone = "/^(?:\+|00)?[1-9]\d{6,14}$/";
    $regular_email = '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/';
    if ( !current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }

	if(isset( $_POST['first_name'])) {
        $first_name = sanitize_text_field( $_POST['first_name']);
        if(preg_match($regular_words, $first_name)){
            update_user_meta($user_id, 'first_name', $first_name);
        } else {
            echo '<p>Nombre no valido</p>';
        }
    }

	if(isset( $_POST['last_name'])) {
        $last_name = sanitize_text_field( $_POST['last_name']);
        if(preg_match($regular_words, $last_name)) {
            update_user_meta($user_id, 'last_name', $last_name);
        } else {
            echo '<p>Apellido no valido</p>';
        }
    }

	if(isset( $_POST['billing_email'])) {
        $email = sanitize_text_field( $_POST['billing_email']);
        if(preg_match($regular_email, $email)) {
            update_user_meta($user_id, 'billing_email', $email);        
        } else {
            echo '<p>Correo no valido</p>';
        }
    }

	if(isset( $_POST['phone_number'])) {
        $phone_number = sanitize_text_field( $_POST['phone_number']);
        if(preg_match($regular_phone, $phone_number)){
            update_user_meta($user_id, 'phone_number', $phone_number);
        } else {
            echo "<p>Numero telefonico no valido</p>";
        }

    }

	if(isset( $_POST['address'])) {
        $address = sanitize_text_field( $_POST['address']);
        if(preg_match($regular_words, $address)) {
            update_user_meta($user_id, 'address', $address);
        } else {
            echo "<p>Direccion no valida</p>";
        }
    }

	if(isset( $_POST['cd_postal'])) {
        $cd_postal = sanitize_text_field( $_POST['cd_postal']);
        if(preg_match($regular_number, $cd_postal)) {
            update_user_meta($user_id, 'cd_postal', $cd_postal);
        } else {
            echo "<p>Codigo postal no valido</p>";
        }
    }

	if(isset( $_POST['city'])) {
        $city = sanitize_text_field( $_POST['city']);
        if(preg_match($regular_words, $city)) {
            update_user_meta($user_id, 'city', $city);
        } else {
            echo "<p>Ciudad no valida</p>";
        }
    }

	if(isset( $_POST['country'])) {
        $country = sanitize_text_field( $_POST['country']);
        if(preg_match($regular_words, $country)) {
            update_user_meta($user_id, 'country', $country);
        } else {
            echo "<p>Pais no valido</p>";
        }
    }

	if(isset( $_POST['schedule'])) {
        $schedule = sanitize_text_field( $_POST['schedule']);
    }
    update_user_meta($user_id, 'schedule', $schedule);

	if(isset( $_POST['enterprise'])) {
        $enterprise = sanitize_text_field( $_POST['enterprise']);
        if(preg_match($regular_words, $enterprise)) {
            update_user_meta($user_id, 'enterprise', $enterprise);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }

	if(isset( $_POST['enterprise_name'])) {
        $enterprise_name = sanitize_text_field( $_POST['enterprise_name']);
        if(preg_match($regular_words, $enterprise_name)){
            update_useer_meta($useer_id, 'enterprise_name', $enterprise_name);
        } else {
            echo "<p>Nombre de la empresa no valida</p>";
        }
    }

	if(isset( $_POST['tax_iva'])) {
        $tax_iva = sanitize_text_field( $_POST['tax_iva']);
        if(preg_match($regular_words, $tax_iva)) {
            update_user_meta($user_id, 'tax_iva', $tax_iva);
        } else {
            echo "<p>Opcion no valida</p>";
        }
    }

	if(isset( $_POST['categorys'])) {
        $categorys = sanitize_text_field( $_POST['categorys']);
    }
    update_user_meta($user_id, 'categorys', $categorys);

	if(isset( $_POST['enterprise_logo'])) {
        $enterprise_logo = sanitize_text_field( $_POST['enterprise_logo']);
    }
    update_user_meta($user_id, 'enterprise_logo', $enterprise_logo);

	if(isset( $_POST['profile_photo'])) {
        $profile_photo = sanitize_text_field( $_POST['profile_photo']);
    }
    update_user_meta($user_id, 'profile_photo', $profile_photo);

	if(isset( $_POST['comments'])) {
        $comments = sanitize_text_field( $_POST['comments']);
    }
    update_user_meta($user_id, 'comments', $comments);

	if(isset( $_POST['description'])) {
        $description = sanitize_text_field( $_POST['description']);
    }
    update_user_meta($user_id, 'description', $description);

	if(isset( $_POST['membership'])) {
        $membership = sanitize_text_field( $_POST['membership']);
        if(preg_match($regular_words, $membership)){
            update_user_meta($user_id, 'membership', $membership);
        }
        echo "<p>Opcion no valida</p>";
    }

	if(isset( $_POST['assessment'])) {
        $assessment = sanitize_text_field( $_POST['assessment']);
    }
    update_user_meta($user_id, 'assessment', $assessment);

	if(isset( $_POST['number_iban'])) {
        $number_iban = sanitize_text_field( $_POST['number_iban']);
        if(preg_match($regular_number, $number_iban)){
            update_user_meta($user_id, 'number_iban', $number_iban);
        } else {
            echo "<p>Numero IBAN no valido</p>";
        }
    }
}



