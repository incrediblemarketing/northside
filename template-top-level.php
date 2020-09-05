<?php
/**
 * Template Name: Top Level Procedure Page
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
						<?php $currentID = $post->ID; ?>
						<?php
						if ( has_post_thumbnail() ) :
							echo get_the_post_thumbnail( $currentID, 'top_thumb' );
						else :
							im_the_placeholder_image( 'top_thumb' );
						endif;
						?>
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
							$args2  = array(
								'post_type'   => 'procedure',
								'post_parent' => $currentID,
								'order'       => 'ASC',
								'orderby'     => 'menu_order',
							);
							$query2 = new WP_Query( $args2 );
							if ( $query2->have_posts() ) :
								?>
										<ul class="procedure--list">
								<?php
								while ( $query2->have_posts() ) :
									$query2->the_post();
									?>
											<li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
											<?php
										endwhile;
								wp_reset_postdata();
								?>
										</ul>
									<?php endif; ?>
								</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
		?>
			</div>
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
