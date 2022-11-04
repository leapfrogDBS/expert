<section class="bg-yellow">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingTwo text-white text-center">Who are we?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col md:col-span-8 md:col-start-3">
                <!-- The YouTube video -->
                <figure class="content-media content-media--video" id="featured-media">
                    <iframe class="content-media__object z-50" id="featured-video" src="https://www.youtube.com/embed/VJztnIFPO4o?enablejsapi=1&rel=0&showinfo=0&controls=0" frameborder="0"></iframe>
                </figure>
            </div>
        </div>
        <div class="row mt-12">
            <div class="col text-center">
                <a href="#" class="ctaButton">Explore Learning Tracks</a>
            </div>
        </div>
    </div>
</section>

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

    /**
     * Run when the Youtube video state (play, pause, etc.) is changed.
     *
     * @param {Object} event The Youtube Object Event.
     * @return {Void}
     */
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
