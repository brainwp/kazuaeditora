<?php 
//sidebar blog home
?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area-blog" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>
