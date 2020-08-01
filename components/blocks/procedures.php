<?php
/**
 * Display Procedure Block
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

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="grid--procedure">
				<?php
				$args = array(
					'post_type'   => 'procedure',
					'post_parent' => 0,
					'order'       => 'ASC',
					'orderby'     => 'menu_order',
				);

				$query = new WP_Query( $args );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
							<div class="procedure--top-block">
								<?php $currentID = $post->ID; ?>
								<a href="<?php echo esc_url( get_the_permalink() ); ?>"><h3><?php the_title(); ?></h3>
								<?php echo get_the_post_thumbnail( $currentID, 'post_large' ); ?></a>
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
	</div>
</div>
