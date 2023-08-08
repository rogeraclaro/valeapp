<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ValeApp
 */
?>

<footer>
	<div class="container">
		<div id="accordionfooter" class="accordion accordion-buttons">
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq"
						data-bs-toggle="collapse" data-bs-target="#collapsefaq" aria-expanded="false"
						aria-controls="collapsefaq">Categorías <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq" class="accordion-collapse collapse" aria-labelledby="headingPoints"
					data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq2"
						data-bs-toggle="collapse" data-bs-target="#collapsefaq2" aria-expanded="false"
						aria-controls="collapsefaq2">
						Vale
						<img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp">
					</button>
				</h2>
				<div id="collapsefaq2" class="accordion-collapse collapse" aria-labelledby="headingPoints"
					data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq3"
						data-bs-toggle="collapse" data-bs-target="#collapsefaq3" aria-expanded="false"
						aria-controls="collapsefaq3">Acerca de <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq3" class="accordion-collapse collapse" aria-labelledby="headingPoints"
					data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 id="headingPoints" class="accordion-header">
					<button type="button" class="accordion-button event collapsed" data-label="collapsefaq4"
						data-bs-toggle="collapse" data-bs-target="#collapsefaq4" aria-expanded="false"
						aria-controls="collapsefaq4">Legal <img class="img-fluid"
							src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
							alt="ValeApp"></button>
				</h2>
				<div id="collapsefaq4" class="accordion-collapse collapse" aria-labelledby="headingPoints"
					data-bs-parent="#accordionfqa">
					<div class="accordion-body">
						<p>
							Lorem ipsum dolor sit amet, consectetur <br class="xs-br">
							adipisicing elit, sed do eiusmod tempor <br class="xs-br">
							incididunt ut labore et dolore magna aliqua. <br class="xs-br">
							Ut enim ad minim veniam, quis nostrud <br class="xs-br">
							exercitation ullamco laboris.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footlast">
			<img class="image-fluid image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valelogo.png"
				alt="ValeApp">
			<div class="copyright">
				Copyright © VALE 2023
			</div>
			<div class="xxss">
				<a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
				<a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
				<a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>