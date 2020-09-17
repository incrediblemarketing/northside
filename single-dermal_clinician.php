<?php
/**
 * Single Dermal Clinicians
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
					<?php echo get_the_post_thumbnail( $post->ID, 'post_large' ); ?>
					<?php the_content(); ?>
				<?php endwhile; ?> 
			<?php endif; ?>
		</div>
		<div class="col-xl-3 col-lg-4 hide-small">
			<ul id="menu-side-menu">
			<?php
				wp_list_pages(
					array(
						'title_li'  => '',
						'post_type' => 'dermal_clinician',
					)
				);
				?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
