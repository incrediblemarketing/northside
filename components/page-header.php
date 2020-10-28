<?php
/**
 * Display Page Header
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

$postid           = get_the_id();
$page_title       = get_the_title( $postid );
$background_image = get_field( 'page_header_background_image', $postid ) ?: get_field( 'header_image', 'options' );

if ( is_home() ) {
	$postid = get_option( 'page_for_posts' );
}
if ( is_single() && 'team_member' === get_post_type( $postid ) ) {
	$page_title = 'Staff';
}

global $post;

$parentId      = $post->post_parent;
$grandparent   = get_post( $parentId );
$grandparentId = $grandparent->post_parent;

if ( is_singular( 'procedure' ) ) {
	if ( $parentId !== 0 ) {
		$background_image = get_field( 'page_header_background_image', $parentId );
	}
	if ( $grandparentId !== 0 ) {
		$background_image = get_field( 'page_header_background_image', $grandparentId );
	}
}

?>
<header class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="header--center">
					<img src="<?php echo esc_url( $background_image ); ?>" />
					<h1>
						<?php if ( is_home() ) : ?>
							Blog
						<?php elseif ( is_category() ) : ?>
							Category<br><small><?php single_cat_title(); ?></small>
						<?php elseif ( is_archive() ) : ?>
							<?php post_type_archive_title( '' ); ?>
						<?php elseif ( is_search() ) : ?>
							Search<br><small>
							<?php
							$allsearch = new WP_Query( "s=$s&showposts=-1" );
							$key       = esc_html( $s, 1 );
							$count     = $allsearch->post_count;
							echo $count . ' ';
							_e( 'results for ', 'responsive' );
							_e( '<span class="post-search-terms">', 'responsive' );
							echo '&ldquo;';
							echo $key;
							echo '&rdquo;';
							_e( '</span><!-- end of .post-search-terms -->', 'responsive' );
							wp_reset_query();
							?>
							</small>
						<?php else : ?>
							<?php the_title(); ?>
						<?php endif; ?>
					</h1>
				</div>
				<?php if ( ! is_search() ) : ?>
					<div class="breadcrumbs">
						<a href="/">Home</a> / 
						<?php if ( is_singular( 'dermatologist' ) ) : ?>
							<a href="/about/our-dermatologists/">Dermatologists</a> / 
						<?php endif; ?>
						<?php if ( is_singular( 'dermal_clinician' ) ) : ?>
							<a href="/about/dermal-clinicians/">Dermal Clinicians</a> / 
						<?php endif; ?>
						<?php if ( 0 !== $grandparentId ) { ?>
							<a href="<?php echo get_permalink( $grandparentId ); ?>"><?php echo get_the_title( $grandparentId ); ?></a> /
						<?php } ?>
						<?php if ( 0 !== $parentId ) { ?>
							<a href="<?php echo get_permalink( $parentId ); ?>"><?php echo get_the_title( $parentId ); ?></a> /
						<?php } ?>
						<span><?php echo esc_attr( $title ? $title : get_the_title() ); ?></span>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>
