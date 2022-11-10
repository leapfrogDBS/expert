<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
 <main id="primary" class="site-main">

 <?php
include(locate_template('template-parts/learning-tracks/header.php'));   
include(locate_template('template-parts/learning-tracks/content.php'));   
include(locate_template('template-parts/learning-tracks/posts.php'));     
include(locate_template('template-parts/home/follow-us.php'));
include(locate_template('template-parts/cta/start-business.php'));
?>
</main>


<?php get_footer(); ?>