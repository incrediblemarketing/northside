<?php
/**
 * Display Site Nav
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>

<nav class="site-nav">
	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php get_template_part( 'components/svg/logo' ); ?>
	</a>

	<?php
	$args = array(
		'theme_location' => 'header-menu',
		'container'      => false,
		'menu_class'     => 'menu',
	);
	wp_nav_menu( $args );
	?>
	<?php get_search_form(); ?> 
	<a href="https://www.hotdoc.com.au/medical-centres/fitzroy-north-VIC-3068/northside-dermatology/doctors/dr-wenyuan-liu" target="_blank" class="btn--white">Book Now</a>
	<button data-toggle="menu">
		<span></span>
		<span></span>
		<span></span>
	</button>
</nav>
