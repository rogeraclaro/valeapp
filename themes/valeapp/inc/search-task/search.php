<?php 

function search_task() {
    ?>
    <form autocomplete="off" method="get" action="<?php echo esc_url(home_url('/blog-categorias/')); ?>">
        <div class="home-menu-cardContent">
          <div class="card-searcher">
            <img class="card-searcher-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-searcher-img.png" alt="lupa" />
            <div class="card-searcher-text">
              <input type="text" placeholder="Servicio" name="search_label" id="search_label" value="<?php echo get_search_query(); ?>" />
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
    <?php
}

function handler_search_form() {
    if (isset($_GET['search_label'])) {
        $search = sanitize_text_field($_GET['search_label']);
        wp_redirect(home_url("/categoria/$search"));
    }
}

add_action('template_redirect', 'handler_search_form');

?>