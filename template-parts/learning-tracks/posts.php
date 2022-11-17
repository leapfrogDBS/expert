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
                    <h1 class="headingTwo text-white text-center"><?php echo single_cat_title() ; ?> Learning Pathways</h1>
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

                    <div class="col sm:col-span-6 md:col-span-4 lg:col-span-3">
                        <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col ">
							<a href="<?php the_permalink() ?>">
								<div class="realtive">
									<img loading="lazy" class="w-full h-44 object-cover" src="<?php echo $imgSrc;?>"/>
								</div>
								<div class="px-6 py-3 flex flex-col flex-1 justify-between">        
									<h3 class="text-lg leading-tight font-semibold mb-1"><?php the_title(); ?></h3>                               
									<p class="subtitleTwo mb-1"><?php echo strip_tags(get_the_excerpt()); ?></p>
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