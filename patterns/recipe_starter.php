<?php
register_block_pattern("layouts/recipe_page_starter", [
  "title" => __("Recipe Page Starter", "textdomain"),
  "categories" => ["page_starter"],
  "keywords" => ["starter "],
  "content" => '<!-- wp:cover {"url":"https://images.unsplash.com/photo-1495461199391-8c39ab674295?ixlib=rb-1.2.1\u0026ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8\u0026auto=format\u0026fit=crop\u0026w=1470\u0026q=80","id":163,"hasParallax":true,"dimRatio":70,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
  <div class="wp-block-cover alignfull has-parallax" style="background-image:url(https://images.unsplash.com/photo-1495461199391-8c39ab674295?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center"} /--></div></div>
  <!-- /wp:cover -->
  
  <!-- wp:spacer {"height":"40px"} -->
  <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"right":"20px","left":"20px"}}}} -->
  <div class="wp-block-columns alignwide" style="padding-right:20px;padding-left:20px"><!-- wp:column {"width":"66.66%"} -->
  <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
  <p><strong>ABOUT THE RECIPE</strong></p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p>Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p>Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum.Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p><strong>DIRECTIONS:</strong></p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p>Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
  <!-- /wp:paragraph --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"33.33%"} -->
  <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
  <p><strong>INGREDIENTS:</strong></p>
  <!-- /wp:paragraph -->
  
  <!-- wp:list -->
  <ul><li>Ingredient 1</li><li>Ingredient 2</li><li>Ingredient 3</li><li>ingredient 4</li><li>Ingredient 5</li></ul>
  <!-- /wp:list --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->',
]);
