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
            <div class="row">
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
									<img loading="lazy" class="w-full h-64 object-cover" src="<?php echo $imgSrc;?>"/>
									<div class="absolute top-0 left-0 ml-6 mt-4">
										<?php
										$categories = get_the_category();
											if ( ! empty( $categories ) ) {
												echo '<a class="subtitleTwo bg-grey px-3 py-1.5 rounded-full" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
											}
										?>
									</div>
								</div>
								<div class="py-8 px-6 flex flex-col flex-1 justify-between">        
									<h3 class="headingSix"><?php the_title(); ?></h3>                               
									<p class="bodyTwo"><?php echo strip_tags(get_the_excerpt()); ?></p>
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