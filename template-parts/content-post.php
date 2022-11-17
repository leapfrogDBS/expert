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
    ?>
    <div class="bg-none left-0 right-0 sticky mb-6 z-50" id="progress-bar-container">
         <div id="progress-bar" class="rounded-r-full bg-orange block z-50 "></div> 
    </div>
<script>	
	let processScroll = () => {
    let docElem = document.documentElement,
        docBody = document.body,
        scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
        scrollBottom = (docElem['scrollHeight'] || docBody['scrollTop']) - window.innerHeight,
        scrollPercent =scrollTop / scrollBottom * 100 + '%';

        document.querySelector('#progress-bar').style.setProperty('--scrollAmount', scrollPercent)
    }
    document.addEventListener('scroll', processScroll);

</script>
    
    <?php
    include(locate_template('template-parts/posts/content.php')); 
    include(locate_template('template-parts/posts/copy-reference.php')); 
    include(locate_template('template-parts/posts/author.php'));  
    include(locate_template('template-parts/posts/rate-post.php'));
    include(locate_template('template-parts/social-media/sticky-social.php'));  
    include(locate_template('template-parts/posts/related-tools.php'));
	include(locate_template('template-parts/cta/start-business.php')); 
    ?>


</article><!-- #post-<?php the_ID(); ?> -->