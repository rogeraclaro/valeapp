<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ValeApp
 */

$current_lang = get_bloginfo( 'language' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="facebook-domain-verification" content="" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="" /> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'io' ); ?></a>
	<header class="site-header header-desktop d-none d-sm-block">
	    <div class="site-branding">

	    </div>
	    <div class="site-nav">
	        <nav id="site-navigation" class="main-navigation">
	            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
	        </nav>
	    </div>
	    <div class="site-cta">
	        <div class="pedir-cita">
	         
	        </div>
	    </div>
	</header>

	<header class="site-header header-mobile d-sm-none">
		<div class="menumobile">
			<div class="menuburger">
				<span class="menu-global menu-top"></span>
				<span class="menu-global menu-middle"></span>
				<span class="menu-global menu-bottom"></span>
			</div>
			<nav id="site-navigation-mobile" class="main-navigation menu-main">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>
		<div class="logomobile">
	       	<img class="image-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valelogo.png" alt="ValeApp">
		</div>
		<div class="header-right-block">
			<div class="cerca">
				<i class="bi bi-search"></i>
			</div>
			<div class="userlogin">
				<i class="bi bi-person-circle"></i>
			</div>
		</div>
	</header>