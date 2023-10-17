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
?>

<div
	class="wp-block-columns home-star-reviews is-layout-flex wp-container-23 wp-block-columns-is-layout-flex <?php echo $class_name; ?>">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<figure class="wp-block-image size-full">
			<img decoding="async" width="194" height="33"
				loading="lazy"
				src="https://www.halvar.io/wp-content/uploads/2023/07/group-30.png"
				alt="4-stars" class="wp-image-342">
		</figure>



		<h6 class="wp-block-heading">Wonderful Organization and</h6>



		<p>
			Met Jergen a wonderful support<br>Agent she was patient with me and..
		</p>
	</div>



	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<figure class="wp-block-image size-full">
			<img decoding="async" width="194" height="33"
				loading="lazy"
				src="https://www.halvar.io/wp-content/uploads/2023/07/group-30.png"
				alt="4-stars" class="wp-image-342">
		</figure>



		<h6 class="wp-block-heading">Wonderful Organization and</h6>



		<p>
			Met Jergen a wonderful support<br>Agent she was patient with me and..
		</p>
	</div>



	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
</div>
