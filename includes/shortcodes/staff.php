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
function shortcode_staff() {
	global $post;

	$terms    = get_terms(
		array(
			'taxonomy' => 'position',
			'child_of' => 0,
			'orderby'  => 'term_order',
			'order'    => 'ASC',
		)
	);
	$content  = '';
	$content .= '<div class="team--grid">';
	foreach ( $terms as $term ) :
		$content .= '<h2 class="full-width">' . $term->name . '</h2>';
		$taxid    = $term->term_id;

		$args = array(
			'post_type'      => 'team_member',
			'tax_query'      => array(
				array(
					'taxonomy' => 'position',
					'field'    => 'term_id',
					'terms'    => $taxid,
				),
			),
			'order'          => 'ASC',
			'orderby'        => 'menu_order',
			'posts_per_page' => -1,
		);

		$staff = new WP_Query( $args );
		if ( $staff->have_posts() ) :
			while ( $staff->have_posts() ) :
				$staff->the_post();
				$content .= '<div class="block__team-member">';
				$content .= get_the_post_thumbnail( $post->ID, 'featured_thumb' );
				$content .= '<h3>' . get_the_title() . '</h3>';
				$content .= '</div>';
				endwhile;
				wp_reset_postdata();
			endif;
		endforeach;
		$content .= '</div>';
	return $content;
}
add_shortcode( 'our_staff', 'shortcode_staff' );
