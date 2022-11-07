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
					<div class="col md:col-span-3 md:col-start-3 mb-4 md:mb-0">
						<h3 class="headingSix mb-2 md:mb-4 text-white">Tools</h3>
						<ul>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Interpersonal Skills
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Leadership
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Marketing
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Personal Devlopment
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Program Management
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Strategy
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Team Management
								</a>
							</li>
						</ul>
					</div>
					<div class="col md:col-span-3 mb-4 md:mb-0">
						<h3 class="headingSix mb-2 md:mb-4 text-white">Information</h3>
						<ul>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									About us
								</a>
							</li>
							<li class="mb-1 md:mb-2"> 
								<a href="#" class="subtitleTwo text-white hover:text-turquoise">
									Contact us
								</a>
							</li>
						</ul>
					</div>
					<div class="col md:col-span-3 flex flex-col justify-between mb-4 md:mb-0">
						<div>
							<h3 class="headingSix mb-2 md:mb-4 text-white">Books</h3>
							<ul>
								<li class="mb-1 md:mb-2"> 
									<a href="#" class="subtitleTwo text-white hover:text-turquoise">
										Leadership
									</a>
								</li>
								<li class="mb-1 md:mb-2"> 
									<a href="#" class="subtitleTwo text-white hover:text-turquoise">
										Project Management
									</a>
								</li>
							</ul>
						</div>
						<div>
							<a href="#" class="ctaButton text-base bg-turquoise mt-8 md:mt-0">Free course</a>
						</div>
					</div>
				</div>
				<div class="row border-t border-white mt-6 pt-6 md:mt-10 md:pt-10">
					<div class="col text-center md:text-left md:col-span-4">
						<?php the_custom_logo(); ?>
					</div>
					<div class="col md:col-span-4 flex items-center justify-center mt-6 mb-8 md:my-0">
						<a href="#" class="subtitleTwo font-bold text-white mr-6 mb-0 hover:text-turquoise">Terms</a>
						<a href="#" class="subtitleTwo font-bold text-white mr-6 mb-0 hover:text-turquoise">Privacy</a>
						<a href="#" class="subtitleTwo font-bold text-white mb-0 hover:text-turquoise">Cookies</a>
					</div>
					<div class="col md:col-span-4 flex justify-center nd:justify-end items-center gap-x-6">
						<a href="#" target="_blank"><i class="fa-brands fa-facebook-f text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
						<a href="#" target="_blank"><i class="fa-brands fa-linkedin-in text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
						<a href="#" target="_blank"><i class="fa-brands fa-youtube text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
						<a href="#" target="_blank"><i class="fa-brands fa-pinterest-p text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
						<a href="#" target="_blank"><i class="fa-brands fa-twitter text-2xl md:text-4xl text-white hover:text-turquoise cursor-pointer"></i></a>
					
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
