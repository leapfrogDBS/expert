<section class="bg-turquoise">
<?php 
global $wp_query;
$post_count =  $wp_query->post_count;
$learning_tracks_post_area_content = get_field('learning_tracks_post_area_content', 'options');
// Check if there are any posts to display
if ( have_posts() ) : 

?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="headingTwo text-white text-center"><?php echo single_cat_title() ; ?> Learning Tracks</h1>
                    <?php
                    if ($learning_tracks_post_area_content) {
                    ?>
                        <p class="bodyOne text-white mb-12 text-center"><?php echo $learning_tracks_post_area_content; ?></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row max-w-5xl m-auto">
                <?php
                // The Loop
                while ( have_posts() ) : the_post(); 

                    $imgSrc;
                    if (has_post_thumbnail()) {
                        $imgSrc = get_the_post_thumbnail_url('', "medium");

                    } else {
                        $imgSrc = get_template_directory_uri() . "/img/fallback-post.jpg";
                    } 
                    ?>

                    <div class="col sm:col-span-6 md:col-span-4 ">
                        <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col group ">
							<a href="<?php the_permalink() ?>">
                                <div class="square bg-yellow pb-[100%] relative">
                                    <?php if(has_post_thumbnail()) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                    <?php } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lady1.svg" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                    <?php } ?>
                                </div>
								<div class="info px-6 py-3 h-52 flex flex-col">
                                    <h3 class="text-lg leading-tight font-semibold mb-4 h-11"><?php the_title(); ?></h3>                               
                                    <p class="subtitleTwo flex-1"><?php echo strip_tags(get_the_excerpt()); ?></p>
                                    <div><p class="ctaButton small bg-turquoise group-hover:bg-blue">Learn more</p></div>
                                </div>
							</a>
                        </div>
                    </div>

                <?php endwhile; 
                ?>  
            </div>
        </div>
    </section>
 <?php
else: ?>
<h2 class="headingOne text-center">Sorry, there are currently no posts within this category</h2>
 
 <?php endif; ?>