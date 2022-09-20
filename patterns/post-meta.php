<?php
/**
 * Title: Post Meta
 * Slug: twentytwentythree/post-meta
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-meta
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:separator {"opacity":"css","align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-css-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|70"}},"fontSize":"small"} -->
	<div class="wp-block-columns alignwide has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1ch"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'Posted', 'Verb to explain the publication status of a post', 'twentytwentythree' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-date {"format":"<?php echo esc_html_x( 'F j, Y', 'Date format for publication date of post', 'twentytwentythree' ); ?>"} /-->

				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'in', 'Preposition to show the relationship between the post and its categories', 'twentytwentythree' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"1ch"}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'by', 'Preposition to show the relationship between the post and its author', 'twentytwentythree' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-author-name {"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1ch"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>
					<?php echo esc_html_x( 'Tags:', 'Label for a list of post tags', 'twentytwentythree' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-terms {"term":"post_tag"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
