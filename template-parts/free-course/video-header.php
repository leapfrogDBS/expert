<?php
$fc_video_url = get_field('fc_video_url');
$fc_button_text = get_field('fc_button_text');
?>

<section class="bg-white pb-0">
    <div class="container">
    <?php 
        if($fc_video_url) {
        ?>
            <div class="row">
                <div class="col md:col-span-8 md:col-start-3">
                    <!-- The YouTube video -->
                    <figure class="content-media content-media--video rounded-xl" id="featured-media">
                        <iframe loading="lazy" class="content-media__object z-40 rounded-xl" id="featured-video" src="<?php echo $fc_video_url; ?>" frameborder="0"></iframe>
                    </figure>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row mt-12">
            <div class="col text-center">
                <a href="#signup-section" class="ctaButton"><?php echo $fc_button_text; ?></a>
            </div>
        </div>
    </div>
</section>