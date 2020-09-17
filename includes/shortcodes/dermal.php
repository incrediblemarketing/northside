<?php
/**
 * Shortcode to display dermal clinicians
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
 * Dermal Clinician shortcode [dermal]
 */
function shortcode_dermal() {
	global $post;

	$args = array(
		'post_type'      => 'dermal_clinician',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$staff   = new WP_Query( $args );
	$content = '';
	if ( $staff->have_posts() ) :
		$content .= '<div class="team--grid">';
		while ( $staff->have_posts() ) :
			$staff->the_post();
			$content .= '<div class="block__team-member">';
			$content .= get_the_post_thumbnail( $post->ID, 'featured_thumb' );
			$content .= '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>';
			$content .= '</div>';
			endwhile;
		$content .= '</div>';
		wp_reset_postdata();
		endif;

	return $content;
}
add_shortcode( 'dermal', 'shortcode_dermal' );
