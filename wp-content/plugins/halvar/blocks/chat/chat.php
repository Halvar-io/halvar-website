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
if (! empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if (! empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (! empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

if( get_field( 'site_chat', 'option' ) == 'no' ) return;

?>

<div
	class="wp-block-columns chat-icon-col is-layout-flex wp-container-69 wp-block-columns-is-layout-flex">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<figure class="wp-block-image alignright size-full">
			<img decoding="async" loading="lazy" width="137" height="141"
				loading="lazy"
				src="https://www.halvar.io/wp-content/uploads/2023/07/Group-105-2.png"
				alt="Chat icon" class="wp-image-1572">
		</figure>
	</div>
</div>
