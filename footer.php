<?php
/**
 * Footer
 *
 * Main footer file for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

	$copyright    = get_field( 'copyright', 'option' );
	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$address_link = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phone_url    = get_field( 'business_phone_url', 'option' );
?>

<section class="block--map-area">
	<div class="container">
		<div class="row">
			<div class="col-xl-3">
				<h2>Contact Us</h2>
				<div class="info--general">
					<div class="info__hours">
						<div class="icon--box">
							<i class="fas fa-clock"></i>
						</div>
						<h4>Hours of Operation</h4>
						<p><?php echo get_field( 'business_hours', 'options' ); ?></p>
					</div>
					<div class="info__phone">
						<div class="icon--box">
							<i class="fas fa-phone"></i>
						</div>
						<h4>Phone Number</h4>
						<p><a href="<?php echo get_field( 'business_phone_url', 'options' ); ?>"><?php echo get_field( 'business_phone_display', 'options' ); ?></a></p>
					</div>
					<div class="info__fax">
						<div class="icon--box">
							<i class="fas fa-fax"></i>
						</div>
						<h4>Fax Number</h4>
						<p><?php echo get_field( 'business_fax', 'options' ); ?></p>
					</div>
				</div>
			</div>
			<div class="col-xl-9">
				<?php if ( have_rows( 'business', 'options' ) ) : ?>
					<?php while ( have_rows( 'business', 'options' ) ) : ?>
						<?php the_row(); ?>
						<?php if ( get_row_layout() == 'location' ) : ?>
							<div class="location--box">
								<?php echo get_sub_field( 'iframe' ); ?>
								<div class="info--box">
									<h3><?php echo get_sub_field( 'business_title' ); ?></h3>
									<p><?php echo get_sub_field( 'business_street_address' ); ?><br/><?php echo get_sub_field( 'business_city_state_zip' ); ?></p>
									<a href="<?php echo get_sub_field( 'business_address_link' ); ?>">Get Directions ></a>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="block--contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="grid--page-links">
					<div class="list--pages">
						<h3>Skin Cancers</h3>
						<?php echo do_shortcode( '[child_pages id="161"]' ); ?>
					</div>
					<div class="list--pages">
						<h3>Medical Dermatology</h3>
						<?php echo do_shortcode( '[child_pages id="171"]' ); ?>
					</div>
					<div class="list--pages">
						<h3>Aesthetic Dermatology</h3>
						<?php echo do_shortcode( '[child_pages id="181"]' ); ?>
					</div>
					<div class="list--pages">
						<h3>Programs Dermatology</h3>
						<?php echo do_shortcode( '[child_pages id="195"]' ); ?>
					</div>
				</div>			
				<p>&copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php echo esc_attr( $copyright ) ?: esc_attr( get_bloginfo() ); ?> | <a href="/privacy-policy/">Privacy Policy</a> & <a href="/terms-of-use/">Terms of Use</a>
			</div>
		</div>
	</div>
</footer>

</div><!-- end of .site-wrap -->

<?php wp_footer(); ?>
</body>

</html>
