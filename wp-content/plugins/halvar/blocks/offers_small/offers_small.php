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
	class="wp-block-columns alignwide home-packages is-layout-flex wp-container-7 wp-block-columns-is-layout-flex <?php echo $class_name; ?>"
	style="margin-bottom: 0">
	
	
<?php 
$t = get_field( 'hostings' );
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);

$i = 1;
foreach( $t as $item ) {
    $is_reseller = substr_count( $item->post_title , 'eller' ) === 1;
}
?>
	
	
	
	
	<div
		class="wp-block-column home-package-1 has-text-color has-background has-link-color wp-elements-92b33dbf4cd2c29a5249e63edb71aa40 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong>Shared - Stein</strong>
		</h2>



		<p>Perfect for small websites or blogs that are just getting started.</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>€ 2.50 /mo</strong>
		</p>



		<div
			class="wp-block-buttons alignfull is-horizontal is-content-justification-center is-layout-flex wp-container-1 wp-block-buttons-is-layout-flex">
			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo home_url('/hosting/#specs'); ?>"
					style="background-color: #000000">specs</a>
			</div>



			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="https://customerportal.halvar.io/whmcs/cart.php?a=add&pid=1&carttpl=standard_cart&promocode=SDWOA8PQ66"
					style="background-color: #000000">get started</a>
			</div>
		</div>
	</div>

<?php $i++; ?>

	<div
		class="wp-block-column home-package-<?php echo $i; ?> has-text-color has-background has-link-color wp-elements-a7594a88ecc4db59c3e2ccfba15a885f is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong>Shared - Gard</strong>
		</h2>



		<p>This is where things get serious with 10 sites.</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>€ 9.50 /mo</strong>
		</p>



		<div
			class="wp-block-buttons alignfull is-horizontal is-content-justification-center is-layout-flex wp-container-3 wp-block-buttons-is-layout-flex">
			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo home_url('/hosting/#specs'); ?>"
					style="background-color: #000000">specs</a>
			</div>



			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="https://customerportal.halvar.io/whmcs/cart.php?a=add&pid=4&carttpl=standard_cart&promocode=SDWOA8PQ66"
					style="background-color: #000000">get started</a>
			</div>
		</div>
	</div>

<?php $i++; ?>

	<div
		class="wp-block-column home-package-<?php echo $i; ?> has-text-color has-background has-link-color wp-elements-27b262b42fa8cb69532bbefcbe71b583 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong>Shared - Slottet</strong>
		</h2>



		<p>Go big with 20 sites. Get our Slottet package for a *very* competitive price.</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>



		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>€ 13 /mo</strong>
		</p>



		<div
			class="wp-block-buttons alignfull is-horizontal is-content-justification-center is-layout-flex wp-container-5 wp-block-buttons-is-layout-flex">
			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo home_url('/hosting/#specs'); ?>"
					style="background-color: #000000">specs</a>
			</div>



			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="https://customerportal.halvar.io/whmcs/cart.php?a=add&pid=5&carttpl=standard_cart&promocode=SDWOA8PQ66"
					style="background-color: #000000">get started</a>
			</div>
		</div>
	</div>
	
	
	
	
</div>
<div
	class="wp-block-columns alignfull show-all-offers is-layout-flex wp-container-10 wp-block-columns-is-layout-flex">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
		style="flex-basis: 100%">
		<div
			class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
			<div class="wp-block-button is-style-outline">
				<a class="wp-block-button__link wp-element-button" href="<?php echo home_url('/hosting'); ?>">show all offers</a>
			</div>
		</div>
	</div>
</div>
