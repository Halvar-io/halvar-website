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
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>


<div class="home-sec-1">
	<div class="home-sec-1-inner"><?php echo get_field( 'slogan' ); ?>
		<span class="dots">...</span><span id="typed"></span><span class="cursor">&nbsp;</span>
	</div>
</div>

<?php 
$slogans = [];
if( have_rows( 'slogans' ) ) {
    while( have_rows( 'slogans' ) ) {
        the_row();
        $slogans[] = get_sub_field( 'slogans_slogan' );
    }
}

$slogans = '"'.implode( '", "', $slogans ).'"';

?>


<script type="text/javascript">
jQuery(document).ready(function( $ ){
   const typedSpan = document.getElementById("typed")
const totype = [ <?php echo $slogans; ?> ]

const delayTyping_char = 120;
const delayErasing_text = 120;
const delayTyping_text = 1000;

let totypeIndex = 0;
let charIndex = 0;

function typeText() {
	if (charIndex < totype[totypeIndex].length) {
		typedSpan.textContent += totype[totypeIndex].charAt(charIndex);
		charIndex++;
		setTimeout(typeText, delayTyping_char);
	}
	else {
		setTimeout(eraseText, delayTyping_text);
	}
}

function eraseText() {
	if (charIndex > 0) {
		typedSpan.textContent = totype[totypeIndex].substring(0, charIndex-1);
		charIndex = charIndex-1;
		setTimeout(eraseText, delayErasing_text);
	}
	else {
		totypeIndex++;

		if (totypeIndex >= totype.length)
			totypeIndex = 0;
			setTimeout(typeText, delayTyping_text);
	}
}

window.onload = function() {
	if (totype[totypeIndex].length) setTimeout(typeText, delayTyping_text);
}
});
</script>
