<?php
/**
 * Get header
 */ 
get_header();
?>

<?php

include(locate_template('template-parts/books/header.php'));
include(locate_template('template-parts/books/content-area.php'));
include(locate_template('template-parts/home/books.php'));
?>

<?php 
/**
 * Get footer
 */
get_footer();


