<?php
/**
 * Single Page
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
					<?php the_content(); ?>
					<?php
					$images = get_field( 'gallery_images' );
					if ( $images ) :
						?>
							<div class="gallery--images">
									<?php foreach ( $images as $image ) : ?>
											<div class="single--image">	
												<img src="<?php echo esc_url( $image['sizes']['post_large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
											</div>
									<?php endforeach; ?>
							</div>
					<?php endif; ?>
				<?php endwhile; ?> 
			<?php endif; ?>
		</div>
		<div class="col-xl-3 col-lg-4 hide-small">
			<ul id="menu-side-menu" class="menu">
			<?php
			$parent_id = wp_get_post_parent_id( $current_id );

			if ( $parent_id === 0 ) {
				$args = array(
					'theme_location' => 'side-menu',
					'container'      => false,
					'menu_class'     => 'menu',
				);
				wp_nav_menu( $args );
			} else {
				wp_list_pages(
					array(
						'post_type' => 'page',
						'title_li'  => '',
						'child_of'  => wp_get_post_parent_id( $current_id ),
						'depth'     => 1,
					)
				);
			}
			?>
		</div>
  </div>
</div>
<?php get_footer(); ?>
