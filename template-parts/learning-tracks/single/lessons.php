<?php
if( have_rows('learning_track_lessons') ) {
?>

<section class="bg-turquoise">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="headingTwo text-white text-center">Lessons</h2>
            </div>
        </div>
        <div class="row">
            
            <?php
            while( have_rows('learning_track_lessons') ) : the_row();

            // Load sub field value.
            $learning_track_lesson = get_sub_field('learning_track_lesson');
            $title = get_the_title($learning_track_lesson->ID);
            $imgSrc = get_the_post_thumbnail_url($learning_track_lesson->ID, "medium");
            $categories = get_the_category($learning_track_lesson->ID);
            $excerpt = strip_tags(get_the_excerpt($learning_track_lesson->ID));
            $permalink = get_permalink($learning_track_lesson->ID);

            if (!$imgSrc) {
                $imgSrc = get_template_directory_uri() . "/img/fallback-post.jpg";
            }
            ?>
            <div class="col sm:col-span-6 md:col-span-4 lg:col-span-3">
                <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col">
                    <div class="realtive">
                        <img loading="lazy" class="w-full h-44 md:h-64 object-cover" src="<?php echo $imgSrc;?>"/>
                        <div class="absolute top-0 left-0 ml-6 mt-4">
                            <?php
                                if ( ! empty( $categories ) ) {
                                    echo '<a class="subtitleTwo bg-grey px-3 py-1.5 rounded-full" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="py-8 px-6 flex flex-col flex-1 justify-between">        
                        <h3 class="headingSix"><?php echo $title ?></h3>                               
                        <p class="bodyTwo"><?php echo $excerpt; ?></p>
                        
                        <div>
                        <a class=" text-5xl md:headingTwo  text-turquoise" href="<?php the_permalink() ?>">
                                                <?php
                                                $article_video_link = get_field('article_video_link');
                                                if ($article_video_link) {
                                                ?>
                                                   <i class="fa-solid fa-circle-play"></i></a>     
                                                <?php
                                                } else {
                                                ?>
                                                    <i class="fa-brands fa-readme"></i>
                                                <?php
                                                }
                                                ?>
                                                </a>
                            <div class="flex justify-between items-center mt-5">
                                <div class="subtitleTwo mb-0 py-1 text-blue"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2">10 minutes</span></div>                                                                  
                                <?php 
                                if (rmp_get_avg_rating( $postID ) != 0) { ?>
                                    <div class="subtitleTwo mb-0 px-2 py-0.5 bg-blue text-white rounded-full ml-2 flex items-center leading-4"><span class="font-medium"><?php echo rmp_get_avg_rating( $postID ); ?></span><i class="fa-solid fa-star text-yellow ml-2 text-[10px]"></i></div>                                               
                                <?php
                                } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            endwhile;
            ?>

        </div>
    </div>
</section>
<?php
}
?>