<?php
    if( have_rows('testimonial', 'option') ):
?>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col col-span-12 md:col-span-8 md:col-start-3 text-center">
                <h2 class="headingTwo">What our users say</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="splide testimonials-slider" id="testimonials-slider" >
                <div class="splide__track">
                    <ul class="splide__list"> 

                    <?php while( have_rows('testimonial', 'option') ) : the_row(); 
                    $name = get_sub_field('name');
                    $testimonial_text = get_sub_field('testimonial_text');                   
                    ?>
                        <li class="splide__slide p-5">
                            <div class="w-11/12 m-auto max-w-3xl">
                                <h3 class="headingFive"><?php echo $name; ?></h3>
                                <p class="bodyOne italic"><?php echo $testimonial_text; ?></p>
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
        </div>
    </div>
</section>
<script defer>
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

<?php
endif;
?>