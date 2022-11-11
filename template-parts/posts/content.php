<?php
$article_has_video = get_field('article_has_video');
$article_video_link = get_field('article_video_link');
$show_featured_image = get_field('show_featured_image');
?>

<section class="bg-white relative pt-0 pb-12">
        <div class="bg-none left-0 right-0 sticky mb-6" id="progress-bar-container">
            <div id="progress-bar" class="rounded-r-full bg-orange block z-100 "></div> 
        </div>
        <div class="container">
            <div class="row">
                <?php
                if ($article_has_video && $article_video_link) {
                ?>
                    <div class="col md:col-span-8 md:col-start-3">
                    <!-- The YouTube video -->
                    <figure class="content-media content-media--video" id="featured-media">
                        <iframe class="content-media__object z-40" id="featured-video" src="<?php echo $article_video_link; ?>" frameborder="0"></iframe>
                    </figure>
                </div>
                <?php
                } 
                if($show_featured_image) {
                ?>
                    <div class="col md:col-span-8 md:col-start-3">
                        <div id="featured-image-container">
                            <?php expert_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php
                }
                ?>             
                
                <div class="col md:col-span-10 md:col-start-2">
                    <div class="entry-content block-editor-content">
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

<script>
 jQuery( function( $ ) {
        
        var $window = $( window ); // 1. Window Object.
        var $featuredMedia = $( "#featured-media" ); // 1. The Video Container.
        var $featuredVideo = $( "#featured-video" ); // 2. The Youtube Video.
        
       
          
            var player; // 3. Youtube player object.
            var top = $featuredMedia.offset().top; // 4. The video position from the top of the document;
            var offset = Math.floor( top + ( $featuredMedia.outerHeight() / 2 ) ); //5. offset.
        
            window.onYouTubeIframeAPIReady = function() {
                player = new YT.Player( "featured-video", {
                events: {
                    "onStateChange": onPlayerStateChange
                }
                } );
                };
        
           
            function onPlayerStateChange( event ) {
                var isPlay  = 1 === event.data;
                var isPause = 2 === event.data;
                var isEnd   = 0 === event.data;
            
                if ( isPlay ) {
                $featuredVideo.removeClass( "is-paused" );
                $featuredVideo.toggleClass( "is-playing" );
                }
            
                if ( isPause ) {
                $featuredVideo.removeClass( "is-playing" );
                $featuredVideo.toggleClass( "is-paused" );
                }
            
                if ( isEnd ) {
                $featuredVideo.removeClass( "is-playing", "is-paused" );
                }
            }
        
        
            $window
            .on( "resize", function() {
            top = $featuredMedia.offset().top;
            offset = Math.floor( top + ( $featuredMedia.outerHeight() / 2 ) );
            } )
            
            .on( "scroll", function() {
            $featuredVideo.toggleClass( "is-sticky",
                $window.scrollTop() > offset && $featuredVideo.hasClass( "is-playing" )
            );
            } );

      
    
     } );
</script>
