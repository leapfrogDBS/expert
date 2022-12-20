<?php 
$reading_time = get_field('reading_time');

?>
<section class="bg-turquoise pt-0">
    <div class="container">
        <div class="row ">
                <div class="col flex flex-row gap-x-12 md:items-start justify-between mb-6 sm:mb-12 mt-6 md:mb-24 gap-y-6">
                <div class="breadcrumbs text-xs md:text-sm subtitleTwo mb-0 text-white font-medium"><?php display_breadcrumb(); ?></div>
                <div class="flex items-center gap-x-2 justify-end">             
                <?php
                // Get the author ID    
                $author_id = get_the_author_meta('ID');
                // Get the author image URL    
                $output = get_avatar_url($author_id);
                // Display the author image    
                echo '<img class="rounded-full w-11 h-11 md:w-16 md:h-16 border-white border-2 border-solid" src="'.$output.'"/>';
                ?>
                    <div class="flex flex-col md:gap-y-1">
                        <?php
                        // Get author's display name
                        $display_name = get_the_author_meta( 'display_name', $post->post_author );
                            
                        // If display name is not available then use nickname as display name
                        if ( empty( $display_name ) )
                        $display_name = get_the_author_meta( 'nickname', $post->post_author );
                        ?>
                        <p class="text-xs md:text-sm subtitleTwo text-white mb-0 font-medium whitespace-nowrap">By <?php echo $display_name; ?></p>
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="text-xs md:text-sm subtitleTwo mb-0 py-1 text-white"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2"><?php post_read_time(); ?></div>                                                                  
                            <?php
                            if (rmp_get_avg_rating( $postID ) != 0) { ?>
                                
                                    <div class="text-xs md:text-sm subtitleTwo mb-0 px-2 py-0.5 bg-blue text-white rounded-full md:ml-2 w-11 flex items-center leading-4"><span class="font-medium"><?php echo rmp_get_avg_rating( $postID ); ?></span><i class="fa-solid fa-star text-yellow ml-2 text-[10px]"></i></div>                                               
                                
                            <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col lg:col-span-8 lg:col-start-3">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title headingTwo text-white text-center">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>
            </div>
        </div>
    </div>
</section>