<?php
/**
 * Shortcode to display child pages
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
 * Child page shortcode [child_pages id=""]
 */
function shortcode_child_pages( $atts ) {

	$page_id = $atts['id'];
	$args    = array(
		'post_type'      => 'procedure',
		'post_parent'    => $page_id,
		'posts_per_page' => -1,
		'order'          => 'ASC',
		'orderby'        => 'menu_order',
	);

	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ) :
		$content = '<ul>';
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$content .= '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
		endwhile;
		$content .= '</ul>';
	endif;

	wp_reset_postdata();

	return $content;
}
add_shortcode( 'child_pages', 'shortcode_child_pages' );
