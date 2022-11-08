<section class="bg-blue py-12">
    <div class="container">
        <div class="row">
            <div class="col md:col-span-8 md:col-start-3 text-center">
                <h2 class="headingFour text-white">Featured in</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="splide featured-in-slider" id="featured-in-slider">
                    <div class="splide__track">
                        <ul class="splide__list"> 
                            <li class="splide__slide">
                                <img class="m-auto w-32 h-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-1.svg" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="m-auto w-32 h-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-2.svg" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="m-auto w-32 h-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-3.svg" alt="">
                            </li>
                            <li class="splide__slide">
                                <img class="m-auto w-32 h-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-4.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev bg-transparent opacity-100">
                            <i class="fa-solid fa-chevron-left text-4xl text-turquoise"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next bg-transparent opacity-100">
                            <i class="fa-solid fa-chevron-right text-4xl text-turquoise"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var splide2 = new Splide( '#featured-in-slider', {
        lazyLoad: true,
        pagination: false,
        speed: '1000',
        type: 'loop',
        drag: true,
        snap: true,
        arrows: false,
        perMove: 1,
        perPage: 1,
        arrows: true,
        autoplay: true,
        mediaQuery: 'min',
        breakpoints: {
            640: {
                perPage: 3,
            },
            920: {
                perPage: 4,
                },
            1024: {
                perPage: 5,
            },
        }                 
    });
    splide2.mount();
</script>