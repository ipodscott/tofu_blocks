<?php
register_block_pattern("layouts/three_column_layout", [
  "title" => __("Three Column Layout", "textdomain"),
  "categories" => ["column_layout"],
  "keywords" => ["columns"],
  "content" => '<!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-columns" style="padding-top:20px;padding-bottom:20px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Column One</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Column Two</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Column Three</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
]);
