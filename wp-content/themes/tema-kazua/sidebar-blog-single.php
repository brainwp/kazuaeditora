<?php 
//sidebar blog single
?>
<?php
$args = array (
	'post_type'              => 'post',
    'posts_per_page'         => 1,
   	'meta_query'             => array(
   	   		array(
    		'key'       => 'destaque_blog_field_menor',
    		'value'     => 'true',
    		'compare'   => 'LIKE',
    		)
    ),
);
// The Query
$query = new WP_Query( $args ); ?>
<?php if ( $query->have_posts() ): ?>
	<?php while ( $query->have_posts() ): $query->the_post(); ?>
		<a href="<?php echo get_permalink($post->ID); ?>" rel="bookmark" alt="<?php the_title(); ?>" class="destaque-sidebar">
		    <?php the_post_thumbnail('medium'); ?>
		</a>
	<?php endwhile; ?>
<?php endif; ?>
<a href="#" class="revista-banner">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/banner-revista.png">
</a>
<form action="get" id="busca-sidebar">
	<input type="text" value="" name="s" id="s" />
</form><!-- #busca-sidebar -->	

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area-blog" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>
