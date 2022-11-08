<section id="learning-tracks" class="bg-white ds-section">
    <div class="container">
        <div class="row">
            <div class="col text-center md:col-span-8 md:col-start-3 mb-6">
                <h2 class="headingTwo">Learning Tracks</h2>
                <p class="bodyOne">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi placeat nisi laboriosam ut quasi blanditiis quos? Fuga tempore debitis quaerat.</p>
            </div>
        </div>


        <div class="custom-posts">
        <?php
            $args = array(
                'post_type' => 'track',
                'posts_per_page' => 9
            );
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
                <div class="splide learning-tracks-slider max-w-[80%] m-auto md:max-w-none" id="learning-tracks-slider" >
                    <div class="splide__track">
                        <ul class="splide__list"> 

                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li class="splide__slide md:col-span-4">
                                <div class="shadow-md mb-8 mx-2 mb-8 mx-2">
                                    <div class="square bg-yellow pb-[100%] relative">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lady1.svg" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                    <div class="info p-8">
                                        <h3 class="headingSix"><?php the_title(); ?></h3>                               
                                        <p class="bodyTwo"><?php echo strip_tags(get_the_excerpt()); ?></p>                                     
                                        <a href="<?php the_permalink() ?>" class="ctaButton small">Learn more</a>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                
                        </ul>
                    </div>
                    <div class="splide__arrows flex justify-center gap-x-6 mt-6">
                        <button class="splide__arrow splide__arrow--prev opacity-100 static bg-white">
                            <i class="fa-solid fa-square-caret-left text-turquoise text-5xl"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next opacity-100 static bg-white">
                            <i class="fa-solid fa-square-caret-right text-turquoise text-5xl"></i>
                        </button>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <script>
            var splide = new Splide( '#learning-tracks-slider', {
                lazyLoad: true,
                pagination: true,
                rewind: true,
                speed: '1000',
                type: 'loop',
                drag: true,
                snap: true,
                arrows: false,
                perMove: 1,
                perPage: 1,
                arrows: true,
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        perPage: 3,
                    },
                },                       
            });
            splide.mount();
        </script>

        
        <div class="row mt-12">
            <div class="col col-span-12 text-center">
                <a href="<?php echo home_url(); ?>/track" class="ctaButton">Explore all learning tracks</a>
            </div>
        </div>
    </div>
</section>