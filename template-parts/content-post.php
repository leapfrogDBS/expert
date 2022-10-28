<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package expert
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
	</header><!-- .entry-header -->
    
    <section class="bg-turquoise py-0">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <div class="breadcrumbs subtitleTwo text-white font-medium mt-6 mb-24"><?php display_breadcrumb(); ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col lg:col-span-8 lg:col-start-3 mb-24">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title headingTwo text-white text-center">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
                    <p class="headingSix text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet dicta adipisci nemo neque voluptas incidunt unde commodi. Id laboriosam vel soluta earum omnis pariatur officia nesciunt in tempora sequi itaque atque a totam cupiditate commodi illo quasi blanditiis autem, non mollitia facere officiis esse! Alias qui amet doloremque quam aliquid!</p>
                </div>
            </div>
            <div class="row">
                <div class="col mb-6"> 
                    <div class="flex items-center gap-x-2 justify-end">             
                    <?php
                    // Get the author ID    
                    $author_id = get_the_author_meta('ID');
                    // Get the author image URL    
                    $output = get_avatar_url($author_id);
                    // Display the author image    
                    echo '<img class="rounded-full w-16 h-16 border-white border-2 border-solid" src="'.$output.'"/>';
                    ?>
                        <div class="flex flex-col gap-y-1">
                            <?php
                            // Get author's display name
                            $display_name = get_the_author_meta( 'display_name', $post->post_author );
                                
                            // If display name is not available then use nickname as display name
                            if ( empty( $display_name ) )
                            $display_name = get_the_author_meta( 'nickname', $post->post_author );
                            ?>
                            <p class="subtitleTwo text-white mb-0 font-medium">By <?php echo $display_name; ?></p>
                            <div class="flex items-center">
                                <div class="subtitleTwo mb-0 py-1 text-white"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2">10 minutes</span></div>                                                                  
                                <?php 
                                if (rmp_get_avg_rating( $postID ) != 0) { ?>
                                    <div class="subtitleTwo mb-0 px-2 py-0.5 bg-blue text-white rounded-full ml-2 flex items-center leading-4"><span class="font-medium"><?php echo rmp_get_avg_rating( $postID ); ?></span><i class="fa-solid fa-star text-yellow ml-2 text-[10px]"></i></div>                                               
                                <?php
                                } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white relative pt-0">
        <div class="bg-none top-0 left-0 right-0 sticky mb-12" id="progress-bar-container">
            <div id="progress-bar" class="rounded-r-full bg-orange block z-100 "></div> 
        </div>
        <div class="container">
            <div class="row">
                
                <div class="col lg:col-span-8 lg:col-start-3">
                    <div id="featured-image-container">
                        <?php expert_post_thumbnail(); ?>
                    </div>
                </div>
                
                <div class="col lg:col-span-10 lg:col-start-2">
                    <div class="entry-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'expert' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'expert' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                    </div><!-- .entry-content -->

                </div>
            </div>
        </div>
    </section>

<script>	
	let processScroll = () => {
    let docElem = document.documentElement,
        docBody = document.body,
        scrollTop = docElem['scrollTop'] || docBody['scrollTop'],
        scrollBottom = (docElem['scrollHeight'] || docBody['scrollTop']) - window.innerHeight,
        scrollPercent =scrollTop / scrollBottom * 100 + '%';

        document.querySelector('#progress-bar').style.setProperty('--scrollAmount', scrollPercent)
}
document.addEventListener('scroll', processScroll);
</script>
	
	<footer class="entry-footer">
		<?php expert_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
