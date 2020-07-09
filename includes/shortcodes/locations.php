<?php
/**
 * Shortcode to display locations
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

/**
 * Staff member shortcode [our_locations]
 */
function shortcode_locations() {
	global $post;

	$content = '';
	if ( have_rows( 'business', 'options' ) ) :
		$content .= '<div class="locations--grid">';
		while ( have_rows( 'business', 'options' ) ) :
			the_row();
			if ( get_row_layout() == 'location' ) :
				$content     .= '<div class="location--box">';
					$content .= get_sub_field( 'iframe' );
					$content .= '<h2><a href="' . get_sub_field( 'page_link' ) . '">' . get_sub_field( 'business_title' ) . '</a></h2>';
				$content     .= '</div>';
			endif;
		endwhile;
		$content .= '</div>';
	endif;

	return $content;
}
add_shortcode( 'our_locations', 'shortcode_locations' );
