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
        <div class="bg-none left-0 right-0 sticky mb-12" id="progress-bar-container">
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

    <section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div onClick="copyFunction()" class="citation relative flex flex-col items-center justify-center cursor-pointer">
                    <h3 class="headingFour">Reference</h3>
                    <div id="citation-text" class="flex gap-x-1 bodyOne">
                        <span class="author"><?php the_author(); ?></span>
                        <span class="published-date">(<?php echo get_the_date( Y ); ?>)</span>
                        <span class="title"><?php the_title(); ?></span>
                        <span class="website-name"><?php echo get_bloginfo( 'name' ); ?></span>
                        <span class="accessed-date">acessed <?php echo date('d F Y');; ?></span>
                        <p id="copy-text" class="hidden"><?php the_author(); ?> (<?php echo get_the_date( Y ); ?>) <?php the_permalink(); ?> <?php the_title(); ?> <?php echo get_bloginfo( 'name' ); ?> acessed <?php echo date('d F Y');; ?></p>			
                    </div>
                    <p id="click-to-copy" class="ctaButton">Click to copy</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col sm:flex justify-center">
                    <div class="author-container max-w-[240px] sm:grid grid-cols-6 rounded-2xl shadow-xl sm:max-w-2xl m-auto">
                        <?php
                        // Get the author ID    
                        $author_id = get_the_author_meta('ID');
                        // Get the author image URL    
                        $output = get_avatar_url($author_id, array('size' => 250));
                        // Display the author image    
                        echo '<img class="col-span-2 w-full h-56 sm:h-full object-cover rounded-t-2xl sm:rounded-l-2xl" src="'.$output.'"/>';
                        ?>
                        <div class="author-details col-span-4 p-4">
                            <p class="headingFive mb-0"><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></p>
                            <p class="subtitleOne mb-0"><?php echo get_the_author_meta( 'nickname', $post->post_author ); ?></p>
                            <p class="subtitleTwo"><?php echo get_the_author_meta( 'user_description', $post->post_author ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-turquoise py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php echo do_shortcode('[ratemypost]'); ?>
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
	
<div id="sticky-social-media" class="col flex flex-col fixed w-auto left-[4%] top-[50%] gap-y-2 container">
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