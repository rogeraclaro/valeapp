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
  <section class="section2 JodRequests">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"="#">Mi cuenta</a></li>
                            <li class="breadcrumb-item"><a href="#"="#"></a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                    Solicitudes
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="JodRequests">
        <div class="JodRequests-container">
            <nav class="JodRequests-header">
                <ul class="JodRequests-options">
                    <li class="JodRequests-item">
                        <button class="JodRequests-btn">
                            <span class="JodRequests-textBtn">
                                Nuevas
                            </span>
                        </button>
                    </li>
                    <li class="JodRequests-item">
                        <button class="JodRequests-btn">
                            <span class="JodRequests-textBtn">
                                Pasadas
                            </span>
                        </button>
                    </li>
                    <li class="JodRequests-item">
                        <button class="JodRequests-btn">
                            <span class="JodRequests-textBtn">
                                Canceladas
                            </span>
                        </button>
                    </li>
                </ul>
            </nav>
            <div class="JodRequests-card">
                <div class="JodRequests-cardHeader">
                    <div class=JodRequests-cardProfile>
                    <img class="JodRequests-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile.png" alt="valeapp">
                    </div>
                    <div class="JodRequests-info">
                        <p class="JodRequests-service">
                        Clases de tenis
                        </p>
                        <p class="JodRequests-name">
                            Claudia
                        </p>
                    </div>
                </div>
                <div class="JodRequests-cardBody">
                    <ul class=JodRequests-cardList>
                        <li class="JodRequests-cardItem">
                            <img class="JodRequests-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-JodRequests-icon1.png" alt="valeapp">
                            <span>
                            C/ Teodora Lamadrid, Local 
                            </span>
                        </li>
                        <li class="JodRequests-cardItem">
                            <img class="JodRequests-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-JodRequests-icon2.png" alt="valeapp">
                            <span>
                            Mie, 29 marzo a las 19:30h
                            </span>
                        </li>
                        <li class="JodRequests-cardItem">
                            <img class="JodRequests-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-JodRequests-icon3.png" alt="valeapp">
                            <span>
                            1h 
                            </span>
                        </li>
                        <li class="JodRequests-balance">
                            20<span class="JodRequests-sing">€/h</span>
                        </li>
                    </ul>
                    <div class="JodRequests-cardFooter">
                        <p class="JodRequests-titleBtn">
                        Pendiente
                        </p>
                        <div class="JodRequests-btnContent">
                            <button class="JodRequests-deny">
                                <span>
                                    Denegar
                                </span>
                            </button>
                            <button class="JodRequests-accept">
                                <span>
                                    Aceptar
                                </span>
                            </button>
                        </div>
                        <div class="JodRequests-about">
                            <a class="JodRequests-details">
                            <span>
                            Ver detalles
                            </span>
                            <img class="JodRequests-iconArrow img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="valeapp">
                            </a>
                            <a class="JodRequests-help">
                                <span>
                                    ¿Necesitas ayuda?
                                </span>
                            <img class="JodRequests-iconArrow img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png" alt="valeapp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();