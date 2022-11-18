<?php /* Template Name: Weeks Lessons */

/**
 * Get header
 */ 
get_header();
?>

<?php
include(locate_template('template-parts/lesson-weeks/header.php'));
include(locate_template('template-parts/lesson-weeks/content.php'));
include(locate_template('template-parts/lesson-weeks/videos.php'));
include(locate_template('template-parts/lesson-weeks/templates.php'));

?>

<?php 
/**
 * Get footer
 */
get_footer();


