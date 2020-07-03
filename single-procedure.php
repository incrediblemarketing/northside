<?php
/**
 * Single Procedure
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
	  <div class="col-xl-8 offset-xl-1 pl-5 content--area">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?> 
			<?php endif; ?>
		</div>
		<div class="col-xl-3">
			<h3 class="mb-3"><?php echo get_the_title(wp_get_post_parent_id( $current_id )); ?></h3>
			<ul id="menu-side-menu" class="menu">
				<?php
					wp_list_pages(
						array(
							'post_type' => 'procedure',
							'title_li'  => '',
							'child_of'  => wp_get_post_parent_id( $current_id ),
							'depth'     => 1,
						)
					);
					?>
			</ul>
		</div>
  </div>
</div>
<?php get_footer(); ?>
