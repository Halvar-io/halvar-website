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

if( get_field( 'site_chat', 'option' ) == 'no' ) {
?>
<script type="text/javascript">

function creativepulse_getCookie(name) {
  const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  return match ? decodeURIComponent(match[2]) : null;
}

const savedData = creativepulse_getCookie('countryData');
var country = '';
const country_deny = [ 
 'NG',
 'IN'
 ];


if (savedData) {
  // Parse and log the saved cookie data
  // console.log('Retrieved from cookie:', JSON.parse(savedData).country);
  country = JSON.parse(savedData).country;
} else {
  // If not found, fetch from API
  fetch('https://api.country.is/')
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok ' + response.statusText);
      }
      return response.json();
    })
    .then(data => {
      // console.log('Fetched from API:', data.country);
      country = data.country;

      const jsonData = encodeURIComponent(JSON.stringify(data));

      const date = new Date();
      date.setTime(date.getTime() + (2 * 24 * 60 * 60 * 1000)); // 2 days in milliseconds
      const expires = "expires=" + date.toUTCString();

      document.cookie = `countryData=${jsonData}; ${expires}; path=/`;
    })
    .catch(error => {
      console.error('Fetch error:', error);
    });
}


if( !country_deny.includes( country ) ) {

	window.$crisp=[];window.CRISP_WEBSITE_ID="376c56a7-53fd-4fe5-b9df-0bc489fb6dbc";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
	
}
</script>
<?php
	return;
}




// Dev note: Chat is enabled below this line

?>




<div
	class="wp-block-columns chat-icon-col is-layout-flex wp-container-69 wp-block-columns-is-layout-flex">
	<div
		class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
		<figure class="wp-block-image alignright size-full">
			<a href="#" class="LiveHelpButton default">
				<img decoding="async" loading="lazy" width="137" height="141"
					loading="lazy"
					src="https://www.halvar.io/wp-content/uploads/2023/07/Group-105-2.png"
					alt="Chat icon" class="wp-image-1572">
			</a>
		</figure>
	</div>
</div>
