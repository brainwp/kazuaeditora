<?php
// post destacado
?>
<?php
// WP_Query arguments
$args = array (
	'post_type'              => 'post',
	'posts_per_page'         => 1,
	'paged'                  => 1,
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
		<div class="destaque-left">
			<a class="post-destacado principal" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('blog-destaque',array('class' => 'default-img')); ?>
			<?php the_post_thumbnail('large',array('class' => 'hover-img')); ?>
			<div class="footer">
				<h3><?php the_title();?></h3>
				<span class="leiamais-blog-destaque"></span>
			</div><!-- .footer -->
		    </a><!-- .post_destacado principal -->
		</div><!-- .destaque-left -->
	<?php
    }
}

// Restore original Post Data
wp_reset_postdata();
?>
<div class="destaque-right">
	<?php
	// WP_Query arguments
    $args = array (
    	'post_type'              => 'post',
    	'posts_per_page'         => 1,
    	'paged'                  => 2,
    	'meta_query'             => array(
    		array(
    			'key'       => 'destaque_blog_field',
    			'value'     => 'true',
    			'compare'   => 'LIKE',
    			)
    		),
    );
    // The Query
    $query = new WP_Query( $args );
    // The Loop
    if ( $query->have_posts() ) {
    	while ( $query->have_posts() ) {
    		$query->the_post(); ?>
    		<a class="post-destacado menor" href="<?php the_permalink(); ?>">
    			<?php the_post_thumbnail('blog-destaque',array('class' => 'default-img')); ?>
    			<?php the_post_thumbnail('large',array('class' => 'hover-img')); ?>
    			<div class="footer">
    				<h3><?php the_title();?></h3>
    				<span class="leiamais-blog-destaque"></span>
    			</div><!-- .footer -->
		    </a><!-- .post_destacado principal -->
	<?php
    }
}

// Restore original Post Data
wp_reset_postdata();
?>
<a href="#" class="revista-banner"></a>
</div><!-- .destaque-right -->
<div style="clear:both;width:100%;height:20px"></div>