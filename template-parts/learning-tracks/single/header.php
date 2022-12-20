<section class="bg-blue py-4">
    <div class="container">
        <div class="row relative">
            <div class="col sm:col-span-7 lg:col-span-9 flex items-center justify-center py-24">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title headingTwo text-white text-center">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
            </div>
            <div class="col absolute inset-0 opacity-20 z-20 sm:relative sm:col-span-5 sm:opacity-100 lg:col-span-3">
                <?php if(has_post_thumbnail()) { ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post-thumbnail images" class="w-auto mx-auto sm:w-full h-full sm:ml-auto sm:mr-0">
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lady1.svg" alt="post-thumbnail images" class="w-auto mx-auto sm:w-full h-full sm:ml-auto sm:mr-0">
                <?php } ?>
            </div>
        </div>
    </div>
</section>
    