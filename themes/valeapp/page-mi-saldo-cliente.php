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
                <li class="breadcrumb-item"><a href="#">Mi cuenta</a></li>
                <li class="breadcrumb-item"><a href="#"></a></li>
              </ol>
            </nav>
          </div>
          <div class="col-12">
            <h2 class="title">Mi saldo</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="miSaldoProveedor">
      <div class="miSaldoProveedor-container">
        <div class="miSaldoProveedor-content">
          <p class="miSaldoProveedor-saldoText">Tu saldo actual es de:</p>
          <div class="miSaldoProveedor-saldoNum">
            <p class="miSaldoProveedor-saldoNumText">0,00</p>
          <img class="miSaldoProveedor-arrowIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png">
          </div>
          <div class="miSaldoProveedor-tokens">
            <button class="miSaldoProveedor-addBtn">Añadir Saldo</button>
          </div>
          <div class="miSaldoProveedor-payment">
            <div class="miSaldoProveedor-paymentHead">
                <p class="miSaldoProveedor-title">
                    Metodo de pago registrado
                </p>
                <button class="miSaldoProveedor-editBtn">
                    <img class="miSaldoProveedor-editIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-editIcon-miSaldo.png">
                    Editar
                </button>
            </div>
            <div class="miSaldoProveedor-card">
                <p class="miSaldoProveedor-cardType">
                    TARJETA VISA <span class="miSaldoProveedor-icon1">?</span>
                </p>
                <p class="miSaldoProveedor-cardNum">
                <img class="miSaldoProveedor-icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-visalogo-mi-saldo.png">
                    494019******5587
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();