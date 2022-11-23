<?php /* Template Name: Weeks Lessons */

/**
 * Get header
 */ 
get_header();


include(locate_template('template-parts/lesson-weeks/header.php'));


// STARTS - wrapp your content with this conditional statement
if ( post_password_required() ) :

    // if your post is password protected with our Pro version, show our password form instead
    echo get_the_password_form();

/* display the password protected content if the correct password is entered */ 
else :

include(locate_template('template-parts/lesson-weeks/content.php'));

endif;
?>

<?php 
/**
 * Get footer
 */
get_footer();


