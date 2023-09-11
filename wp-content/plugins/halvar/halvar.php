<?php
/*
Plugin Name: Halvar
Plugin URI: 
Description: 
Author: 
Version: 0.0.1
Author URI: 
Update URI: false
*/
function halvar_register_acf_blocks() {
    foreach ( glob(  __DIR__ . '/blocks/*' ) as $dir ) {
    	register_block_type( $dir );
    }
}


add_action( 'init', 'halvar_register_acf_blocks' );

/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Hosting packages', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Hosting packages', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Hosting packages', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Hosting packages', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Hosting package', 'textdomain' ),
        'new_item'              => __( 'New Hosting package', 'textdomain' ),
        'edit_item'             => __( 'Edit Hosting package', 'textdomain' ),
        'view_item'             => __( 'View Hosting package', 'textdomain' ),
        'all_items'             => __( 'All Hosting packages', 'textdomain' ),
        'search_items'          => __( 'Search Hosting packages', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Hosting package:', 'textdomain' ),
        'not_found'             => __( 'No Hosting package found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Hosting package found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Hosting package Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Hosting package archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Hosting package', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Hosting package', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Hosting package list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Hosting package list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Hosting package list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hosting_package' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
    );
    
    register_post_type( 'hostingpackage', $args );
}

add_action( 'init', 'wpdocs_codex_book_init' );




// Add shortcode to display team members
function team_members_shortcode() {
    // Get the repeater field values
    $team_members = get_field('team_members');
    
    // Initialize output variable
    $output = '';
    
    // Check if there are any team members
    if ($team_members) {
        $output .= '<div class="team-members-container">';
        foreach ($team_members as $team_member) {
            // Get the subfield values
            $member_image = $team_member['member_image'];
            $member_name = $team_member['member_name'];
            $member_designation = $team_member['member_designation'];
            $linked_profile_url = $team_member['linked_profile_url'];
            
            // Build the HTML output for each team member
            $output .= '<div class="team-member">';
            $output .= '<div class="team-member-img">';
            $output .= '<img src="' . $member_image . '" alt="' . $member_name . '" class="team-member-image">';
            $output .= '</div>';
            $output .= '<div class="team-member-description">';
            $output .= '<div class="team-member-name-designtion">';
            $output .= '<h3 class="team-member-name">' . $member_name . '</h3>';
            $output .= '<h3 class="team-member-designation">' . $member_designation . '</h3>';
            $output .= '</div>';
            $output .= '<div class="team-member-profile">';
            $output .= '<a href="' . $linked_profile_url . '" class="team-member-link"><img class="linkedin-logo" src="/wp-content/uploads/2023/07/group-86.png" alt="linkedin-profile"></a>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            
            
        }
        $output .= '</div>'; // Close the team-members-container
    }
    
    return $output;
}
add_shortcode('team_members', 'team_members_shortcode');



function remove_core_block_supports() {
    wp_dequeue_style('core-block-supports');
}
/// add_action('wp_footer', 'remove_core_block_supports');

function halvar_footer() {
	echo '<a rel="me" href="https://fosstodon.org/@halvar" class="displaynone">Mastodon</a>
	<a rel="me" href="https://mastodon.social/@ramonfincken" class="displaynone">Mastodon</a>';
	?>
	<!-- Matomo -->
<script>
var _paq = window._paq = window._paq || [];
/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
var u="//matomo01.eu130.codert.cloud/";
_paq.push(['setTrackerUrl', u+'matomo.php']);
_paq.push(['setSiteId', '11']);
var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
})();
</script>
<!-- End Matomo Code -->
<?php
}
add_action( 'wp_footer', 'halvar_footer' );


function halvar_remove_jquery_migrate( $scripts ) {
	
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			
		$script = $scripts->registered['jquery'];
		
		if ( $script->deps ) { 
			$script->deps = array_diff( $script->deps, [ 'jquery-migrate' ] );
		}
	}
}
add_action( 'wp_default_scripts', 'halvar_remove_jquery_migrate' );


