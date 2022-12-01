<?php
$fc_content_area = get_field('fc_content_area');
$fc_button_text = get_field('fc_button_text');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col entry-content block-editor-content md:col-span-8 md:col-start-3 ">
                <?php echo $fc_content_area; ?>
            </div>
            <div class="col text-center ">
                <a href="<?php echo home_url(); ?>/checkout/?add-to-cart=9251" class="ctaButton bg-turquoise"><?php echo $fc_button_text; ?></a>
            </div>
        </div>
    </div>
</section>





