<?php
if( have_rows('lw_videos') ):
?>

<section class="bg-white py-0">
    <div class="container">           
        <?php while( have_rows('lw_videos') ) : the_row(); 
           $lw_video_title = get_sub_field('lw_video_title');
           $lw_video_url = get_sub_field('lw_video_url');
            ?>
            <div class="row mb-24">
                <div class="col md:col-span-8 md:col-start-3">
                    <h3 class="headingThree mb-0 text-center"><?php echo $lw_video_title; ?></h1>
                </div>
                <div class="col md:col-span-8 md:col-start-3">
                    <!-- The YouTube video -->
                    <figure class="content-media content-media--video rounded-xl">
                        <iframe loading="lazy" class="content-media__object z-40 rounded-xl" src="<?php echo $lw_video_url; ?>" frameborder="0"></iframe>
                    </figure>
                </div>
            </div>
        <?php endwhile; ?>      
    </div>
</section>

<?php endif; ?>