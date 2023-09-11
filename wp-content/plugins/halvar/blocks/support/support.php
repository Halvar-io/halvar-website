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

<div class="wp-block-columns excellent-support-sec is-layout-flex wp-container-51 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>



<div class="wp-block-column excellent-support-sec-inner is-layout-flow wp-block-column-is-layout-flow" id="home-page-heading">
<h4 class="wp-block-heading">excellent support</h4>



<div class="wp-block-columns excellent-support-sec-suppot-1 is-layout-flex wp-container-43 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
<figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="108" height="108" src="https://halvarbouwio-w113c2.preview.wpmanaged.nl/wp-content/uploads/2023/07/Group-40.png" alt="" class="wp-image-392"></figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
<h6 class="wp-block-heading">excellent support</h6>



<p>lorem ipsum dolor sit amet, elit</p>
</div>
</div>



<div class="wp-block-columns excellent-support-sec-suppot-2 is-layout-flex wp-container-46 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
<figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="108" height="108" src="https://halvarbouwio-w113c2.preview.wpmanaged.nl/wp-content/uploads/2023/07/Group-40.png" alt="" class="wp-image-392"></figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
<h6 class="wp-block-heading">excellent support</h6>



<p>lorem ipsum dolor sit amet, elit</p>
</div>
</div>



<div class="wp-block-columns excellent-support-sec-suppot-3 is-layout-flex wp-container-49 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
<figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="108" height="108" src="https://halvarbouwio-w113c2.preview.wpmanaged.nl/wp-content/uploads/2023/07/Group-40.png" alt="" class="wp-image-392"></figure>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
<h6 class="wp-block-heading">excellent support</h6>



<p>lorem ipsum dolor sit amet, elit</p>
</div>
</div>


<a class="excellent-support-sec-btn wp-block-read-more" href="https://halvarbouwio-w113c2.preview.wpmanaged.nl/" target="_self">get started<span class="screen-reader-text">: Home</span></a></div>
</div>