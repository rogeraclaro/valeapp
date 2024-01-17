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
include 'inc/match-service/index.php';
 
get_header();
?>

<section class="section2 interiorPromociones">
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
    <section class="interiorPromociones">
        <div class="interiorPromociones-container">
        <a class="interiorPromociones-card" href="#">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp" class="interiorPromociones-arrow">
                <div class="interiorPromociones-cardContent">
                    <h4 class="interiorPromociones-title">
                        Oferta de lanzamiento
                    </h4>
                    <p class="interiorPromociones-subtitle">
                        Depósito 50€ = 25 Vales de regalo
                    </p>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp" class="interiorPromociones-icon">
            </a>
            <p class="interiorPromociones-text">
            Oferta de lanzamiento ¡Solo para los 100 primeros! Deposita 50€ y recibe 25€ extra en Vales para disfrutar de cualquier servicio en nuestra web.
            </p>
            <a class="interiorPromociones-button" href="#">
                Añadir Saldo
            </a>
        </div>
    </section>

<?php
get_footer();