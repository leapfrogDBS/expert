<?php

/**
 * Get header
 */ 
get_header();
?>

<?php
include(locate_template('template-parts/home/hero.php'));
include(locate_template('template-parts/home/secondary-nav.php'));
include(locate_template('template-parts/home/learning-tracks.php'));
?>

<?php 
/**
 * Get footer
 */
get_footer();


