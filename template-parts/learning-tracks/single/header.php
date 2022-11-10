<section class="bg-blue lg:py-8">
    <div class="container">
        <div class="row">
            <div class="col lg:col-span-9 flex items-center justify-center">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title headingTwo text-white text-center">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
            </div>
            <div class="col hidden lg:block lg:col-span-3">
                <img src="<?php echo get_template_directory_uri();?>/img/woman.svg" alt="">
            </div>
        </div>
    </div>
</section>
    