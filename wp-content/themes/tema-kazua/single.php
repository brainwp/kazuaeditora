<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content fundo-blog-single">

		<div class="space-blog-title"></div><!-- .space-blog-title -->
		<div class="blog-single-left">
			<?php if ( have_posts() ) : ?>
		    	<?php /* Start the Loop */ ?>
		    	<?php while ( have_posts() ) : the_post(); ?>
		    	   <?php $id = get_the_ID(); ?>
		    	   <?php get_template_part( 'content', 'blog-single' ); ?>
			    <?php endwhile; ?>
			<?php endif; ?>
			<h3 id="categories-slider">
				Veja mais notícias sobre: <?php the_category( ',', false, $id ); ?>
			</h3>
		    <div id="slider-container">
			<?php
			$cats = get_categories_array($id);
			$args = array (
				'post_type'              => 'post',
				'posts_per_page'         => 8,
				'orderby'                => 'rand',
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => $cats,
						),
				),
			);
			// The Query
			$query = new WP_Query( $args ); ?>
			<?php if ( $query->have_posts() ): ?>
				<?php while ( $query->have_posts() ): $query->the_post(); ?>
				   <?php get_template_part('content','blog-slider'); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		    </div><!-- #slider-container -->
		</div><!-- .blog-single-left -->
		<div class="blog-single-right">
			<div id="secondary" class="widget-area" role="complementary">
				<?php get_sidebar('blog-single'); ?>
		    </div><!-- #secondary -->
		</div><!-- .blog-single-right -->
	</div><!-- #primary -->
<?php get_footer(); ?>
