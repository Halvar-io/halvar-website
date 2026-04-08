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

$discount_percentage = get_field( 'percentage_discount' );
$override_discountcode = get_field( 'override_discountcode' );

$all_fields = get_fields();
if( !isset( $all_fields['hide_features'] ) ) {
	$all_fields['hide_features'] = [];
}

$disc_type = $all_fields['disc_type'] ?? 'NVME';

$t = get_field( 'hostings' );
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
?>
	
	
	
	<?php
	$item = $all_fields['hostings'][0];
	$is_reseller = substr_count( $item->post_title , 'eller' ) === 1;
	$is_server = substr_count( $item->post_title , 'erver' ) === 1;
    
	$link_order = get_field( 'link_order', $item );
	$price_discount = get_field( 'price_discount', $item );
	$price = get_field( 'price', $item );
	
    	// 2.5 => 2.50
	if( intval( $discount_percentage ) > 0 ) {
		$price_discount = round( $price -  ( ($price/100) * $discount_percentage ), 2 );
		if( substr_count( $price_discount, '.' ) == 1 ) {
			$t_price = explode( '.', $price_discount );
			if( strlen( $t_price[1] ) == 1 ) {
				$price_discount .= '0';
			}
		}
	}
	
	if( $override_discountcode ) {
		if( substr_count( $link_order, 'promocode' ) == 0 ) {
			$link_order .= '&promocode='.esc_attr( $override_discountcode );
		} else {
			$link_order = preg_replace("#&promocode=.+#", '&promocode='.esc_attr( $override_discountcode ), $link_order );
		}
	}	
	?>
	<div
		class="wp-block-column home-package-1 has-text-color has-background has-link-color wp-elements-92b33dbf4cd2c29a5249e63edb71aa40 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong><?php echo strstr( $item->post_title," "); ?></strong>
		</h2>

		<p><?php echo get_the_excerpt( $item ); ?></p>


		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>&euro; <?php echo $price_discount; ?> /mo</strong>
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
					href="<?php echo $link_order; ?>"
					style="background-color: #000000">get started</a>
			</div>
		</div>
	</div>

<?php $i++;


	$item = $all_fields['hostings'][1];
	$is_reseller = substr_count( $item->post_title , 'eller' ) === 1;
	$is_server = substr_count( $item->post_title , 'erver' ) === 1;
    
	$link_order = get_field( 'link_order', $item );
	$price_discount = get_field( 'price_discount', $item );
	$price = get_field( 'price', $item );
	
    	// 2.5 => 2.50
	if( intval( $discount_percentage ) > 0 ) {
		$price_discount = round( $price -  ( ($price/100) * $discount_percentage ), 2 );
		if( substr_count( $price_discount, '.' ) == 1 ) {
			$t_price = explode( '.', $price_discount );
			if( strlen( $t_price[1] ) == 1 ) {
				$price_discount .= '0';
			}
		}
	}
	
	if( $override_discountcode ) {
		if( substr_count( $link_order, 'promocode' ) == 0 ) {
			$link_order .= '&promocode='.esc_attr( $override_discountcode );
		} else {
			$link_order = preg_replace("#&promocode=.+#", '&promocode='.esc_attr( $override_discountcode ), $link_order );
		}
	}	
	?>

	<div
		class="wp-block-column home-package-<?php echo $i; ?> has-text-color has-background has-link-color wp-elements-a7594a88ecc4db59c3e2ccfba15a885f is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong><?php echo strstr( $item->post_title," "); ?></strong>
		</h2>
		
		<p><?php echo get_the_excerpt( $item ); ?></p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>&euro; <?php echo $price_discount; ?> /mo</strong>
		</p>

		<div
			class="wp-block-buttons alignfull is-horizontal is-content-justification-center is-layout-flex wp-container-3 wp-block-buttons-is-layout-flex">
			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo home_url('/reseller-hosting/#specs'); ?>"
					style="background-color: #000000">specs</a>
			</div>



			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo $link_order; ?>"
					style="background-color: #000000">get started</a>
			</div>
		</div>
	</div>

<?php $i++;


	$item = $all_fields['hostings'][2];
	$is_reseller = substr_count( $item->post_title , 'eller' ) === 1;
	$is_server = substr_count( $item->post_title , 'erver' ) === 1;
    
	$link_order = get_field( 'link_order', $item );
	$price_discount = get_field( 'price_discount', $item );
	$price = get_field( 'price', $item );
	
    	// 2.5 => 2.50
	if( intval( $discount_percentage ) > 0 ) {
		$price_discount = round( $price -  ( ($price/100) * $discount_percentage ), 2 );
		if( substr_count( $price_discount, '.' ) == 1 ) {
			$t_price = explode( '.', $price_discount );
			if( strlen( $t_price[1] ) == 1 ) {
				$price_discount .= '0';
			}
		}
	}
	
	if( $override_discountcode ) {
		if( substr_count( $link_order, 'promocode' ) == 0 ) {
			$link_order .= '&promocode='.esc_attr( $override_discountcode );
		} else {
			$link_order = preg_replace("#&promocode=.+#", '&promocode='.esc_attr( $override_discountcode ), $link_order );
		}
	}	
	?>

	<div
		class="wp-block-column home-package-<?php echo $i; ?> has-text-color has-background has-link-color wp-elements-27b262b42fa8cb69532bbefcbe71b583 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong><?php echo strstr( $item->post_title," "); ?></strong>
		</h2>

		<p><?php echo get_the_excerpt( $item ); ?></p>


		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>&euro; <?php echo $price_discount; ?> /mo</strong>
		</p>



		<div
			class="wp-block-buttons alignfull is-horizontal is-content-justification-center is-layout-flex wp-container-5 wp-block-buttons-is-layout-flex">
			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo home_url('/reseller-hosting/#specs'); ?>"
					style="background-color: #000000">specs</a>
			</div>



			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					href="<?php echo $link_order; ?>"
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
