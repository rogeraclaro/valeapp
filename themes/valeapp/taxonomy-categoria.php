<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

include "inc/category-filters/index.php";

get_header();
?>

<section class="section2 CategoryDetail">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
					  <li class="breadcrumb-item"><a href="#">Servicios</a></li>
					  <li class="breadcrumb-item"><a href="#"><?php echo $title; ?></a></li>
					</ol>
				  </nav>
			</div>
			<div class="col-12">
				<h2 class="title">
				    <?php echo $title; ?>
				</h2>
			</div>
		</div>
	</div>
</section>
<?php render_filter($field); ?>
<?php render($items); ?>
<?php render_providers($users); ?>


<?php
get_sidebar();
get_footer();