<?php
register_block_pattern("layouts/large_promo", [
  "title" => __("Large Promo", "textdomain"),
  "categories" => ["hero", "contact-form"],
  "keywords" => ["promo"],
  "viewportWidth" => "1400px",
  "content" => '<!-- wp:cover {"url":"https://pd.w.org/2021/12/19161c40234162960.60560174.jpg","id":null,"dimRatio":30,"overlayColor":"black","minHeight":650,"isDark":false,"align":"full"} -->
  <div class="wp-block-cover alignfull is-light" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="https://pd.w.org/2021/12/19161c40234162960.60560174.jpg" data-object-fit="cover" /><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
  <p class="has-text-align-center has-x-large-font-size" style="line-height:1.2"><strong>Every day a million miracles begin at sunrise.</strong></p>
  <!-- /wp:paragraph -->
  
  <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
  <p class="has-text-align-center" style="font-size:16px">Mi himenaeos varius ultricies sociis class nostra, erat fames congue ligula sollicitudin dapibus, mattis sodales praesent mus platea.</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:spacer {"height":"10px"} -->
  <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->
  
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons"><!-- wp:button {"textColor":"black","gradient":"very-light-gray-to-cyan-bluish-gray","style":{"border":{"radius":"19px"}},"className":"is-style-fill"} -->
  <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-black-color has-very-light-gray-to-cyan-bluish-gray-gradient-background has-text-color has-background" style="border-radius:19px">EXPLORE</a></div>
  <!-- /wp:button --></div>
  <!-- /wp:buttons --></div></div>
  <!-- /wp:cover -->',
]);
