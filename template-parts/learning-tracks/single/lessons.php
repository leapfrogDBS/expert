<?php
$learning_track_title = get_field('learning_track_title');
$learning_track_copy = get_field('learning_track_copy');

if( have_rows('learning_track_lessons') ) {

    $rowCount = count( get_field('learning_track_lessons'));
    $i = 1;
    $marginTop = 0;
?>

<section class="bg-turquoise">
    <div class="container lessons-container">
        <div class="row mb-12">
            <div class="col col-span-10 col-start-2">
                <h2 class="headingTwo text-white text-center"><?php echo $learning_track_title; ?></h2>
                <?php if ($learning_track_copy) { ?>
                    <p class="bodyOne text-white"><?php echo $learning_track_copy; ?></p>
                <?php } ?>
            </div>
        </div>
        
            
            <?php
            while( have_rows('learning_track_lessons') ) : the_row();

            // Load sub field value.
            $learning_track_lesson = get_sub_field('learning_track_lesson');
            $title = get_the_title($learning_track_lesson->ID);
            $imgSrc = get_the_post_thumbnail_url($learning_track_lesson->ID, "medium");
            $categories = get_the_category($learning_track_lesson->ID);
            $excerpt = strip_tags(get_the_excerpt($learning_track_lesson->ID));
            $permalink = get_permalink($learning_track_lesson->ID);
            $rowClasses = "";
            $style = "margin-top: -". $marginTop . "px;";   

            if (!$imgSrc) {
                $imgSrc = get_template_directory_uri() . "/img/fallback-post.jpg";
            }
            
            $cardOrder = "order-1 slide-left";
            $lineOrder = "order-2 ";
            $borders = "border-r-4";
            $colStart = "col-start-1 md:col-start-2";

            $topBorders = "";
            $bottomBorders = "border-t-4";

            if ($i % 2 == 0) {
                $cardOrder = "order-2 slide-right";
                $lineOrder = "order-1";
                $borders = "border-l-4";
                $colStart = "col-start-1 md:col-start-7";
                $rowClasses =  $rowClasses . " md:translate-x-[-4px]";
            }

            if ($i === 1) {
                $topBorders = "invisible";
                $rowClasses = "";
                $style = "";
            }
            if ($i === $rowCount) {
                $bottomBorders = "invisible";
                $topBorders = "border-b-4";
            }
                        
            ?>

        <div class="lesson-card row gap-x-0 mx-auto max-w-sm md:max-w-none<?php echo $rowClasses; ?>" style="<?php echo $style; ?>">
            <div class="col col-span-12 md:col-span-5 <?php echo $colStart; ?>">
                <div class="grid grid-cols-12">
                    <div class="flex flex-col col-span-12 md:col-span-10 js-scroll <?php echo $cardOrder; ?>">
                        <div class="flex justify-center">
                            <div class="p-4 border-2 border-white bg-orange rounded-full w-20 h-20 self-center flex items-center justify-center mb-4 ">
                                <h3 class="headingThree text-white inline mb-0"><?php echo $i; ?></h3>
                            </div>
                        </div>        
                            
                        <div class="rounded-lg  bg-grey overflow-hidden drop-shadow-md h-full flex flex-col js-scroll fade-in">
                            <div class="realtive">
                                <img loading="lazy" class="w-full h-44 md:h-64 object-cover" src="<?php echo $imgSrc;?>"/>
                            </div>
                            <div class="px-6 py-3 flex flex-col flex-1 justify-between"> 
                                 <?php
                                    if ( ! empty( $categories ) ) {
                                        echo '<p class="text-xs text-orange font-semibold mb-1">' . esc_html( $categories[0]->name ) . '</p>';
                                    }
                                ?>           
                                <h3 class="text-lg leading-tight font-semibold mb-1"><?php echo $title ?></h3>                               
                                <p class="subtitleTwo mb-1"><?php echo $excerpt; ?></p>
                                
                                <div>
                                <a class=" text-4xl mb-0 md:headingTwo  text-turquoise" href="<?php the_permalink() ?>">
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
                                    <div class="flex justify-between items-center mt-2">
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
                    <div class="hidden col-span-2 md:flex flex-col js-scroll fade-in-bottom  <?php echo $lineOrder; ?>">
                        <div id="top" class="h-1/2 border-white <?php echo $borders; ?> <?php echo $topBorders; ?>"></div>
                        <div id="bottom" class="h-1/2 border-white <?php echo $borders; ?> <?php echo $bottomBorders; ?>"></div>
                    
                    </div>
                </div>
            </div>
        </div>    
            <?php
            $i++;
            $marginTop = $marginTop + 100;
            endwhile;
            ?>

        
    </div>
</section>
<?php
}
?>