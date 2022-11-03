<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
 <main id="primary" class="site-main">


 <section class="bg-orange">
    <div class="container">
        <div class="row">
            <div class="col lg:col-span-8 lg:col-start-3">
                <h1 class="headingTwo text-white text-center"><?php echo single_cat_title() ; ?></h1>
                <p class="headingSix text-white text-center"><?php echo category_description('', false); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col md:col-span-8 md:col-start-3">
                <div id="featured-image-container">
                    <img class="w-full object-cover mb-12" src="<?php echo get_template_directory_uri(); ?>/img/fallback-post.jpg" alt="">
                </div>
            </div>
            <div class="col md:col-span-10 md:col-start-2">
                    <h2 class="headingTwo">Lorem, ipsum dolor.</h2>
                    <h3 class="headingFour">Lorem ipsum dolor sit amet.</h3>
                    <p class="bodyOne">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam delectus, accusantium, vero eum commodi sunt inventore aut iste minus cumque tenetur, error suscipit eaque mollitia quos harum iusto quisquam molestiae? Cupiditate velit praesentium suscipit, excepturi explicabo harum maxime quae alias necessitatibus obcaecati est eveniet repellendus perferendis nulla iusto rerum rem!</p>
            </div>
        </div>
    </div>
</section>
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : 

?>
    <section class="bg-turquoise">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="headingTwo text-white text-center"><?php echo single_cat_title() ; ?> Tools</h1>
                    <p class="bodyOne text-white mb-12 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius dolorum eligendi corrupti, harum quia et dolor provident accusamus, sunt nesciunt, minus placeat nemo eaque voluptatem iste exercitationem quae impedit nihil!</p>
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
                                
                                <div>
                                    <a class="headingTwo text-turquoise" href="<?php the_permalink() ?>"><i class="fa-brands fa-readme"></i><i class="fa-solid fa-circle-play"></i></a>
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

                <?php endwhile; 
                ?>  
            </div>
        </div>
    </section>
 <?php
else: ?>
<h2 class="headingOne text-center">Sorry, there are currently no posts within this category</h2>
 
 <?php endif; 

 include(locate_template('template-parts/home/follow-us.php'));

include(locate_template('template-parts/home/start-business.php'));
?>
</main>


<?php get_footer(); ?>