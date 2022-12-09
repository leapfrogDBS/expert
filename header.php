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

$show_announcement_bar = get_field('show_announcement_bar', 'option'); 
$html_classes = "";
if ($show_announcement_bar) {
	$html_classes = "announcement";
}
?>
<!doctype html>
<html class="<?php echo $html_classes; ?>" <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HCYMXP2TYR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HCYMXP2TYR');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>

	<script defer src="https://www.youtube.com/iframe_api"></script>	
	<script defer src="https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#2176FF","text":"#FFFFFF","border":"#FFFFFF"},"button":{"background":"#06D6A0","text":"#ffffff"}},"position":"bottom","transparency":"25","fontsize":"large","content":{"href":"https://expertprogrammanagement.com/cookie-policy/"}})});</script>
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
			<p class="subtitleTwo text-xs sm:text-sm mb-0 text-white"><?php echo get_field('announcement_text', 'option'); ?></p>
			<i id="close-announcement" class="fa-solid fa-x"></i>
		</div>
	</div>
		
    <div class="header-container desktop-header-container block py-4">
			
		<div class="container flex md:grid md:grid-cols-2 lg:grid-cols-3 justify-between items-center mb-1">
					
			<div id="logo-container" class="logo-container h-10 w-auto flex items-center">
           		<a href="<?php echo home_url(); ?>">
					<div class="hidden sm:block">
					<?php
					$desktop_logo = get_field('desktop_header_logo', 'option'); 
						if ($desktop_logo) { ?>
							<img height="34" width="300" class="custom-logo w-[300px] h-[34px]" loading="lazy" src="<?php echo $desktop_logo['url']; ?>" alt="desktop header logo">
						<?php
						}
						?>
					</div>
					<div class="sm:hidden">
						<?php
						$mobile_logo = get_field('mobile_header_logo', 'option'); 
						if ($mobile_logo) { ?>
							<img class="w-44 h-auto" loading="lazy" src="<?php echo $mobile_logo['url']; ?>" alt="mobile header logo">
						<?php
						}
						?>
					</div>
				</a>
		  	</div>

			<div id="search-bar" class="text-center invisible absolute -left-full lg:left-auto opacity-0 pt-5 lg:relative lg:visible lg:opacity-100 lg:pt-0 lg:block bg-white/95 lg:bg-white ">
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
							<?php include(locate_template('template-parts/menu/desktop-menu.php')); ?>
						</div>
					</ul>
				</nav>
				
		</div>
	</div>
</header>

<div id="mobile-menu" class="fixed left-0 right-0 bg-blue w-full z-50 mobile-menu invisible opacity-0 overflow-y-scroll">
	<section>	
		<div class="container">
			<div class="row">
				<div class="col">
					<?php include(locate_template('template-parts/menu/mobile-menu.php')); ?>
				</div>
			</div>
		</div>
	</section>
</div>

<div id="to-top-button" class="fixed bottom-2 md:bottom-6 left-6 z-40 cursor-pointer">
	<div class="bg-pink flex items-center justify-center w-12 h-12 rounded-full">
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
			menu.classList.toggle('invisible')
			menu.classList.toggle('opacity-0')
			menu.classList.toggle('opacity-100')
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
			searchBar.classList.toggle('opcaity-0')
			searchBar.classList.toggle('opacity-100')
			body.classList.toggle('no-scroll');  
		});


	}); //end DOM Load
</script>
