<?php
/**
 * Template Name: Second Level Procedure Page
 * Template Post Type: procedure
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

<div class="container page__top-level">
  <div class="row justify-content-center section__padding flex-row-reverse">
	  <div class="col-xl-9 col-lg-8 pl-5 small-zero">
				<div class="featured--large">
					<?php
					if ( has_post_thumbnail() ) :
						echo get_the_post_thumbnail( $current_id, 'blog_preview_thumb' );
					else :
						im_the_placeholder_image( 'blog_preview_thumb' );
					endif;
					?>
				</div>
			<div class="grid--inner">
		<?php
		$args  = array(
			'post_type'   => 'procedure',
			'order'       => 'ASC',
			'orderby'     => 'menu_order',
			'post_parent' => $current_id,
		);
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
							<div class="procedure--area">
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
		?>
			</div>
		</div>
		<div class="col-xl-3 col-lg-4">
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
