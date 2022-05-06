<?php

remove_theme_support("core-block-patterns");

register_block_pattern_category("hero", [
  "label" => __("Hero"),
]);

register_block_pattern_category("column_layout", [
  "label" => __("Column Layout"),
]);

register_block_pattern_category("page_starter", [
  "label" => __("Page Starter"),
]);

register_block_pattern_category("footers", [
  "label" => __("Footers"),
]);

include_once "block_pattern_one.php";
include_once "large_promo.php";
include_once "recipe_starter.php";
include_once "movies_starter.php";
include_once "movies_starter_thumbs.php";
include_once "footer_pattern.php";
