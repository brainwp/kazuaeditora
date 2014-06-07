<?php
/**
 * The template for displaying Archive Autor Pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" class="archive-autor" role="main">

			<h1 class="entry-title">
			<?php single_cat_title( '', true ); ?>
			</h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>

		<?php global $query_string;
		query_posts( $query_string . '&order=ASC&posts_per_page=-1&orderby=name' );
		if ( have_posts() ) : ?>
						<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="author-archive-avatar" style="background:url(<?php the_field('autorimage'); ?>) no-repeat scroll center top;">
			<a href="<?php the_permalink(); ?>"  rel="bookmark" alt="<?php the_title(); ?>">
				<div class="autor-moldura"><span><?php the_title(); ?></span>
				</div>
			</a>
		</article><!-- #post -->
				<?php endwhile;?>
		<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
