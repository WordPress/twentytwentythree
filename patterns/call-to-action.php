<?php
/**
 * Title: Call to action
 * Slug: twentytwentythree/cta
 * Categories: featured
 * Keywords: Call to action, signup, newsletter
 * Block Types: core/buttons
 */
?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%">
		<!-- wp:paragraph {"fontSize":"x-large"} -->
		<p class="has-x-large-font-size">
		<?php esc_html_e( 'Get daily reflections in your inbox.', 'twentytwentythree' ); ?>
		</p><!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button">
			<?php esc_html_e( 'Join our mailing list', 'twentytwentythree' ); ?>
		</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
