<?php
/**
 * Display Hero Block
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */


$content       = get_sub_field( 'content' );
$content_title = get_sub_field( 'title' );
$vimeo         = get_sub_field( 'video_id' );

?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<?php if ( $vimeo ) : ?>
				<div id="vimeo_video" class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo esc_attr( $vimeo ); ?>?autoplay=1&muted=1&loop=1&controls=0" allowfullscreen></iframe>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-3">
			<h1><?php echo $content_title; ?></h1>
		</div>
		<div class="col-xl-6">
			<?php echo $content; ?>
		</div>
	</div>
</div>
