
<?php

/**
 * Get header
 */ 
get_header();
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col md:col-span-6">
                <h1 class="headingOne text-blue mb-0">How can we</h1>
                <h1 class="headingOne text-turquoise mb-0">help you</h1>
            </div>
            <div class="col md:col-span-6">
                <?php echo do_shortcode('[contact-form-7 id="43" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php 
/**
 * Get footer
 */
get_footer();



