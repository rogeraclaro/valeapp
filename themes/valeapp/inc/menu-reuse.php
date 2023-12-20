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
?>
<?php
function menu_reuse(){
    ?>
    <section class="section7 servicio-generica">
        <div class="container">
			<div class="row">
                <div class="col-12">
                    <div id="accordionCategories" class="accordion accordion-buttons">
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseHome" data-bs-toggle="collapse"
                                    data-bs-target="#collapseHome" aria-expanded="false"
                                    aria-controls="collapseHome">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="ValeApp">
                                    Hogar
                                </button>
                            </h2>
                            <div id="collapseHome" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Fontanería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Limpieza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Mudanza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Obras</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Electricidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Montaje muebles</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Mecánico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Soluciones ECO</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseLearn" data-bs-toggle="collapse"
                                    data-bs-target="#collapseLearn" aria-expanded="false"
                                    aria-controls="collapseLearn">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="ValeApp">
                                    Aprende
                                </button>
                            </h2>
                            <div id="collapseLearn" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Idiomas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Instrumentos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Clases de repaso</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Baile</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Inversiones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Fotografía</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Gaming</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Cocina</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseBody" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBody" aria-expanded="false"
                                    aria-controls="collapseBody">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.svg" alt="ValeApp">
                                    Deporte
                                </button>
                            </h2>
                            <div id="collapseBody" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Gim</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Ski o tabla</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">De palo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Con balón</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Con raqueta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Al agua</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Al aire</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Sobre ruedas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseMind" data-bs-toggle="collapse"
                                    data-bs-target="#collapseMind" aria-expanded="false"
                                    aria-controls="collapseMind">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="ValeApp">
                                    Mente
                                </button>
                            </h2>
                            <div id="collapseMind" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Coach</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Psicología</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Tarot</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Terapias de pareja</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Meditación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Yoga</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Terapias alternativas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseTakeCare" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTakeCare" aria-expanded="false"
                                    aria-controls="collapseTakeCare">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="ValeApp">
                                    Cuidados
                                </button>
                            </h2>
                            <div id="collapseTakeCare" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Mascotas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Niños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Personas mayores</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Au pair</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Seguridad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Masajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Dietas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseBeauty" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBeauty" aria-expanded="false"
                                    aria-controls="collapseBeauty">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="ValeApp">
                                    Belleza
                                </button>
                            </h2>
                            <div id="collapseBeauty" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Peluquería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Tratamientos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Uñas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Maquillaje</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Depilación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Dental</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseContract" data-bs-toggle="collapse"
                                    data-bs-target="#collapseContract" aria-expanded="false"
                                    aria-controls="collapseContract">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="ValeApp">
                                    Contrata
                                </button>
                            </h2>
                            <div id="collapseContract" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Publicidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Desarrollo y app</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Análisis de datos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Legal</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Traducciones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Redes sociales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Foto/Video</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Hostelería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Guía Turístico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Agente de Viajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Influencers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseRent" data-bs-toggle="collapse"
                                    data-bs-target="#collapseRent" aria-expanded="false"
                                    aria-controls="collapseRent">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="ValeApp">
                                    Comparte
                                </button>
                            </h2>
                            <div id="collapseRent" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Espacio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Estudio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Consulta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Equipo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Material</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Pista</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseOther" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOther" aria-expanded="false"
                                    aria-controls="collapseOther">
                                    <img class="icon iconEventos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg" alt="ValeApp">
                                    Eventos
                                </button>
                            </h2>
                            <div id="collapseOther" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="#">Empresas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Bodas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Despedidas / cumpleaños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">DJ / Musica en vivo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Promocionales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="#">Sin ánimo de lucro</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>