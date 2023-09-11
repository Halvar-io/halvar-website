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
	class="wp-block-columns hosting-packages-details is-layout-flex wp-container-23 wp-block-columns-is-layout-flex">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<h3 class="wp-block-heading">All these packages are inclusive</h3><a name="specs"></a>

<div class="wp-block-columns is-layout-flex wp-container-20 wp-block-columns-is-layout-flex">
<?php 
if( have_rows( 'packages' ) ) {
    while( have_rows( 'packages' ) ) {
        the_row();        
?>
		<div
			class="wp-block-columns is-layout-flex wp-container-17 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">

				<figure class="wp-block-image size-full is-resized">
					<img decoding="async"
						src="<?php echo get_sub_field( 'package_image' )['url']; ?>"
						alt="" class="wp-image-392" width="108" height="108">
				</figure>

				<h5 class="wp-block-heading"><?php echo get_sub_field( 'package_title' ); ?></h5>
				<?php echo get_sub_field( 'package_content' ); ?>
			</div>

		</div>
<?php 
    }
}
?>		
	</div>	</div>
</div>