<?php
/**
 * expert functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package expert
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function expert_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on expert, use a find and replace
		* to change 'expert' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'expert', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'expert' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'expert_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'expert_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function expert_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'expert_content_width', 640 );
}
add_action( 'after_setup_theme', 'expert_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function expert_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'expert' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'expert' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'expert_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function expert_scripts() {
	wp_enqueue_style( 'expert-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'expert-style', 'rtl', 'replace' );

	wp_enqueue_script( 'expert-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'expert_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Custom Scripts and Styles */
function add_custom_scripts() {
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');
	wp_enqueue_script('youtube', 'https://www.youtube.com/iframe_api');
	wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js');
	wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.css');
	wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js');
	wp_enqueue_script('splide-grid-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js');
	wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');	
	wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');	
}

add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
?>
<script type="text/javascript">
function fetch(){

    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'post',
        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
        success: function(data) {
            jQuery('#datafetch').html( data );
        }
    });

}
</script>

<?php
}


// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( 
      array( 
        'posts_per_page' => -1, 
        's' => esc_attr( $_POST['keyword'] ), 
        'post_type' => 'post' 
      ) 
    );
  
    if( $the_query->have_posts() ) : ?>
		<div id="close-search-container" class="w-full flex justify-end">
			<i id="close-search" class="fa-solid fa-xmark text-blue text-3xl cursor-pointer mb-4 mt-4"></i>
		</div>
		<div class="flex flex-col mb-4">
		<?php
        while( $the_query->have_posts() ): $the_query->the_post(); ?>
			<div class="grid grid-cols-3 gap-x-4 mb-7">
				<div class="thumbnail-container">
					<?php
					if (has_post_thumbnail()) {
					?>
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" class="w-full object-cover rounded-lg">
					<?php
					} else {
					?>
						<img src="<?php echo get_template_directory_uri();?>/img/fallback-post.jpg" class="w-full object-cover rounded-lg">
					<?php
					}
					?>
				</div>
				<div class="post-info col-span-2">
					<h4 class="subtitleTwo mb-0"><?php the_category(' '); ?></h4>								
					<h3 class="subtitleOne font-bold leading-5 mb-0"><a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a></h3>
					<a class="text-3xl text-turquoise" href="<?php the_permalink() ?>"><i class="fa-solid fa-circle-play"></i></a>
					<div class="flex items-center">
						<div class="subtitleTwo mb-0 py-1 text-blue"><i class="fa-regular fa-clock"></i><span class="font-medium ml-2">10 minutes</span></div>                                                                  
						<?php 
						if (rmp_get_avg_rating( $postID ) != 0) { ?>
							<div class="subtitleTwo mb-0 px-2 py-0.5 bg-blue text-white rounded-full ml-2 flex items-center leading-4"><span class="font-medium"><?php echo rmp_get_avg_rating( $postID ); ?></span><i class="fa-solid fa-star text-yellow ml-2 text-[10px]"></i></div>                                               
						<?php
						} 
						?>
						</div>
					</div>
				</div>
        <?php endwhile;
		?>
		</div>
		<script>
			searchResults = document.querySelector('#datafetch');
			closeButton = searchResults.querySelector('#close-search');
			searchField = document.querySelector('#search-bar #keyword');
			closeButton.addEventListener('click', closeSearch);
			searchBar = document.querySelector('#search-bar');
			searchIcon = document.querySelector('#search-icon');

			function closeSearch () {
				searchResults.innerHTML = "";
				searchField.value = "";
				if (searchBar.classList.contains('show-mobile')) {
					searchBar.classList.toggle('show-mobile');
				}
				if (searchIcon.classList.contains('open')) {
					searchIcon.classList.toggle('open');
					const menuBtn = document.getElementById('menu-btn');
					menuBtn.classList.toggle('hidden');
				}
				
			}
			</script>
		<?php
        wp_reset_postdata();  
    endif;

    die();
}

function wpshock_search_filter( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array('post','page') );
    }
    return $query;
}
add_filter('pre_get_posts','wpshock_search_filter');


/* Hide Admin Bar */
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

/* Display Breadcrumbs */
function display_breadcrumb() {
	echo 'Home';
	if (is_category() || is_single()){
	echo " <span style='color:#2176FF;font-size:larger;'>  >  </span> ";
	the_category (' • ');
	if (is_single()) {
	echo " <span style='color:#2176FF;font-size:larger;'>  >  </span> ";
	the_title();
	}
	} elseif (is_page()) {
	echo " <span style='color:#2176FF;font-size:larger;'>  >  </span> ";
	echo the_title();
	} elseif (is_search()) {
	echo " > Results for...";
	echo '"';
	echo the_search_query();
	echo '"';
	}
	}






// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// REMOVE RSS FEED SUPPORT
add_action( 'after_theme_support', 'remove_feed' );

function remove_feed() {
   remove_theme_support( 'automatic-feed-links' );
}

// Use what works best for your website
add_action('init', 'my_head_cleanup');

function my_head_cleanup() {
  // Category Feeds
  remove_action( 'wp_head', 'feed_links_extra', 3 ); 

  // Post and Comment Feeds
  remove_action( 'wp_head', 'feed_links', 2 );

   // Windows Live Writer
  remove_action( 'wp_head','wlwmanifest_link' );                         

  // WP version
   remove_action( 'wp_head', 'wp_generator' );   
}

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}


/* Remove Query Strings */
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		 $src = remove_query_arg( 'ver', $src );
		return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/* Remove RSD Links */
remove_action( 'wp_head', 'rsd_link' ) ;

/* Disable Emoticons */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* Remove Shortlink */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/* Disable Embeds */
function disable_embed(){
	wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'disable_embed' );

/* Disable XML-RPC */
add_filter('xmlrpc_enabled', '__return_false');

/* Hide WordPress Version */
remove_action( 'wp_head', 'wp_generator' ) ;

/* Remove WLManifest Link */
remove_action( 'wp_head', 'wlwmanifest_link' ) ;

/* Disable Self Pingback */
function disable_pingback( &$links ) {
	foreach ( $links as $l => $link )
		if ( 0 === strpos( $link, get_option( 'home' ) ) )
			unset($links[$l]);
	}
add_action( 'pre_ping', 'disable_pingback' );

/* Disable Heartbeat */
add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
	wp_deregister_script('heartbeat');
}

/*Disable Dashicons on Front-end */
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

/* Disable Contact Form 7 JS/CSS */
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );



// Remove p tags from category description
remove_filter('term_description','wpautop');
