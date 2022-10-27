<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col text-center md:col-span-8 md:col-start-3 mb-6">
                <h2 class="headingTwo">Learning Tracks</h2>
                <p class="bodyOne">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi placeat nisi laboriosam ut quasi blanditiis quos? Fuga tempore debitis quaerat.</p>
            </div>
        </div>

        <div class="splide learning-tracks-slider max-w-md m-auto md:max-w-none" id="learning-tracks-slider" >
            <div class="splide__track">
                <ul class="splide__list md:grid md:grid-cols-12 md:gap-x-5"> 
                    <li class="splide__slide md:col-span-4">
                        <div class="shadow-md mb-8 mx-2 mb-8 mx-2">
                            <div class="square bg-yellow pb-[100%] relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lady1.svg" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                            <div class="info p-8">
                                <h3 class="headingSix">Track One</h3>
                                <p class="bodyTwo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati omnis repellat, impedit sint, asperiores consequuntur, atque eaque eius velit neque dolores quod nam vel sequi autem laudantium voluptatum qui ipsum?</p>
                                <a href="#" class="ctaButton small">Learn more</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide md:col-span-4">
                        <div class="shadow-md mb-8 mx-2">
                            <div class="square bg-yellow pb-[100%] relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/man.svg" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                            <div class="info p-8">
                                <h3 class="headingSix">Track Two</h3>
                                <p class="bodyTwo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati omnis repellat, impedit sint, asperiores consequuntur, atque eaque eius velit neque dolores quod nam vel sequi autem laudantium voluptatum qui ipsum?</p>
                                <a href="#" class="ctaButton small">Learn more</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide md:col-span-4">
                        <div class="shadow-md mb-8 mx-2">
                            <div class="square bg-yellow pb-[100%] relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/lady2.svg" alt="" class="h-5/6 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            </div>
                            <div class="info p-8">
                                <h3 class="headingSix">Track Three</h3>
                                <p class="bodyTwo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati omnis repellat, impedit sint, asperiores consequuntur, atque eaque eius velit neque dolores quod nam vel sequi autem laudantium voluptatum qui ipsum?</p>
                                <a href="#" class="ctaButton small">Learn more</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="splide__arrows block md:hidden">
                <button class="splide__arrow splide__arrow--prev left-[35%] -bottom-12 transfrom-none top-auto bg-white opacity-100">
                    <i class="fa-solid fa-square-caret-left text-turquoise text-5xl"></i>
                </button>
                <button class="splide__arrow splide__arrow--next right-[35%] -bottom-12 transfrom-none top-auto bg-white opacity-100">
                    <i class="fa-solid fa-square-caret-right text-turquoise text-5xl"></i>
                </button>
            </div>
        </div>      
        <script>
            var splide = new Splide( '#learning-tracks-slider', {
                lazyLoad: true,
                pagination: true,
                rewind: true,
                speed: '1000',
                type: 'slide',
                drag: true,
                snap: true,
                arrows: false,
                perMove: 1,
                perPage: 1,
                arrows: true,
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        destroy: true,
                    },
                }                       
            });
            splide.mount();
        </script>

        
        <div class="row mt-24 md:mt-12">
            <div class="col col-span-12 text-center">
                <a href="#" class="ctaButton">Explore all learning tracks</a>
            </div>
        </div>
    </div>
</section>