<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package expert
 */

?>

	<footer id="colophon" class="site-footer">
		<section class="bg-blue text-white">
			<div class="container">
				<div class="row">
					<div class="col md:col-span-4 lg:col-span-3 lg:col-start-3 mb-4 md:mb-0">
						<h3 class="headingSix mb-2 md:mb-4 text-white">Tools</h3>
						<?php wp_nav_menu( array('menu' => 'Tools')); ?>
					</div>
					<div class="col md:col-span-4 lg:col-span-3 mb-4 md:mb-0">
						<h3 class="headingSix mb-2 md:mb-4 text-white">Information</h3>
						<?php wp_nav_menu( array('menu' => 'Information')); ?>
					</div>
					<div class="col md:col-span-4 lg:col-span-3 flex flex-col justify-between mb-4 md:mb-0">
						<div>
							<h3 class="headingSix mb-2 md:mb-4 text-white">Books</h3>
							<?php wp_nav_menu( array('menu' => 'Books')); ?>
						</div>
						<div>
						<?php
							$cta_link_address = get_field('cta_link_address', 'option'); 
													
							if ($cta_link_address) {
							?>				
								<a href="<?php echo $cta_link_address; ?>" class="ctaButton text-base bg-turquoise mt-8 md:mt-0">Free course</a>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="row border-t border-white mt-6 pt-6 md:mt-10 md:pt-10">
					<div class="col text-center md:text-left md:col-span-4">
					<?php 
						$footer_logo = get_field('footer_logo', 'option'); 
						if ($footer_logo) { ?>
							<a href="<?php echo home_url(); ?>" ><img loading="lazy" src="<?php echo $footer_logo['url']; ?>" alt=""></a>
						<?php
						}
						?>
					</div>
					<div class="col md:col-span-4 flex items-center justify-center mt-6 mb-8 md:my-0">
					<?php
					$terms_page = get_field('terms_page', 'option'); 
					$privacy_page = get_field('privacy_page', 'option'); 
					$cookies_page = get_field('cookies_page', 'option'); 
					
					if ($terms_page) { 
					?>
						<a href="<?php echo $terms_page; ?>" class="subtitleTwo font-bold text-white mr-6 mb-0 hover:text-turquoise">Terms</a>
					<?php
					}
					if ($privacy_page) { 
					?>
						<a href="<?php echo $privacy_page; ?>" class="subtitleTwo font-bold text-white mr-6 mb-0 hover:text-turquoise">Privacy</a>
					<?php
					}
					if ($cookies_page) { 
					?>
						<a href="<?php echo $cookies_page; ?>" class="subtitleTwo font-bold text-white mr-6 mb-0 hover:text-turquoise">Cookies</a>
					<?php
					}

					?>

					</div>
					<div class="col md:col-span-4 flex justify-center nd:justify-end items-center gap-x-6">
					<?php
					$facebook = get_field('facebook', 'option'); 
					$linkedin = get_field('linkedin', 'option'); 
					$youtube = get_field('youtube', 'option'); 
					$pinterest = get_field('pinterest', 'option'); 
					$twitter = get_field('twitter', 'option'); 
					
					if ($facebook) { 
					?>
						<a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook-f text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					<?php
					}
				
					if ($linkedin) { 
					?>
						<a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin-in text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					<?php
					}

					if ($youtube) { 
					?>
						<a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					<?php
					}
					
					if ($pinterest) { 
					?>
						<a href="<?php echo $pinterest; ?>" target="_blank"><i class="fa-brands fa-pinterest-p text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					<?php
					}
					
					if ($twitter) { 
					?>
						<a href="<?php echo $twitter; ?>" target="_blank"><i class="fa-brands fa-twitter text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					<?php
					}
					?>
						
					</div>
				</div>
			</div>
		</section>
		

	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="exit-intent-popup z-50">
	<div class="newsletter relative">
		<?php include(locate_template('template-parts/cta/start-business.php')); ?>	
		<i id="close" class="fa-solid fa-xmark text-white text-3xl cursor-pointer absolute top-4 right-4"></i>
	</div>
</div>
<script>
/* Exit Popup */ 
const CookieService = {
    setCookie(name, value, days) {
        let expires = '';

        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }

        document.cookie = name + '=' + (value || '')  + expires + ';';
    },

    getCookie(name) {
        const cookies = document.cookie.split(';');

        for (const cookie of cookies) {
            if (cookie.indexOf(name + '=') > -1) {
                return cookie.split('=')[1];
            }
        }

        return null;
    }
};  
const exit = e => {
    const shouldExit =
        [...e.target.classList].includes('exit-intent-popup') || // user clicks on mask
        e.target.id === 'close' || // user clicks on the close icon
        e.keyCode === 27; // user hits escape

    if (shouldExit) {
        document.querySelector('.exit-intent-popup').classList.remove('visible');
    }
};	

const mouseEvent = e => {
    const shouldShowExitIntent = 
        !e.toElement && 
        !e.relatedTarget &&
        e.clientY < 10;

    if (shouldShowExitIntent) {
        document.removeEventListener('mouseout', mouseEvent);
        document.querySelector('.exit-intent-popup').classList.add('visible');

        CookieService.setCookie('exitIntentShown', true, 30);
    }
};

if (!CookieService.getCookie('exitIntentShown')) {
    setTimeout(() => {
        document.addEventListener('mouseout', mouseEvent);
        document.addEventListener('keydown', exit);
        document.querySelector('.exit-intent-popup').addEventListener('click', exit);
    }, 0);
}
</script>

<?php wp_footer(); ?>

</body>
</html>
