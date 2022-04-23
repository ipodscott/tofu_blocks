<?php 
	
	function theme_enqueue_scripts_styles() {
    wp_enqueue_style( 'mytheme-style', get_template_directory_uri() . '/assets/css/main_min.css',false,'1.1','all');
    wp_enqueue_style( 'material_fonts', '//fonts.googleapis.com/css?family=Material+Icons',true,'1.1','all');
	wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap',true,'1.1','all');
	wp_enqueue_style( 'presson_font', get_template_directory_uri() . '/assets/css/webfonts/presson-clean.css',true,'1.1','all');
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts_styles' );
	
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook.
 */
function myfirsttheme_setup() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
	
	wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap',true,'1.1','all');
	
	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );


