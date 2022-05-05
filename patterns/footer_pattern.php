<?php
register_block_pattern("layouts/footer", [
  "title" => __("Footer", "textdomain"),
  "categories" => ["layouts", "contact-form"],
  "keywords" => ["footer"],
  "content" => '<!-- wp:columns {"align":"full","className":"footer"} -->
<div class="wp-block-columns alignfull footer"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">Copyright 2022</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
]);
