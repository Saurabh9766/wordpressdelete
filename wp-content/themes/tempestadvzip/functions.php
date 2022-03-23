<?php



 

function twentytwenty_theme_support() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );
	add_theme_support( 'title-tag' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);
	add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'twentytwenty_theme_support' );




/**

 * Register and Enqueue Scripts.

 */


  function wptempsp_scripts(){
    wp_enqueue_style('sp-themestyle', get_stylesheet_uri());
     wp_enqueue_style('sp-animate', get_template_directory_uri().'/css/animate.min.css');
    wp_enqueue_style('sp-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('sp-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('sp-slick', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style('sp-easy-res', get_template_directory_uri().'/css/easy-responsive-tabs.css');
    wp_enqueue_style('sp-mpopup', get_template_directory_uri().'/css/magnific-popup.min.css');
    wp_enqueue_style('sp-owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('sp-responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('sp-fawesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    
     
     wp_enqueue_script( 'sp-jquery3', get_template_directory_uri() . '/js/3.3.1-jquery.min.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-slickjs', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-owl-carouseljs', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
      wp_enqueue_script( 'sp-wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true ); 
     wp_enqueue_script( 'sp-scriptjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-easyResponsiveTabsjs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-magnificjs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
     wp_enqueue_script( 'sp-tabs-resjs', get_template_directory_uri() . '/js/tabs-responsive.js', array(), '1.0.0', true ); 
    
    remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

}

    add_action("wp_enqueue_scripts","wptempsp_scripts");






/**

 * Register navigation menus.

 */

function twentytwenty_menus() {
	$locations = array(
		'primary'  => __( 'Primary Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'footertwo'   => __( 'Footertwo Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'twentytwenty_menus' );



/**

 * Register widget areas.

 */

function twentytwenty_sidebar_registration() {
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',

		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',

		'after_widget'  => '</div></div>',

	);



	// Footer #1.

	register_sidebar(

		array_merge(

			$shared_args,

			array(

				'name'        => __( 'Footer #1', 'twentytwenty' ),

				'id'          => 'sidebar-1',

				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),

			)

		)

	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

	register_sidebar( array(
        'name' => __( 'About Us', 'twentytwelve' ),
        'id' => 'aboutus',
		'description' => __( 'Widgets in this area will be displayed about us content', 'twentytwenty' ),
        ));	
}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );


