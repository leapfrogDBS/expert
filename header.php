<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html class="announcement" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>

  
<script src="https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#2176FF","text":"#FFFFFF","border":"#FFFFFF"},"button":{"background":"#06D6A0","text":"#ffffff"}},"position":"bottom","transparency":"25","fontsize":"large","content":{"href":"https://expertprogrammanagement.com/cookie-policy/"}})});</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	

<header id="masthead" class="site-header sticky inset-x-0 top-0 z-[998] bg-white shadow-md">
	
    <div id="announcement-bar" class="sticky top-0 left-0 right-0 bg-blue w-full h-9 z-[999] hidden">
		<div class="flex items-center justify-center gap-x-6 text-white h-full mx-auto w-11/12 max-w-[1320px]">
			<p class="subtitleTwo text-xs sm:text-sm mb-0 text-white">Lorem ipsum <a href="#">test link</a> amet consectetur adipisicing elit!</p>
			<i id="close-announcement" class="fa-solid fa-x"></i>
		</div>
	</div>
		
    <div class="header-container desktop-header-container block py-4">
			
		<div class="container flex md:grid md:grid-cols-2 lg:grid-cols-3 justify-between items-center mb-1">
					
        	<div id="logo-container" class="logo-container h-10 w-auto flex items-center">
           		<div class="hidden sm:block"><?php the_custom_logo(); ?></div>
				<div class="sm:hidden"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.svg" alt=""></div>


		  	</div>

			<div id="search-bar" class="text-center hidden pt-5 lg:p	t-0 lg:block bg-white/95 lg:bg-white ">
				<input class="bg-white px-4 text-charcoal placeholder-charcoal font-bold border focus:border-charcoal border-charcoal rounded-full max-w-72" type="text" name="keyword" id="keyword" onkeyup="fetch()" placeholder="search..."></input>
					<div id="datafetch" class="fixed overflow-y-scroll left-0 right-0 text-left px-12 max-w-lg m-auto lg:bg-white rounded-b-3xl shadow-lg"></div>
			</div>
			
				<nav>
					<ul class="flex items-center font-semibold justify-end gap-x-2 md:gap-x-0">
						<div id="search-icon" class="lg:hidden w-8">
							<i class="fa-solid headingFour mb-0 fa-magnifying-glass text-turquoise text-2xl"></i>
								<div id="close-search-container">
								<div class="hamburger relative w-8 h-[22px] cursor-pointer transition-all duration-[0.25s] z-[999] md:w-[40px]" id="search-close-btn">
									<span class="hamburger-top w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-0 bg-turquoise"></span>
									<span class="hamburger-middle w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[9px] bg-turquoise"></span>
									<span class="hamburger-bottom w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[19px] bg-turquoise"></span>
								</div>
							</div>
						</div>
						
							<div class="hamburger md:hidden relative w-8 h-[22px] cursor-pointer transition-all duration-[0.25s] z-[999] md:w-[40px]" id="menu-btn">
								<span class="hamburger-top w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-0 md:w-[40px] bg-turquoise"></span>
								<span class="hamburger-middle w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[10px] md:w-[40px] bg-turquoise"></span>
								<span class="hamburger-bottom w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[20px] md:w-[40px] bg-turquoise"></span>
							</div>
						
						
						<div class="hidden md:flex">
							<li class="relative group px-3 py-2">
								<button class="hover:text-blue cursor-default border-none  text-base mb-0 font-normal text-charcoal" aria-haspopup="true">Tools</button>
								<div id="mega-menu" class="fixed left-0 right-0 transition translate-y-0 opacity-0 invisible bg-transparent pt-[20px] group-hover:opacity-100 group-hover:visible duration-500 ease-in-out group-hover:transform z-50 min-w-[560px] transform">
									<div class="container rounded-b-3xl relative py-12 px-24 bg-white shadow-xl w-full">
										<div class="relative z-10">
											<div class="grid grid-cols-3 gap-6">											
													<ul>
														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-lightbulb group-hover/item:text-white"></i>
																	<p>Career Skills</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-solid text-turquoise  group-hover/item:text-white headingFive mb-0 fa-book-open-reader"></i>
																	<p>Change Management</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-school group-hover/item:text-white"></i>
																	<p>Decision Management</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-chalkboard group-hover/item:text-white"></i>
																	<p>Finance</p>
																</div>
															</a>
														</li>
													</ul>
												
												
													<ul>
														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-solid text-turquoise headingFive mb-0 fa-atom group-hover/item:text-white"></i>
																	<p>Human Resources</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-user-graduate group-hover/item:text-white"></i>
																	<p>Interpersonal Skills</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-shapes group-hover/item:text-white"></i>
																	<p>Leadership</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-solid text-turquoise headingFive mb-0 fa-apple-whole group-hover/item:text-white"></i>
																	<p>Marketing</p>
																</div>
															</a>
														</li>

													</ul>

													<ul>
														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-solid text-turquoise headingFive mb-0 fa-award group-hover/item:text-white"></i>
																	<p>Personal Development</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-solid text-turquoise headingFive mb-0 fa-bell group-hover/item:text-white"></i>
																	<p>Program Mangement</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-graduation-cap group-hover/item:text-white"></i>
																	<p>Strategy</p>
																</div>
															</a>
														</li>

														<li>
															<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white group/item">
																<div class="mega-link flex items-center gap-x-4 ">
																	<i class="fa-solid text-turquoise headingFive mb-0 fa-laptop-file group-hover/item:text-white"></i>
																	<p>Team Management</p>
																</div>
															</a>
														</li>
													</ul>
												
											</div>
										</div>
									</div>
								</div>
							</li>
							<a href="<?php echo home_url(); ?>/about" class="text-base font-normal mb-0 text-charcoal  px-2 py-2">About</a>
							<a href="#" class="text-base mb-0 font-normal text-charcoal  px-2 py-2">Books</a>
							<a href="#" class="ctaButton small text-base shadow-md  px-3 py-1 ml-2 flex items-center">Free Course</a>	
						</div>
					</ul>
				</nav>
				
		</div>
	</div>
</header>

<div id="mobile-menu" class="fixed left-0 right-0 bg-blue w-full z-50 hidden mobile-menu">
	<section>	
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="#" class="text-base font-normal mb-0 text-charcoal  px-2 py-2">About</a>
					<a href="#" class="text-base mb-0 font-normal text-charcoal  px-2 py-2">Books</a>
					<a href="#" class="ctaButton small text-base shadow-md  px-3 py-1 ml-2 flex items-center">Free Course</a>
				</div>
			</div>
		</div>
	</section>
</div>

<div id="to-top-button" class="fixed bottom-6 left-6 z-[997] cursor-pointer">
	<div class="bg-blue flex items-center justify-center w-12 h-12 rounded-full">
		<i class="fa-solid fa-arrow-up text-white headingSix mb-0"></i>
	</div>
</div>



<script>
	// handle hamburger //
	document.addEventListener("DOMContentLoaded", function(){
		const menuBtn = document.getElementById('menu-btn');
		const menu = document.getElementById('mobile-menu');
		const searchBtn = document.getElementById('search-icon');
		const searchMenu = document.getElementById('mobile-search');
		const searchBar = document.querySelector('#search-bar');
		const body = document.querySelector('body');
		

		menuBtn.addEventListener('click', () => {
      		menuBtn.classList.toggle('open')
			menu.classList.toggle('hidden')
			searchBtn.classList.toggle('hidden')
			body.classList.toggle('no-scroll');  
		});

		searchBtn.addEventListener('click', () => {
			if (searchBtn.classList.contains('open')) {
				searchResults = document.querySelector('#datafetch');
				searchField = document.querySelector('#search-bar #keyword');
				searchResults.innerHTML = "";
				searchField.value = "";
			}
      		searchBtn.classList.toggle('open')
			menuBtn.classList.toggle('hidden')
			searchBar.classList.toggle('show-mobile')
			body.classList.toggle('no-scroll');  
		});


	}); //end DOM Load
</script>
