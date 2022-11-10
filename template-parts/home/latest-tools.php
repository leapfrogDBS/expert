<section id="latest" class="bg-white ds-section">
    <div class="container">
        <div class="row">
            <div class="col col-span-12 md:col-span-8 md:col-start-3 text-center">
                <h2 class="headingTwo">Latest Tools</h2>
                <p class="bodyOne">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi placeat nisi laboriosam ut quasi blanditiis quos? Fuga tempore debitis quaerat.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
            <?php 
            
            global $query_string;
            query_posts( $query_string . '&posts_per_page=9' );
            
                if ( have_posts() ) {
                    ?>

                    <div class="splide" id="articles-slider" >
                        <div class="splide__track">
                            <ul class="splide__list"> 
                            <?php
                            while ( have_posts() ) {
                                the_post(); 
                                $imgSrc;
                                    if (has_post_thumbnail()) {
                                        $imgSrc = get_the_post_thumbnail_url('', "medium");

                                    } else {
                                        $imgSrc = get_template_directory_uri() . "/img/fallback-post.jpg";
                                    } 
                                
                                $reading_time = get_field('reading_time');
                                ?>
                                

                                <li class="splide__slide p-2">                                                  
                                    <div class="rounded-lg bg-grey overflow-hidden drop-shadow-md h-full flex flex-col ">
                                        <div class="realtive">
                                            <img class="w-full h-44 md:h-64 object-cover" data-splide-lazy="<?php echo $imgSrc;?>"/>
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
                                </li>

                            <?php
                            } // end while
                            ?>
                            </ul>
                        </div>
                        <div class="splide__arrows flex justify-center gap-x-6 mt-12">
                            <button class="splide__arrow splide__arrow--prev opacity-100 static bg-white">
                                <i class="fa-solid fa-square-caret-left text-turquoise text-5xl"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next opacity-100 static bg-white">
                                <i class="fa-solid fa-square-caret-right text-turquoise text-5xl"></i>
                            </button>
                        </div>
                    </div>
                <?php
                } // end if
                ?>
            </div>
        </div>
    </div>
</section>
<script>
    var splide4 = new Splide( '#articles-slider', {
        lazyLoad: true,
        pagination: false,
        rewind: true,
        speed: '1000',
        type: 'loop',
        drag: true,
        snap: true,
        perMove: 1,
        perPage: 4, 
        gap: '1.25rem',
        breakpoints: {
		640: {
			perPage: 1,
		},
        840: {
            perPage: 2,
        },
        1200: {
            perPage: 3,
        },
  }


                    
    });
      splide4.mount( window.splide.Extensions );
</script>