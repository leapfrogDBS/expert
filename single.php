<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package expert
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

			
		endwhile; // End of the loop.
		?>
   <?php
    include(locate_template('template-parts/posts/related-tools.php'));
	include(locate_template('template-parts/cta/start-business.php'));
    ?>

	</main><!-- #main -->

<?php
get_footer();
