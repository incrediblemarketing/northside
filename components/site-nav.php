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
	<div class="search--area">
	<i class="far fa-search-plus"></i>
		<div class="search-form">
			<?php get_search_form(); ?> 
		</div>
	</div>
	<a href="/about/book-now/" class="btn--white">Book Now</a>
	<button data-toggle="menu">
		<span></span>
		<span></span>
		<span></span>
		<p>Menu</p>
	</button>
</nav>
<?php if ( get_field( 'header_banner_text', 'options' ) ) : ?>
	<div class="banner">
		<?php echo get_field( 'header_banner_text', 'options' ); ?>
	</div>
<?php endif; ?>
<div class="side--fixed">
	<?php echo do_shortcode( '[gtranslate]' ); ?>
	
	<?php get_template_part( 'components/call' ); ?>

	<?php get_template_part( 'components/social-icons' ); ?>
</div>
