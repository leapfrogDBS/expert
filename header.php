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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>

  <script src="https://cdn.websitepolicies.io/lib/cookieconsent/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"position":"bottom"})});</script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	

<header id="masthead" class="site-header sticky inset-x-0 top-0 z-[998] bg-white shadow-md">
	
    <div id="announcement-bar" class="sticky top-0 left-0 right-0 bg-blue w-full h-9 z-[999] flex items-center justify-center gap-x-6 text-white">
		<p class="subtitleTwo mb-0 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi asperiores sint cum veniam minima quae aperiam aliquam, eveniet nostrum!</p>
		<i id="close-announcement" class="fa-solid fa-x"></i>
	</div>
		
    <div class="header-container desktop-header-container block py-4">
			
		<div class="container grid grid-cols-3 justify-between items-center w-full">
					
        	<div id="logo-container" class="logo-container h-10 w-auto text-left">
           		<?php the_custom_logo(); ?>
		  	</div>

			<div id="search-bar" class="text-center">
				<input class="bg-white px-4 text-charcoal placeholder-charcoal font-bold border focus:border-charcoal border-charcoal rounded-full max-w-72" type="text" name="keyword" id="keyword" onkeyup="fetch()" placeholder="search..."></input>
					<div id="datafetch" class="fixed left-0 right-0 top-28 text-left px-12 bg-white max-w-lg m-auto bg-white rounded-b-3xl shadow-lg"></div>
			</div>

			
				<nav>
					<ul class="flex items-center justify-center font-semibold justify-end gap-x-6">
						<li class="relative group px-3 py-2">
							<button class="hover:text-blue cursor-default border-none tracking-wider subtitleOne mb-0 font-normal text-charcoal" aria-haspopup="true">Tools</button>
							<div class="fixed left-0 right-0 top-[92px] transition translate-y-0 opacity-0 invisible bg-transparent pt-[20px] group-hover:opacity-100 group-hover:visible duration-500 ease-in-out group-hover:transform z-50 min-w-[560px] transform">
								<div class="container rounded-b-3xl relative py-12 px-24 bg-white shadow-xl w-full">
									<div class="relative z-10">
										<div class="grid grid-cols-3 gap-6">
											
												
												<ul>
													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg transition ease-in-out duration-300 font-semibold hover:text-turquiose">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Career Skills</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Change Management</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Decision Management</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Finance</p>
															</div>
														</a>
													</li>

													
												</ul>
											
											
												<ul>
													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Human Resources</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Interpersonal Skills</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Leadership</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Marketing</p>
															</div>
														</a>
													</li>

												</ul>

												<ul>
													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Personal Development</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Program Mangement</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
																<p>Strategy</p>
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-indigo-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-indigo-600">
															<div class="mega-link flex items-center gap-x-4 ">
																<i class="fa-regular fa-lightbulb"></i>
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
						<a href="#" class="subtitleOne mb-0 text-charcoal tracking-wider">About</a>
						<a href="#" class="subtitleOne mb-0 text-charcoal tracking-wider">Books</a>
						<a href="#" class="ctaButton small text-lg shadow-md tracking-wider">Free Course</a>	
					</ul>
				</nav>
				
		</div>
	</div>
</header>

	

<script>
	announcement = document.querySelector('#announcement-bar')
	closeAnnouncement = document.querySelector('#close-announcement');

	closeAnnouncement.addEventListener('click', hideAnnouncement);

	function hideAnnouncement() {
		announcement.style.visibility = 'hidden';
	}
</script>


