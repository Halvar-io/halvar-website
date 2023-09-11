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
	class="wp-block-columns Hosting-excellent-support-sec is-layout-flex wp-container-37 wp-block-columns-is-layout-flex">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<div
			class="wp-block-columns Hosting-excellent-support-sec-col is-layout-flex wp-container-35 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>



			<div
				class="wp-block-column Hosting-excellent-support-sec-inner is-layout-flow wp-block-column-is-layout-flow"
				id="home-page-heading">
				<h4 class="wp-block-heading">You are in good hands</h4>

<?php 
if( have_rows( 'supports' ) ) {
    $i = 1;
    while( have_rows( 'supports' ) ) {
        the_row();
        if( $i == 3 ) { $i = 1; }
?>

				<div
					class="wp-block-columns excellent-support-sec-suppot-<?php echo $i; $i++;?> is-layout-flex wp-container-27 wp-block-columns-is-layout-flex">
					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
						style="flex-basis: 33.33%">
						<figure class="wp-block-image size-full">
							<img decoding="async" width="108" height="108"
								loading="lazy"
								src="https://halvarbouwio-w113c2.preview.wpmanaged.nl/wp-content/uploads/2023/07/Group-40.png"
								alt="Computer icon" class="wp-image-392">
						</figure>
					</div>
					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
						style="flex-basis: 66.66%">
						<h6 class="wp-block-heading"><?php echo get_sub_field( 'support_title' ); ?></h6>
						<p><?php echo get_sub_field( 'support_content' ); ?></p>
					</div>
				</div>

<?php 
    }
}
?>

				<a class="excellent-support-sec-btn wp-block-read-more"
					href="<?php echo home_url( 'hosting' ); ?>/"
					target="_self">get started<span class="screen-reader-text">:
						Hosting</span></a>
			</div>
		</div>
	</div>
</div>
