<?php   
if(! defined('ABSPATH')) exit;

add_shortcode("no_authorization_page", "page_no_authorization");

function page_no_authorization() {
    ?>
    <main id="primary" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Lo sentimos no tienes acceso a esta página' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. ¿Tal vez intente una búsqueda?' ); ?></p>
                    <?php
                        get_search_form();
                    ?>
            </div>
        </section>
    </main>
    <?php
}

?>