<?php

if (!function_exists("block_theme_setup")):
  function block_theme_setup()
  {
    // Add support for block styles.
    add_theme_support("wp-block-styles");
    // Enqueue editor styles.
    add_editor_style("editor-style.css");
    // Enqueue Google Fonts to Appear both in the Admin Area and Front End. Google hosted fonts are not fully supported.
    wp_enqueue_style(
      "lato",
      "//fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap",
      true,
      "1.1",
      "all"
    );
    wp_enqueue_style(
      "poppins",
      "//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap",
      true,
      "1.1",
      "all"
    );
    wp_enqueue_style(
      "roboto",
      "//fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap",
      true,
      "1.1",
      "all"
    );
  }
  add_action("after_setup_theme", "block_theme_setup");
endif;

/* Enqueue scripts and styles */
if (!function_exists("theme_enqueue_scripts_styles")):
  function theme_enqueue_scripts_styles()
  {
    wp_enqueue_style(
      "mytheme-style",
      get_template_directory_uri() . "/assets/css/main_min.css",
      false,
      "1.1",
      "all"
    );
    wp_enqueue_style(
      "material_fonts",
      "//fonts.googleapis.com/css?family=Material+Icons",
      true,
      "1.1",
      "all"
    );
    wp_enqueue_script(
      "scripts",
      get_template_directory_uri() . "/assets/js/scripts.js",
      ["jquery"],
      "1.0",
      true
    );
  }
  add_action("wp_enqueue_scripts", "theme_enqueue_scripts_styles");
endif;

function recipe_cpt()
{
  register_post_type("recipe", [
    "labels" => [
      "name" => __("Recipes", "textdomain"),
      "singular_name" => __("recipe", "textdomain"),
    ],
    "public" => true,
    "has_archive" => true,
    "show_in_rest" => true,
    "label" => "Recieps",
    "template" => [["core/pattern", ["slug" => "layouts/recipe_page_starter"]]],
  ]);
}
add_action("init", "recipe_cpt");

// Setup Core Block Patterns

include_once "patterns/pattern_controller.php";
