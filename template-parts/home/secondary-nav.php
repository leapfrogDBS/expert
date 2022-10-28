<div class="seconadry-nav bg-white sticky top-0 shadow-md z-50 hidden sm:block">
    <div class="container">
        <div id="anchor-links" class="flex justify-center items-center gap-x-12">
            <a href="#learning-tracks" class="inline-block subtitleOne pb-1 mt-6 mb-4 border-b-2 border-white hover:border-turquoise">Learning Tracks</a>
            <a href="#latest" class=" inline-block subtitleOne pb-1 mt-6 mb-4 border-b-2 border-white hover:border-turquoise">Latest Tools</a>  
            <a href="#why" class="inline-block subtitleOne pb-1 mt-6 mb-4 border-b-2 border-white hover:border-turquoise">Why Expert Program Management?</a>
        </div>
    </div>
</div>

<script>
/* Anchor links Highlight */
jQuery(function ($) {
    $('#anchor-links a:first-child').addClass('ds-menu-active')
        $(window).scroll(function () {
        var scrollPos = $(window).scrollTop();
        $('.ds-section').each(function (i) {
            var topPos = $(this).offset().top;
            if ((topPos - scrollPos) <= 80) {
                $('.ds-menu-active').removeClass('ds-menu-active')
                $('#anchor-links a').eq(i).addClass('ds-menu-active')
            }
        })
    });
});
</script>