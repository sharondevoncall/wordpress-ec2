<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-business-company/home-latest-posts
 * Categories: theme
 * Keywords: posts
 */
?>
<!-- wp:group {"metadata":{"name":"blog"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.2","letterSpacing":"0px"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:0px;line-height:1.2"><?php esc_html_e( 'CHECKOUT RECENT BLOGS', 'blockskit-business-company' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Aptent euismod scelerisque nostra, quia. Arcu eros tortor. Molestiae facilisis cum iste,<br>eros explicabo id, condimentum, culpa dignissimos, odit porttitor, itaque, totam.', 'blockskit-business-company' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":28,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"0px"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Learn More","excerptLength":15,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->