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
    <section class="miSaldoCliente">
      <div class="miSaldoCliente-container">
        <div class="miSaldoCliente-content">
          <p class="miSaldoCliente-saldoText">Tu saldo actual es de:</p>
          <div class="miSaldoCliente-saldoNum">
            <p class="miSaldoCliente-saldoNumText">0,00</p>
          <img class="miSaldoCliente-arrowIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png">
          </div>
          <div class="miSaldoCliente-tokens">
            <button class="miSaldoCliente-addBtn">Retirar Saldo</button>
          </div>
          <div class="miSaldoCliente-payment">
            <div class="miSaldoCliente-paymentHead">
                <p class="miSaldoCliente-title">
                    Metodo de pago registrado
                </p>
                <button class="miSaldoCliente-editBtn">
                    <img class="miSaldoCliente-editIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-editIcon-miSaldo.png">
                    Editar
                </button>
            </div>
            <div class="miSaldoCliente-card">
                <p class="miSaldoCliente-cardType">
                    TARJETA VISA <span class="miSaldoCliente-icon1">?</span>
                </p>
                <p class="miSaldoCliente-cardNum">
                <img class="miSaldoCliente-icon2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-visalogo-mi-saldo.png">
                    494019******5587
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
get_footer();