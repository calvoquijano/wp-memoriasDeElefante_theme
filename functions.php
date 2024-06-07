<?php
/**
 * memorias de Elefante functions and definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */
/**
 * constantes definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */
define('RUTAELEFANTE', get_stylesheet_directory_uri(  ));
define('IMAGELEFANTE', RUTAELEFANTE . '/images');


/**
 * características definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
$content_width = 1200;

// Register Theme Features
function elefante_theme_features()  {
    
    // Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );
    
	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'audio' ) );
    
	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );
    
	// Add theme support for Custom Background
	$background_args = array(
        'default-color'          => 'f6f6f6',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );
    
	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style( 'editor-elefante.css' );
    
	// Add theme support for Translation
	load_theme_textdomain( 'elefante', get_template_directory() . '/lang' );
    
    //Add personalized image size
    add_image_size('ancho-de-imagen' , 820, 615, true);
}
add_action( 'after_setup_theme', 'elefante_theme_features' );
/**
 * estilos definitions
 */
require_once('includes/scripts-styles.php');
/**
 * scripts definitions
 */
require_once('includes/scripts-javascript.php');
/**
 *  menu definitions
 */
require_once('includes/menus.php');
/**
 *  sidebars definitions
 */
require_once('includes/sidebars.php');