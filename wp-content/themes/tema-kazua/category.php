<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content fundo-blog">
		<div class="space-blog-title"></div><!-- .space-blog-title -->
	<div class="blog-cat-left">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->
			
		    	<?php /* Start the Loop */ ?>
		    	<div id="archive-blog-grid">
		    	<?php while ( have_posts() ) : the_post(); ?>
		    	   <?php get_template_part( 'content', 'category' ); ?>
			    <?php endwhile; ?>	
			<?php endif; ?>
			</div><!-- #archive-blog-grid -->

		</div><!-- .blog-single-left -->
		<div class="blog-single-right">
	<div id="secondary" class="widget-area" role="complementary">
	<?php get_sidebar('blog-single'); ?>
	</div>
	</div><!-- .blog-single-right -->
		</div><!-- #primary -->
<?php get_footer(); ?>
