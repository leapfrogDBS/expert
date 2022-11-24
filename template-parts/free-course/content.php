<?php
$fc_content_area = get_field('fc_content_area');
?>


<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col entry-content block-editor-content md:col-span-8 md:col-start-3 ">
                <?php echo $fc_content_area; ?>
            </div>
            <div class="col text-center ">
                <a href="<?php echo home_url(); ?>/start-a-business-course" class="ctaButton bg-turquoise"><?php echo $fc_button_text; ?></a>
            </div>
        </div>
    </div>
</section>





