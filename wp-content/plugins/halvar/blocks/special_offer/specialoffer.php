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
	class="wp-block-columns special-offer is-layout-flex wp-container-67 wp-block-columns-is-layout-flex <?php echo $class_name; ?>">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<div
			class="wp-block-columns special-offer-header is-layout-flex wp-container-56 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
				<div
					class="wp-block-columns special-offer-header-inner is-layout-flex wp-container-54 wp-block-columns-is-layout-flex">
					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
						style="flex-basis: 66.66%">
						<h5 class="wp-block-heading">this you can’t refuse</h5>
					</div>



					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
						style="flex-basis: 33.33%">
						<h6 class="wp-block-heading">sale</h6>
					</div>
				</div>
			</div>
		</div>



		<p>Perfect for starter sites, or just to play around.</p>



		<div
			class="wp-block-columns special-offer-bottom is-layout-flex wp-container-64 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
				<p>Special price the first year</p>



				<h4 class="wp-block-heading">€ 2.50 /mo</h4>
			</div>



			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
				<div
					class="wp-block-columns special-offer-buttons is-layout-flex wp-container-62 wp-block-columns-is-layout-flex">
					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
						<div
							class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
							<div class="wp-block-button is-style-outline">
								<a class="wp-block-button__link wp-element-button" href="<?php echo home_url( 'hosting/#specs' ); ?>">specs</a>
							</div>
						</div>
					</div>



					<div
						class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
						<div
							class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
							<div class="wp-block-button">
								<a class="wp-block-button__link wp-element-button" href="https://customerportal.halvar.io/whmcs/cart.php?a=add&pid=1&carttpl=standard_cart&promocode=SDWOA8PQ66">get started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
</div>
