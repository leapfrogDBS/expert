<?php

/**
 * Get header
 */ 
get_header();
?>

<?php
include(locate_template('template-parts/about/hero.php'));
include(locate_template('template-parts/home/featured-in.php'));
include(locate_template('template-parts/about/about.php'));
include(locate_template('template-parts/cta/start-business.php'));
include(locate_template('template-parts/home/follow-us.php'));
?>

<?php 
/**
 * Get footer
 */
get_footer();


