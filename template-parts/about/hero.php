<?php 
$header_video = get_field('header_video');
?>

<section class="bg-turquoise">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingTwo text-white text-center">Who are we?</h1>
            </div>
        </div>
        <?php 
        if($header_video) {
        ?>
            <div class="row">
                <div class="col md:col-span-8 md:col-start-3">
                    <!-- The YouTube video -->
                    <figure class="content-media content-media--video rounded-xl" id="featured-media">
                        <iframe loading="lazy" class="content-media__object z-40 rounded-xl" id="featured-video" src="<?php echo $header_video; ?>" frameborder="0"></iframe>
                    </figure>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row mt-12">
            <div class="col text-center">
                <a href="<?php echo home_url();?>/track" class="ctaButton">Explore Learning Tracks</a>
            </div>
        </div>
    </div>
</section>


