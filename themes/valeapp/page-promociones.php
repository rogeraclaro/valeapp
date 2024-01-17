<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */
 
get_header();
?>

<section class="section2 promociones">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
                            <li class="breadcrumb-item"><a href="#"></a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Promociones
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="promociones">
        <div class="promociones-content">
            <a class="promociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="promociones-arrow">
                <div class="promociones-cardContent">
                    <h4 class="promociones-title">
                    Oferta de lanzamiento
                    </h4>
                    <p class="promociones-subtitle">
                        Primer mes sin comisiones
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="promociones-icon">
            </a>
            <a class="promociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="promociones-arrow">
                <div class="promociones-cardContent">
                    <h4 class="promociones-title">
                        Invita a un amigo
                    </h4>
                    <p class="promociones-subtitle">
                        10 Vales de regalo
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="promociones-icon">
            </a>
            <a class="promociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="promociones-arrow">
                <div class="promociones-cardContent">
                    <h4 class="promociones-title">
                        Depósito 100€
                    </h4>
                    <p class="promociones-subtitle">
                        10 Vales de regalo
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="promociones-icon">
            </a>
            <a class="promociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="promociones-arrow">
                <div class="promociones-cardContent">
                    <h4 class="promociones-title">
                    10 reservas al mes
                    </h4>
                    <p class="promociones-subtitle">
                        10 Vales de regalo
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="promociones-icon">
            </a>
            <a class="promociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="promociones-arrow">
                <div class="promociones-cardContent">
                    <h4 class="promociones-title">
                        Invita a un profesional
                    </h4>
                    <p class="promociones-subtitle">
                        20 Vales de regalo
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="promociones-icon">
            </a>
        </div>
    </section>


<?php
get_footer();