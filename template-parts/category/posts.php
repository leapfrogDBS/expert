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
            <div class="row max-w-5xl mx-auto">
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
                   
                    <a href="<?php the_permalink() ?>" class="group col sm:col-span-6 md:col-span-4 lg:col-span-3 category-post hidden">
                        <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col ">
                            <div class="realtive">
                                <img loading="lazy" class="w-full h-44 object-cover" src="<?php echo $imgSrc;?>"/>
                            </div>
                            <div class="px-6 py-3 flex flex-col flex-1 justify-between">        
                                <h3 class="text-lg leading-tight font-semibold mb-1"><?php the_title(); ?></h3>                               
                                <p class="subtitleTwo mb-1"><?php echo strip_tags(get_the_excerpt()); ?></p>
                                
                                <div>
                                    <div class="text-4xl mb-0 md:headingTwo text-turquoise group-hover:text-pink">
                                        <?php
                                        $article_video_link = get_field('article_video_link');
                                        if ($article_video_link) {
                                        ?>
                                            <i class="fa-solid fa-circle-play"></i>     
                                        <?php
                                        } else {
                                        ?>
                                            <i class="fa-brands fa-readme"></i>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="flex justify-between items-center mt-2">
                                    <?php
                                        if ($reading_time) {
                                        ?>
                                            <div class="subtitleTwo mb-0 py-1 text-blue mr-2"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2"><?php echo $reading_time; ?> minutes</span></div>                                                                  
                                        <?php 
                                        }
                                        if (rmp_get_avg_rating( $postID ) != 0) { ?>
                                            <div class="subtitleTwo mb-0 px-2 py-0.5 bg-blue text-white rounded-full flex items-center leading-4"><span class="font-medium"><?php echo rmp_get_avg_rating( $postID ); ?></span><i class="fa-solid fa-star text-yellow ml-2 text-[10px]"></i></div>                                               
                                        <?php
                                        } 
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

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