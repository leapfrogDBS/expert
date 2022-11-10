<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
 <main id="primary" class="site-main">




<?php  
include(locate_template('template-parts/category/header.php'));    
include(locate_template('template-parts/category/content.php'));
include(locate_template('template-parts/category/posts.php'));
include(locate_template('template-parts/home/follow-us.php'));
include(locate_template('template-parts/cta/start-business.php'));
?>

</main>


<?php get_footer(); ?>