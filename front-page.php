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
include(locate_template('template-parts/home/featured-in.php'));
include(locate_template('template-parts/home/latest-tools.php'));
include(locate_template('template-parts/home/why.php'));
include(locate_template('template-parts/home/follow-us.php'));
include(locate_template('template-parts/home/books.php'));
include(locate_template('template-parts/home/testimonials.php'));
include(locate_template('template-parts/home/start-business.php'));
?>
<style>
    html {
        scroll-padding-top: 150px   ;
    }
    html.announcement {
        scroll-padding-top: 186px   ;
    }
</style>

<?php 
/**
 * Get footer
 */
get_footer();


