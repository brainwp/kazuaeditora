<?php 
//sidebar blog home
?>
	<form action="get" id="busca-sidebar">
		<input type="text" value="" name="s" id="s" />
	</form><!-- #busca-sidebar -->	

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area-blog" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>
