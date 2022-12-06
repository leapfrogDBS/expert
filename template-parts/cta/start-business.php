<?php
$cta_image = get_field('cta_image', 'option');
$cta_copy = get_field('cta_copy', 'option');
$cta_button_text = get_field('cta_button_text', 'option');
$cta_link = get_field('cta_link', 'option');
?>

<div class="bg-turquoise">
    <div class="row items-center">
        <div class="col col-span-12 md:col-span-6 h-full">
            <?php if($cta_image) { ?>
                <img class=" w-full h-full object-cover object-right" src="<?php echo $cta_image['url']; ?>" loading="lazy" alt="">
            <?php } else { ?>
                <img class=" w-full h-full object-cover object-right" src="<?php echo get_template_directory_uri(); ?>/img/business.jpg" loading="lazy" alt="">
            <?php } ?>
        </div>
        <div class="col col-span-12 md:col-span-5 px-10 md:pr-0 py-10">
            <div id="post-content" class="entry-content entry-content block-editor-content white">
                <?php echo $cta_copy; ?>
            </div>	
			<?php if ($cta_link && $cta_button_text) { ?>
                <a href="<?php echo $cta_link; ?>" class="ctaButton"><?php echo $cta_button_text; ?></a>
            <?php
            }
            ?>
        </div>
    </div>
</div>

