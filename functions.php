<?php

if (!function_exists("block_theme_setup")):
  function block_theme_setup()
  {
    // Add support for block styles.
    add_theme_support("wp-block-styles");
    // Enqueue editor styles.
    add_editor_style("editor-style.css");
    // Enqueue Google Fonts to Appear both in the Admin Area and Front End. Google hosted fonts are not fully supported.
   
  }
  add_action("after_setup_theme", "block_theme_setup");
endif;


function preview_stuff()
// Adds preview stuff.
{
  wp_enqueue_style( "lato", "//fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap", true, "1.1", "all" );
  wp_enqueue_style( "montserrat", "/fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap", true, "1.1", "all" );
  wp_enqueue_style( 'admin', get_template_directory_uri() . '/assets/css/admin.css',true,'1.1','all');
  wp_enqueue_script( "scripts", get_template_directory_uri() . "/assets/js/scripts.js", ["jquery"], "1.0", true );
}
add_action('admin_footer', 'preview_stuff');



/* Enqueue scripts and styles */
if (!function_exists("theme_enqueue_scripts_styles")):
  function theme_enqueue_scripts_styles()
  {
	  wp_enqueue_style( "mytheme-style", get_template_directory_uri() . "/assets/css/style.css", false, "1.1", "all" );
	  wp_enqueue_style( "editor-style", get_template_directory_uri() . "/editor-style.css", false, "1.1", "all" );
    wp_enqueue_style( "animate", get_template_directory_uri() . "/assets/css/animate.css", false, "1.1", "all" );
	  wp_enqueue_style( "material_fonts", "//fonts.googleapis.com/css?family=Material+Icons", true, "1.1", "all" );
	  wp_enqueue_script( "scripts", get_template_directory_uri() . "/assets/js/scripts.js", ["jquery"], "1.0", true );
  }
  add_action("wp_enqueue_scripts", "theme_enqueue_scripts_styles");
endif;

// Show Reusable Blocks from the backend
function add_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-controls-repeat', 22 );
}
add_action( 'admin_menu', 'add_reusable_blocks_admin_menu' );



add_post_type_support(
  'page', array(
    'thumbnail', 'excerpt'),
    'post', array(
    'thumbnail', 'excerpt'),
  );

function recipe_cpt()
{
  add_post_type_support( 'recipe', 'thumbnail' );
  add_post_type_support( 'recipe', 'excerpt' );
  register_post_type("recipe", [
    "labels" => [
      "name" => __("Recipes", "textdomain"),
      "singular_name" => __("Recipe", "textdomain"),
      "template" => [["core/pattern", ["slug" => "page_starter/recipe_page_starter"]]],
    ],
    "public" => true,
    "has_archive" => true,
    "show_in_rest" => true,
    "label" => "Recieps",
    "rewrite" => array('slug' => 'recipe')
  ]);
}
add_action("init", "recipe_cpt");

/* Movies CPT*/

function movies_cpt()
{
  add_post_type_support( 'movies', 'thumbnail' );
  add_post_type_support( 'movies', 'excerpt' );
  register_post_type("movies", [
    "labels" => [
      "name" => __("Movies", "textdomain"),
      "singular_name" => __("Movie", "textdomain"),
    ],
    "public" => true,
    "has_archive" => true,
    "show_in_rest" => true,
    "label" => "Movies",
    "rewrite" => array('slug' => 'movie'),
    "template" => [["core/pattern", ["slug" => "layouts/movies_starter"]]],
  ]);
}
add_action("init", "movies_cpt");

// Setup Core Block Patterns

include_once "pattern_controller.php";
