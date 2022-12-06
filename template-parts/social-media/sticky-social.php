<div id="sticky-social-media" class="col flex fixed w-auto bottom-2 right-6 md:left-6 md:right-auto md:bottom-auto md:top-1/3 md:flex-col gap-2 container z-50">
    <a href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fa-brands fa-facebook-f text-3xl text-pink hover:text-turquoise cursor-pointer"></i></a>
    <a href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" target="_blank"><i class="fa-brands fa-linkedin-in text-3xl text-pink hover:text-turquoise cursor-pointer"></i></a>
    <a href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo get_the_post_thumbnail_url(); ?>&url=<?php echo  get_the_permalink(); ?>&description=<?php echo get_the_title(); ?>" target="_blank"><i class="fa-brands fa-pinterest-p text-3xl text-pink hover:text-turquoise cursor-pointer"></i></a>
    <a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank"><i class="fa-brands fa-twitter text-3xl text-pink hover:text-turquoise cursor-pointer"></i></a>
</div>
