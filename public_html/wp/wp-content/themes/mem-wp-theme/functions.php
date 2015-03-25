<?php
/** 
 * @package MemilyM Designs
 */

add_action( 'after_setup_theme', 'mem_setup' );

if ( ! function_exists( 'mem_setup' ) ):

function mem_setup() {

	load_theme_textdomain( 'mem', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	add_editor_style();

	// Load up our theme options page and related code.
	//require( dirname( __FILE__ ) . '/inc/theme-options.php' );

	// Grab Twenty Eleven's Ephemera widget.
	//require( dirname( __FILE__ ) . '/inc/widgets.php' );

	add_theme_support( 'automatic-feed-links' );

	register_nav_menu( 'primary', __( 'Primary Menu', 'mem' ) );


}
endif; 

function mem_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'mem' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );

}
add_action( 'widgets_init', 'mem_widgets_init' );
