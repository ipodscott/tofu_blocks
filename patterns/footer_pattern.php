<?php
register_block_pattern("layouts/footer", [
  "title" => __("Footer", "textdomain"),
  "categories" => ["footers", "contact-form"],
  "keywords" => ["footer"],
  "content" => '<!-- wp:columns {"verticalAlignment":"center","align":"full","className":"footer"} -->
  <div class="wp-block-columns alignfull are-vertically-aligned-center footer"><!-- wp:column {"verticalAlignment":"center"} -->
  <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">Copyright 2022</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->>',
]);
