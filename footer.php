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
		<section class="bg-blue text-white pb-6">
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
							<h3 class="headingSix mb-2 md:mb-4 text-white">Products</h3>
							<?php wp_nav_menu( array('menu' => 'Products')); ?>
						</div>
						
					</div>
				</div>
				<div class="row border-t border-white mt-6 pt-6 md:mt-10 md:pt-10">
					<div class="col text-center md:text-left md:col-span-4">
					<?php 
						$footer_logo = get_field('footer_logo', 'option'); 
						if ($footer_logo) { ?>
							<a href="<?php echo home_url(); ?>" ><img loading="lazy" src="<?php echo $footer_logo['url']; ?>" alt="footer logo"></a>
						<?php
						}
						?>
					</div>
					<div class="col md:col-span-4 flex items-center justify-center my-0">
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
				<div class="row mt-6">
					<div class="col">
						<p class="subtitleTwo text-white text-center">&copy; Copyright <?php echo date("Y"); ?> Expert Program Management </p>
</p>
					</div>
				</div>
			</div>
		</section>
		

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
$cta_image = get_field('cta_image', 'option');
$cta_copy = get_field('cta_copy', 'option');
$cta_button_text = get_field('cta_button_text', 'option');
$cta_link = get_field('cta_link', 'option');
?>

<div class="exit-intent-popup" style="transform: translateY(60%) scale(0);">
    <div class="newsletter">
		<div class="bg-turquoise relative">
			<div class="row items-center">
				<div class="col col-span-12 lg:col-span-6 h-full">
				<?php if($cta_image) { ?>
                	<img class=" w-full h-full object-cover object-right" src="<?php echo $cta_image['url']; ?>" loading="lazy" alt="cta image">
				<?php } else { ?>
					<img class=" w-full h-full object-cover object-right" src="<?php echo get_template_directory_uri(); ?>/img/business.jpg" loading="lazy" alt="cta image">
				<?php } ?>
				</div>
				<div class="col col-span-12 lg:col-span-5 px-10 lg:pr-0 py-10">
					<div id="post-content" class="entry-content entry-content block-editor-content white">
					<?php echo $cta_copy; ?>
					</div>	
					<?php if ($cta_link && $cta_button_text) { ?>
						<a href="<?php echo $cta_link; ?>" class="ctaButton"><?php echo $cta_button_text; ?></a>
					<?php
					}
					?>
				</div>
			</div>
			<div class="absolute right-6 top-6 text-white headingThree cursor-pointer"><span class="close">x</span></div>
		</div>	
        
    </div>
</div>
<script defer>
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
        e.target.className === 'close' || // user clicks on the close icon
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
    }, 10_000);
}
</script>



<?php wp_footer(); ?>
	<script defer src="https://edgrmtracking.com/partnersforms/widget/?component=chat&ref=aae8a7fa7f7b6192"></script>
</body>
</html>
