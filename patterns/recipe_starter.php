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
  
  <!-- wp:columns -->
  <div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"70%"} -->
  <div class="wp-block-column" style="flex-basis:70%"><!-- wp:paragraph -->
  <p><strong>ABOUT THIS RECIPE</strong></p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p>Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph -->
  <p>DIRECTIONS:</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:list {"ordered":true,"fontSize":"small"} -->
  <ol class="has-small-font-size"><li>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit.</li><li>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit.</li><li>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit.</li></ol>
  <!-- /wp:list --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"width":"30%"} -->
  <div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":3} -->
  <h3>Ingredients:</h3>
  <!-- /wp:heading -->
  
  <!-- wp:list -->
  <ul><li>Ingredient One</li><li>Ingredient Two</li><li>Ingredient Three</li><li>Ingredient Four</li></ul>
  <!-- /wp:list --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->',
]);
