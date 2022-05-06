<?php
register_block_pattern("layouts/movies_starter_thumbs", [
  "title" => __("Movie Page Starter - Thumbs", "textdomain"),
  "categories" => ["page_starter"],
  "keywords" => ["starter "],
  "content" => '<!-- wp:columns {"align":"full","className":"movies-container"} -->
  <div class="wp-block-columns alignfull movies-container"><!-- wp:column {"className":"movies-left-column"} -->
  <div class="wp-block-column movies-left-column"><!-- wp:paragraph {"align":"center","className":"left-movie-title"} -->
  <p class="has-text-align-center left-movie-title">K-Mart Training Videos</p>
  <!-- /wp:paragraph -->
  
  <!-- wp:acf/accordion {"id":"block_62731de28b4a9","name":"acf/accordion","data":{"accordion_header":"About the videos","_accordion_header":"field_614fe150a049f","active":"1","_active":"field_614ffa22baba1"},"align":"","mode":"preview"} -->
  <!-- wp:paragraph -->
  <p>Lorem ipsum dolor sit amet diam imperdiet suspendisse malesuada neque tristique tempus rhoncus incididunt. Dictumst quisque sagittis eros pretium praesent tincidunt malesuada curabitur imperdiet luctus. Eleifend vivamus fringilla massa ultrices tristique lectus elit. Ullamcorper ac curabitur sodales quis elit adipiscing sed etiam rhoncus tortor dapibus leo egestas. Risus at imperdiet egestas senectus mauris auctor netus scelerisque cras cursus mattis.</p>
  <!-- /wp:paragraph -->
  <!-- /wp:acf/accordion -->
  
  <!-- wp:acf/accordion {"id":"block_62733a0de62f4","name":"acf/accordion","data":{"accordion_header":"Accordion HEad Placeholder","_accordion_header":"field_614fe150a049f","active":"1","_active":"field_614ffa22baba1"},"align":"","mode":"preview"} -->
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6164ed3e924a2","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","thumb":268,"_thumb":"field_613b9659a846f","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TheFinishingTouch/FT1080p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_616262142a651","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","thumb":269,"_thumb":"field_613b9659a846f","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-StopShrinkage/SS720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a7b2f92da","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":170,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-ASpecialGuestTheCheck-outCashier/SG720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a4443f38b","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":160,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-ShadeTalk/ST720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163abe183570","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":180,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TheABCsOfFriendlyService-MakingTheSale/MTS720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6162659a7c80f","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":113,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TremendousTrifles/TT720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a32992c23","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":157,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-YourSideOfTheCounter/YSoC720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a74bf92d9","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":168,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-StarPerformer-TheKresgeWayIntroductionToCheck-out/SP720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163ab358356f","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":178,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-LetsGetAcquaintedSeries-YourJob/YJ720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_616269bbdf0a2","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":123,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TheDiaryOfLadyLuck/LL720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_61625fc628c3c","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":100,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-CompleteTheSale/CTS720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a57e3f38d","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":163,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-YoullLoveKatyKresgesThriftyChargePlan/YLK720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a90f8356c","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":173,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-WastingAway/WA720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_61626372a7d71","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":108,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-YoureInShowBusinessSectionCare/SB720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_61626a33df0a3","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":126,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-CounterCare-TheKresgeWay/CC720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a4ef3f38c","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":161,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-MissStarrTellsAll/MSTA720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a810f92db","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":171,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-ARealFriendPersonalizedCustomerService/RF720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6162628ad842d","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":105,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TheCaseOfTheStarWitness/SW720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a29b92c22","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":156,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-SpeakingOfMoney/SOM720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a6f3f92d8","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":167,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-TheABCsOfFriendlyService-HandlingCustomers/HC720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163aaa48356e","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":177,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-LetsGetAcquaintedSeries-YourCustomer/YCu720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_61625f0da04dc","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":97,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-BuyTheWay/BTW720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_61621671dd500","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":39,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"mp4_upload","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","mp4_upload":41,"_mp4_upload":"field_606606753df87"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a5fb3f38e","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":164,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-LetsGetAcquaintedSeries-YourStore/YS720p.mp4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  
  <!-- wp:columns -->
  <div class="wp-block-columns"><!-- wp:column -->
  <div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6163a9318356d","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","thumb":175,"_thumb":"field_613b9659a846f","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"remote_mp4","_select_video_source":"field_606606753de5f","resolution":"standard-btn","_resolution":"field_606606753de9b","remote_mp4":"https://archive.org/download/S.S.KresgeTraining-LetsGetAcquaintedSeries-YourCompany/YC.HD.mpeg4","_remote_mp4":"field_606606753dfc1"},"align":"","mode":"auto"} /--></div>
  <!-- /wp:column -->
  
  <!-- wp:column -->
  <div class="wp-block-column"></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->
  <!-- /wp:acf/accordion -->
  
  <!-- wp:spacer -->
  <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer --></div>
  <!-- /wp:column -->
  
  <!-- wp:column {"className":"movies-right-column"} -->
  <div class="wp-block-column movies-right-column"><!-- wp:cover {"url":"http://localhost:10034/wp-content/uploads/2022/05/N015_1129_001-scaled-e1651864564896.jpeg","id":270,"dimRatio":70,"minHeight":100,"minHeightUnit":"vh","className":"movie-right-overlay"} -->
  <div class="wp-block-cover movie-right-overlay" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-270" alt="" src="http://localhost:10034/wp-content/uploads/2022/05/N015_1129_001-scaled-e1651864564896.jpeg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large"} -->
  <h2 class="has-text-align-center has-x-large-font-size" style="text-transform:uppercase">S.S. Kresge</h2>
  <!-- /wp:heading --></div></div>
  <!-- /wp:cover --></div>
  <!-- /wp:column --></div>
  <!-- /wp:columns -->',
]);
