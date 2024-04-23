<?php
 /**
  * Title: News
  * Slug: smartlog/news
  * Categories: smartlog,frontpage
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","right":"30px","bottom":"80px","left":"30px"},"blockGap":"0px"}},"backgroundColor":"lower-background","className":"has-background-secondary-background-color","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-secondary-background-color has-lower-background-background-color has-background" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"bottom":"30px"}}}} -->
<div class="wp-block-group" style="padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:400"><strong><?php esc_html_e('Own what you make&nbsp;','smartlog');?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"main-title"} -->
<h2 class="wp-block-heading has-text-align-center has-main-title-font-size"><?php esc_html_e('Showcase your Content','smartlog');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","right":"15px","bottom":"15px","left":"15px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"smartlog-animation fadeInUp","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide smartlog-animation fadeInUp"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"1","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-box-shadow","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-box-shadow" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"footer-column"} -->
<div class="wp-block-group alignwide has-footer-column-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-date {"textAlign":"center","format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->