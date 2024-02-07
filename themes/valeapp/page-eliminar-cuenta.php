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
  <section class="section2 Ayuda">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"="#">Mi cuenta</a></li>
                            <li class="breadcrumb-item"><a href="#"="#">Centro de soporte</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Ayuda
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="EliminarCuenta">
        <div class="EliminarCuenta-container">
            <h4 class="EliminarCuenta-title">
            ¿Seguro que quieres eliminar tu cuenta?
            </h4>
            <p class="EliminarCuenta-text">
            Sentimos que quieras dejarnos, pero si vuelves, te esperaremos con los brazos abiertos!
            </p>
            <p class="EliminarCuenta-text">
            Antes de irte, asegúrate de:
            </p>
            <p class="EliminarCuenta-text">
            •No tener transacciones pendientes
            de finalizar.
            </p>
            <p class="EliminarCuenta-text">
            •No tener saldo en el monedero.
            </p>
            <p class="EliminarCuenta-text">
            Si eliminas tu cuenta, todos tus datos (valoraciones, mensajes, reservas...) serán eliminados y no podrás recuperarlos.
            </p>
            <button class="EliminarCuenta-btn">Mantener cuenta</button>
            <button class="EliminarCuenta-delete ">Eliminar cuenta</button>
        </div>
    </section>


<?php
get_footer();