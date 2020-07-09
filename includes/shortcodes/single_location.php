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
function shortcode_single_location( $atts ) {
	$location_id = $atts['id'];
	$counter     = 1;

	$content = '';
	if ( have_rows( 'business', 'options' ) ) :
		$content .= '<div class="locations--grid">';
		while ( have_rows( 'business', 'options' ) ) :
			the_row();
			if ( $counter == $location_id ) :
				if ( get_row_layout() == 'location' ) :
						$content .= get_sub_field( 'iframe' );
						$content .= '<div class="info--box">';
						$content .= '<h4>Address</h4>';
						$content .= '<p>'.get_sub_field( 'business_street_address' ).'<br/>'.get_sub_field( 'business_city_state_zip' ).'</p>';
						$content .= '<h4>Hours of Operation</h4>';
						$content .= '<p>'.get_field( 'business_hours', 'options' ).'</p>';
						$content .= '<h4>Phone Number</h4>';
						$content .= '<p><a href="'.get_field( 'business_phone_url', 'options' ).'">'.get_field( 'business_phone_display', 'options' ).'</a></p>';
						$content .= '<h4>Fax Number</h4>';
						$content .= '<p>'.get_field( 'business_fax', 'options' ).'</p>';
						$content .= '</div>';
				endif;
			endif;
			$counter++;
		endwhile;
		$content .= '</div>';
	endif;

	return $content;
}
add_shortcode( 'single_location', 'shortcode_single_location' );
