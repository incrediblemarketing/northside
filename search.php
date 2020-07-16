<?php
/**
 * search.php
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$current_id = get_the_ID();
get_header();  ?>

<div class="container page__lower-level">
  <div class="row justify-content-center section__padding flex-row-reverse">
	  <div class="col-xl-8 offset-xl-1 col-lg-8 pl-5 small-zero content--area">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'components/post-preview' ); ?>
				<?php endwhile; ?> 
				<?php get_template_part( 'components/navigation-loop' ); ?>
			<?php else : ?>
				<p>Nothing was found for your search of: <?php get_search_form(); ?></p>
			<?php endif; ?>
		</div>
		<div class="col-xl-3 col-lg-4">
			<?php
			$args = array(
				'theme_location' => 'side-menu',
				'container'      => false,
				'menu_class'     => 'menu',
			);
			wp_nav_menu( $args );
			?>
		</div>
  </div>
</div>
<?php get_footer(); ?>
