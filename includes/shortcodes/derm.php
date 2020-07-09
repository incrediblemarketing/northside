<?php
/**
 * Shortcode to display staff members
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
 * Staff member shortcode [staff]
 */
function shortcode_derm() {
	global $post;

	$args = array(
		'post_type'      => 'dermatologist',
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$derm   = new WP_Query( $args );
	$content = '';
	if ( $derm->have_posts() ) :
		$content .= '<div class="team--grid">';
		while ( $derm->have_posts() ) :
			$derm->the_post();
			$content .= '<div class="block__team-member">';
			$content .= '<a href="'.get_the_permalink().'">';
			$content .= get_the_post_thumbnail( $post->ID, 'blog_preview_thumb' );
			$content .= '<h3>' . get_the_title() . '</h3>';
			$content .= '</a></div>';
		endwhile;
		$content .= '</div>';
		wp_reset_postdata();
		endif;

	return $content;
}
add_shortcode( 'our_derm', 'shortcode_derm' );
