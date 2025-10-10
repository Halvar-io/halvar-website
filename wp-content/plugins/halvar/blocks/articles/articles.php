<?php
use Yoast\WP\SEO\Wrappers\WP_Query_Wrapper;

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


$our_query = new WP_Query( [ 
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category_name' => 'front-page',
     ]);
?>

<div
	class="wp-block-columns articles is-layout-flex wp-container-39 wp-block-columns-is-layout-flex <?php echo $class_name; ?>"
	style="">
	
	<?php 
	foreach( $our_query->posts as $post ) {
	?>
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<figure class="wp-block-image size-full">
			<img decoding="async" fetchpriority="high" width="520" height="272"
				src="<?php echo str_replace ('.png', '.webp', get_the_post_thumbnail_url( $post ) ); ?>"
				alt="Non described image for <?php echo get_the_title( $post ); ?>" class="wp-image-353"
				loading="lazy"
				srcset=""
				sizes="(max-width: 520px) 100vw, 520px">
		</figure>



		<h6 class="wp-block-heading"><?php echo get_the_title( $post ); ?></h6>

		<p><?php echo get_the_excerpt( $post ); ?></p>


		<div
			class="wp-block-columns articles-btn is-layout-flex wp-container-26 wp-block-columns-is-layout-flex">
			<div
				class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
				<div
					class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
					<div class="wp-block-button is-style-outline displaynone">
						<a class="wp-block-button__link wp-element-button">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	wp_reset_postdata();
	?>

</div>
