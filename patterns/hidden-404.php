<?php
/**
 * Title: Hidden 404
 * Slug: twentytwentythree/hidden-404
 * Inserter: no
 */
?>

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 40vw, 20rem)","fontWeight":"400","lineHeight":"1.25"}},"className":"has-text-align-center"} -->
<h2 class="has-text-align-center" style="font-size:clamp(4rem, 40vw, 20rem);font-weight:400;line-height:1.25"><?php echo esc_html( _x( '404', 'Error code for a webpage that is not found.', 'twentytwentythree' ) ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center"><?php esc_html_e( 'This page could not be found.', 'twentytwentythree' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--100)"} -->
<div style="height:var(--wp--preset--spacing--100)" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_html( _x( 'Search', 'label', 'twentytwentythree' ) ); ?>","placeholder":"<?php echo esc_html( _x( 'Search...', 'placeholder', 'twentytwentythree' ) ); ?>","showLabel":false,"width":70,"widthUnit":"%","buttonText":"<?php esc_html_e( 'Search', 'twentytwentythree' ); ?>","buttonUseIcon":true,"align":"center"} /-->