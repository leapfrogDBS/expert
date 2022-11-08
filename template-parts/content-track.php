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
    
    <section class="bg-blue">
        <div class="container">
   
            <div class="row">
                <div class="col lg:col-span-8 lg:col-start-3">
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
        </div>
    </section>
    
    <section class="bg-white relative">
        <div class="container">
            <div class="row">
                
                <div class="col md:col-span-8 md:col-start-3">
                    <div id="featured-image-container">
                        <?php expert_post_thumbnail(); ?>
                    </div>
                </div>
                
                <div class="col md:col-span-10 md:col-start-2">
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


<section class="bg-turquoise">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="headingTwo text-white text-center">Lessons</h2>
            </div>
        </div>
        <div class="row">
            <div class="col md:col-span-6">

            </div>
            <div class="col md:col-span-6">

            </div>
        </div>
    </div>
</section>
	
<div id="sticky-social-media" class="col flex fixed w-auto bottom-2 right-6 md:left-6 md:right-auto md:bottom-auto md:top-2/3 md:flex-col gap-2 container z-50">
    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f text-3xl text-blue hover:text-turquoise cursor-pointer"></i></a>
    <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in text-3xl text-blue hover:text-turquoise cursor-pointer"></i></a>
    <a href="#" target="_blank"><i class="fa-brands fa-youtube text-3xl text-blue hover:text-turquoise cursor-pointer"></i></a>
    <a href="#" target="_blank"><i class="fa-brands fa-pinterest-p text-3xl text-blue hover:text-turquoise cursor-pointer"></i></a>
    <a href="#" target="_blank"><i class="fa-brands fa-twitter text-3xl text-blue hover:text-turquoise cursor-pointer"></i></a>
</div>


</article><!-- #post-<?php the_ID(); ?> -->


<script>
    function copyFunction() {

        var copyData = document.getElementById("copy-text").innerHTML;
        console.log(copyData);
    var showText = document.getElementById("click-to-copy");



    navigator.clipboard.writeText(copyData);

    showText.innerHTML = "Copied!";

    }
</script>