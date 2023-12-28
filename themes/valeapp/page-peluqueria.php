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
    <section class="section2 servicio-generica">
        <div class="container">
			<div class="row">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
						  <li class="breadcrumb-item"><a href="#">Servicio</a></li>
						  <li class="breadcrumb-item"><a href="#">Peluqueria</a></li>
						</ol>
					  </nav>
				</div>
				<div class="col-12">
					<h2 class="title">
						Peluquería
					</h2>
				</div>
			</div>
		</div>
    </section>
    <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#HairSalonModal">
        Abrir Modal
    </button>
    <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#HairSalonModalSearch">
        Abrir Modal Busqueda
    </button>
    <div class="modal fade HairSalon-modal" id="HairSalonModal" tabindex="-1" aria-labelledby="HairSalonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="HairSalonModalLabel">Servicios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="MultiCheck" data-multicheck-id="HairSalonModal">
                    <div class="MultiCheck-body">
                        <label class="MultiCheck-item">
                            <input type="checkbox" data-multicheck-selectAll="true">
                            <span class="MultiCheck-itemLabel">
                                Todos
                            </span>
                        </label>
                        <label class="MultiCheck-item">
                            <input type="checkbox">
                            <span class="MultiCheck-itemLabel">
                                Cortar + Lavar
                            </span>
                        </label>
                        <label class="MultiCheck-item">
                            <input type="checkbox">
                            <span class="MultiCheck-itemLabel">
                                Mechas / Tinte
                            </span>
                        </label>
                        <label class="MultiCheck-item">
                            <input type="checkbox">
                            <span class="MultiCheck-itemLabel">
                                Cejas
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/registro-proveedores" class="CreateAccountUserOrProfessional-cardBtn">Confirmar</a>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade HairSalon-searchModal" id="HairSalonModalSearch" tabindex="-1" aria-labelledby="HairSalonModalSearchLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="home-menu-card w-100">
                        <form autocomplete="off">
                            <div class="home-menu-cardContent">
                            <div class="card-searcher">
                                <img class="card-searcher-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-searcher-img.png" alt="lupa" />
                                <div class="card-searcher-text">
                                <input type="text" placeholder="Servicio" name="s" />
                                </div>
                            </div>
                            <div class="card-searcher">
                                <img class="card-searcher-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-ubication.png" alt="lupa" />
                                <div class="card-searcher-text">
                                Busca en tu zona
                                </div>
                            </div>
                            </div>
                            <button class="home-menu-cardBtn" id="search_button" type="submit">
                            Buscar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();