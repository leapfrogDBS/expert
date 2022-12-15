<?php
$productivity_content_area = get_field('productivity_content_area');
$productivity_video_url = get_field('productivity_video_url');
$productivity_button_text = get_field('productivity_button_text');
$productivity_button_link = get_field('productivity_button_link');

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col entry-content block-editor-content md:col-span-8 md:col-start-3 ">
                <?php echo $productivity_content_area; ?>
            </div>
            <div class="col md:col-span-8 md:col-start-3">
                <!-- The YouTube video -->
                <figure class="content-media content-media--video rounded-xl" id="featured-media">
                    <iframe loading="lazy" class="content-media__object z-40 rounded-xl" id="featured-video" src="<?php echo $productivity_video_url; ?>?enablejsapi=1&rel=0&showinfo=0&controls=0" frameborder="0"></iframe>
                </figure>
            </div>
            <div class="col text-center ">
                <a href="<?php echo $productivity_button_link['url']; ?>" class="ctaButton bg-turquoise"><?php echo $productivity_button_text; ?></a>
            </div>
        </div>
    </div>
</section>
