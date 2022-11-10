<section class="bg-turquoise">
<?php 
global $wp_query;
$post_count =  $wp_query->post_count;

// Check if there are any posts to display
if ( have_posts() ) : 

?>
    
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
                    $reading_time = get_field('reading_time');
                    ?>

                    <div class="col sm:col-span-6 md:col-span-4 lg:col-span-3 category-post hidden">
                        <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col ">
                            <div class="realtive">
                                <img loading="lazy" class="w-full h-44 md:h-64 object-cover" src="<?php echo $imgSrc;?>"/>
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
                                    <?php
                                        if ($reading_time) {
                                        ?>
                                            <div class="subtitleTwo mb-0 py-1 text-blue"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2"><?php echo $reading_time; ?> minutes</span></div>                                                                  
                                        <?php 
                                        }
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
            
            <div class="row">
                <div class="col flex justify-center mt-12">
                    <div id="loadmore" class="ctaButton">Load more</div>
                </div>
            </div>
            <script>
                /*Load More Button */
                const loadmore = document.querySelector('#loadmore');
                var increments = 8;
                if (window.innerWidth < 1024) {
                    increments = 6;
                } 
                let currentItems = increments;

                const elementList1 = [...document.querySelectorAll('.category-post')];
                    for (let i = 0; i < increments; i++) {
                        if (elementList1[i]) {
                            elementList1[i].classList.toggle('hidden')
                        }
                }

                if (<?php Print($post_count); ?> <= currentItems) {
                    loadmore.style.display = 'none';
                }

                loadmore.addEventListener('click', (e) => {
                    const elementList = [...document.querySelectorAll('.category-post')];
                    for (let i = currentItems; i < currentItems + increments; i++) {
                        if (elementList[i]) {
                            elementList[i].classList.toggle('hidden')
                        }
                    }
                    currentItems += increments;
                    if(currentItems >=  <?php Print($post_count); ?>) {
                        event.target.style.display = 'none';
                    } 
                })
            </script>

        </div>
    
 <?php
else: ?>
<h2 class="headingThree text-center text-white">Sorry, there are currently no posts within this category</h2>
 
<?php endif; ?>
 </section>