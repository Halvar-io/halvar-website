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
	class="wp-block-columns alignwide hosting-page-packages is-layout-flex wp-container-13 wp-block-columns-is-layout-flex"
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


foreach( $t as $item ) {
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
		class="wp-block-column hosting-page-package-1 has-text-color has-background has-link-color wp-elements-7341ff71fa9fe7f1a62e60466c788e70 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong><?php echo strstr( $item->post_title," "); ?></strong>
		</h2>

		<p><?php echo get_the_excerpt( $item ); ?></p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<?php 
			if( $is_server ) {
                echo '<strong>NVME</strong> mirrored disks, localstorage<br/>High frequency CPU cores';
			} else {
                echo '<strong>Special price the first year</strong>';
			}
			?>
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
					style="background-color: #000000" href="#specs">specs</a>
			</div>


			<div
				class="wp-block-button has-custom-width wp-block-button__width-100">
				<a
					class="wp-block-button__link has-white-color has-text-color has-background no-border-radius wp-element-button"
					style="background-color: #000000" href="<?php echo $link_order; ?>">get started</a>
			</div>
		</div>


		<div
			class="wp-block-columns shared-package-details is-layout-flex wp-container-3 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">

				<p>
					<span style="font-weight: 700;"><?php 
					$n = get_field( 'sites', $item );
					echo ucfirst( $f->format( $n ) ); ?></span> account<?php if( $n > 1 ) { echo 's'; } 
					if( $is_server ) {
						echo ' &amp; '.ucfirst( $f->format( $n ) ).' staging accounts';
						if( $n > 1 ) { echo 's'; }
					}
					
					?>
				</p>


				<p>
					<span style="font-weight: 700;">Performant</span> on  <?php 
					$n = get_field( 'cpu', $item );
					echo $n; ?> core<?php if( $n > 1 ) { echo 's'; } ?> &amp; <?php echo get_field( 'memory', $item ); ?> GB memory
				</p>



				<p>
					<span style="font-weight: 700;"><?php echo get_field( 'storage', $item ); ?> GB</span> storage <strong>on <?php echo $disc_type; ?></strong>
				</p>



				<p>
					<?php
						$n = get_field( 'traffic', $item );
						if( !$n ) { unset( $n ); } else { $n .= ' GB'; }
						$traffic = $n ?? 'Unmetered';
					?>
					<span style="font-weight: 700;"><?php echo $traffic; ?></span> Transfer<?php
					if( $traffic === 'Unmetered' ) { echo ' *'; };?>
				</p>


				<p>
					<span style="font-weight: 700;">Free TLS </span> Certificate
				</p>

<?php 
if( !$is_server ) {

?>
				<p>
					<span style="font-weight: 700;">Standard price <small>&euro; <?php echo $price; ?> /mo</small>
				</p>

<?php 
}

if( !$is_reseller && !$is_server ) {
?>		
				<p>
					<span style="font-weight: 700;">Free</span> Domain for the 1st Year
				</p>
<?php 
}
?>

<?php 
if( !$is_server ) {

?>	
				<p>
					<span style="font-weight: 700;">Secure</span> cloudlinux hosting
				</p>
<?php 
}
?>

				<p>
					<span style="font-weight: 700;">Free</span> Nightly Backups
				</p>
				
<?php 
if( !$is_server && !in_array( 'WP toolkit', $all_fields['hide_features'] ) ) {
?>				
				<p>
					<span style="font-weight: 700;">Free </span> WP toolkit
				</p>
<?php 
}
?>				
				<p>
					<span style="font-weight: 700;">GDPR safe</span> All data is stored and owned by EU companies
				</p>				
				
<?php 
if( !$is_server && !in_array( 'Accelerate WP', $all_fields['hide_features'] ) ) {
?>					
				<p>
					<span style="font-weight: 700;">AccelerateWP </span> included
				</p>				

<?php 
}
if( !in_array( 'Databases', $all_fields['hide_features'] ) ) {
?>					

				<p><?php
				$n = get_field( 'sites', $item );
				echo ucfirst( $f->format( $n*2 ) ); ?> databases</p>

<?php 
}
?>

				<p>200% Green Energy Match</p>
				
				<p><strong>PHP <?php echo get_field ( 'php_mininum_version_we_ship', 'options' ); ?></strong> and up with easy PHP selector</p>		
				
<?php 
if( !$is_server ) {

?>					
				<p>
					<strong>Superfast Litespeed</strong> hosting
				</p>
				
				<p>
					<span style="font-weight: 700;">X-ray</span> PHP tracer
				</p>				
<?php 
}
?>


				<p>30-Day Money-Back Guarantee</p>
				
				<p>
					<span style="font-weight: 700;">Developer friendly</span> composer, git, ssh, rsync, cron,
					<?php
					if( !in_array( 'WP toolkit', $all_fields['hide_features'] ) ) {
						echo 'wp-cli, ';
					}
					?> ..
				</p>				

			</div>
		</div>
	</div>


<?php 
}
?>


</div>
