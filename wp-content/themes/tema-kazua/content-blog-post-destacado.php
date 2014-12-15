<?php
// post destacado
?>
<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'post',
	'meta_query'             => array(
		array(
			'key'       => 'destaque_blog_field',
			'value'     => 'true',
			'compare'   => 'LIKE',
		),
	),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>
		<div class="post-destacado principal">
			<?php the_post_thumbnail('blog-destaque',array('class' => 'default-img')); ?>
			<?php the_post_thumbnail('large',array('class' => 'hover-img')); ?>
		</div><!-- .post_destacado principal -->
	<?php
    }
}

// Restore original Post Data
wp_reset_postdata();
?>