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
$t = get_field( 'hostings' );
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);


foreach( $t as $item ) {
    $is_reseller = substr_count( $item->post_title , 'eller' ) === 1;
?>

	<div
		class="wp-block-column hosting-page-package-1 has-text-color has-background has-link-color wp-elements-7341ff71fa9fe7f1a62e60466c788e70 is-layout-flow wp-block-column-is-layout-flow"
		style="color: #000000; background-color: #ffe97d; padding-top: 2em; padding-right: 2em; padding-bottom: 2em; padding-left: 2em">
		<h2 class="wp-block-heading" style="font-size: 40px">
			<strong><?php echo strstr( $item->post_title," "); ?></strong>
		</h2>

		<p><?php echo get_the_excerpt( $item ); ?></p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>Special price the first year</strong>
		</p>

		<p class="has-normal-font-size" style="line-height: 1.5">
			<strong>&euro; <?php echo get_field( 'price_discount', $item ); ?> /mo</strong>
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
					style="background-color: #000000" href="<?php echo get_field( 'link_order', $item ); ?>">get started</a>
			</div>
		</div>



		<div
			class="wp-block-columns shared-package-details is-layout-flex wp-container-3 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">

				<p>
					<span style="font-weight: 700;"><?php 
					$n = get_field( 'sites', $item );
					echo ucfirst( $f->format( $n ) ); ?></span> Website<?php if( $n > 1 ) { echo 's'; } ?>
				</p>


				<p>
					<span style="font-weight: 700;">Performant</span> on  <?php 
					$n = get_field( 'cpu', $item );
					echo $n; ?> core<?php if( $n > 1 ) { echo 's'; } ?> &amp; <?php echo get_field( 'memory', $item ); ?> GB memory
				</p>



				<p>
					<span style="font-weight: 700;"><?php echo get_field( 'storage', $item ); ?> GB</span> storage <strong>on NVME</strong>
				</p>



				<p>
					<span style="font-weight: 700;">Unmetered</span> Transfer *
				</p>


				<p>
					<span style="font-weight: 700;">Free TLS </span> Certificate
				</p>

				<p>
					<span style="font-weight: 700;">Standard price <small>&euro; <?php echo get_field( 'price', $item ); ?> /mo</small>
				</p>

<?php 
if( !$is_reseller ) {
?>		
				<p>
					<span style="font-weight: 700;">Free</span> Domain for the 1st Year
				</p>
<?php 
}
?>

				<p>
					<span style="font-weight: 700;">Secure</span> cloudlinux hosting
				</p>

				<p>
					<span style="font-weight: 700;">Free</span> Nightly Backups
				</p>
				
				<p>
					<span style="font-weight: 700;">Free </span> WP toolkit
				</p>
				
				<p>
					<span style="font-weight: 700;">GDPR safe</span> All data is stored and owned by EU companies
				</p>				
				
				<p>
					<span style="font-weight: 700;">AccelerateWP </span> included
				</p>				

				<p><?php
				$n = get_field( 'sites', $item );
				echo ucfirst( $f->format( $n*2 ) ); ?> databases</p>


				<p>200% Green Energy Match</p>
				
				<p><strong>PHP 8.0</strong> and up with easy PHP selector</p>		
				
				<p>
					<strong>Superfast Litespeed</strong> hosting
				</p>
				
				<p>
					<span style="font-weight: 700;">X-ray</span> PHP tracer
				</p>				


				<p>30-Day Money-Back Guarantee</p>
				
				<p>
					<span style="font-weight: 700;">Developer </span>friendly composer, git, ssh, rsync, cron, wp-cli, ..
				</p>				

			</div>
		</div>
	</div>


<?php 
}
?>


</div>
