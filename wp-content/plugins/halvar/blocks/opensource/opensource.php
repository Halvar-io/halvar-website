<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */
// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?php echo $anchor; ?> class="wp-block-columns open-source-btn is-layout-flex wp-container-16 wp-block-columns-is-layout-flex <?php echo $class_name; ?>">
	<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%"></div>
		<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
			<div class="wp-block-columns open-source-sec-inner is-layout-flex wp-container-14 wp-block-columns-is-layout-flex">
				<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
					<h5 class="wp-block-heading"><strong><?php echo get_field( 'slogan' ); ?></strong></h5>
				</div>
			<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
				<p><?php echo get_field( 'content' ); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="wp-block-columns home-more-btn is-layout-flex wp-container-19 wp-block-columns-is-layout-flex">
	<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button" href="<?php echo get_field( 'button_link' ); ?>"><?php echo get_field( 'button_text' ); ?></a>
			</div>
		</div>
	</div>
</div>
