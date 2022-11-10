<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package expert
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header><!-- .entry-header -->
 
<?php 
include(locate_template('template-parts/learning-tracks/single/header.php'));
include(locate_template('template-parts/learning-tracks/single/content.php'));
include(locate_template('template-parts/learning-tracks/single/lessons.php'));
include(locate_template('template-parts/social-media/sticky-social.php'));
?>



</article><!-- #post-<?php the_ID(); ?> -->


<script>
    function copyFunction() {

        var copyData = document.getElementById("copy-text").innerHTML;
        var showText = document.getElementById("click-to-copy");



    navigator.clipboard.writeText(copyData);

    showText.innerHTML = "Copied!";

    }
</script>