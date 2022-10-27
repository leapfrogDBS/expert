<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col col-span-12 md:col-span-8 md:col-start-3 text-center">
                <h2 class="headingTwo">What our students say</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="splide testimonials-slider" id="testimonials-slider" >
                <div class="splide__track">
                    <ul class="splide__list"> 
                        <li class="splide__slide p-5">
                            <div class="w-11/12 m-auto max-w-3xl">
                                <h3 class="headingFive">Joe Blogs</h3>
                                <p class="bodyOne italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ab? Molestiae iste ullam expedita cumque nisi aliquam hic eaque ea."</p>
                            </div>
                        </li>
                        <li class="splide__slide p-5">
                            <div class="w-11/12 m-auto max-w-3xl">
                                <h3 class="headingFive">Joe Blogs</h3>
                                <p class="bodyOne italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ab? Molestiae iste ullam expedita cumque nisi aliquam hic eaque ea."</p>
                            </div>
                        </li>
                        <li class="splide__slide p-5">
                            <div class="w-11/12 m-auto max-w-3xl">
                                <h3 class="headingFive">Joe Blogs</h3>
                                <p class="bodyOne italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ab? Molestiae iste ullam expedita cumque nisi aliquam hic eaque ea."</p>
                            </div>
                        </li>
                        <li class="splide__slide p-5">
                            <div class="w-11/12 m-auto max-w-3xl">
                                <h3 class="headingFive">Joe Blogs</h3>
                                <p class="bodyOne italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ab? Molestiae iste ullam expedita cumque nisi aliquam hic eaque ea."</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev left-[35%] -bottom-12 transfrom-none top-auto bg-white opacity-100">
                    <i class="fa-solid fa-square-caret-left text-turquoise text-5xl"></i>
                </button>
                <button class="splide__arrow splide__arrow--next right-[35%] -bottom-12 transfrom-none top-auto bg-white opacity-100">
                    <i class="fa-solid fa-square-caret-right text-turquoise text-5xl"></i>
                </button>
            </div>
            </div>
        </div>
    </div>
</section>
<script>
    var splide3 = new Splide( '#testimonials-slider', {
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
        autoplay: true,      
    });
    splide3.mount();
</script>