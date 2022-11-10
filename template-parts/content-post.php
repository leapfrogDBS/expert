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
    include(locate_template('template-parts/posts/header.php'));  
    include(locate_template('template-parts/posts/content.php')); 
    include(locate_template('template-parts/posts/copy-reference.php')); 
    include(locate_template('template-parts/posts/author.php'));  
    include(locate_template('template-parts/posts/rate-post.php'));
    include(locate_template('template-parts/social-media/sticky-social.php'));   
    ?>


</article><!-- #post-<?php the_ID(); ?> -->