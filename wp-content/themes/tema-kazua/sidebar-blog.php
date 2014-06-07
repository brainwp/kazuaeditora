<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/entrelinhas.jpg" width="100%" height="auto" alt="" />
	</a>
	<div class="posts-query-home">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area-blog" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area-blog -->
		<?php endif; ?>
	</div><!-- Post Query HOme -->



