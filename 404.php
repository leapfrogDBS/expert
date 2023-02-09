<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package expert
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found relative">
			
			<div class="container z-50">
				<div class="row">
					<div class="col text-center py-20 sm:py-32 md:py-38 lg:py-56">
						<h1 class="headingOne text-blue">404</h1>
						<h2 class="headingThree">Page not found</h2>
						<p class="bodyOne">Opps! The page you are looking for does not exist. It might have been moved or deleted</p>
						<a href="<?php echo home_url(); ?>" class="ctaButton">Back to home</a>
					</div>
				</div>
			</div>
			
			<img class="absolute w-full h-full inset-0 object-cover z-[-1]" src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404 image">
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
