<?php
/**
 * Top Side Menu
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
 * Register Top Side Menu
 */
function im_register_side_menu() {
	register_nav_menus(
		array(
			'side-menu' => __( 'Side Menu' ),
		)
	);
}
add_action( 'init', 'im_register_side_menu' );
