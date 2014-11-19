<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" class="fundo-blog" role="main">

				 <!-- Inicio Loop -->
		<?php $i = 1; while (have_posts() && $i < 2) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<header class="entry-header">

		      <h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-data-single">
					<?php the_time('d/m/Y'); ?>
				</div><!-- .entry-data -->

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span>' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

		 <?php if ( has_post_thumbnail() ) { ?>
                    <?php the_post_thumbnail(); ?>
                <?php } ?>	
			</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>

		</div><!-- .entry-content -->

			<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
			</nav><!-- .nav-single -->		

		</article><!-- #post -->

					<?php if ( have_comments() ) : ?>
					<?php comments_template( '', true ); ?>
					<?php else : // or, if we don't have comments:
					if ( ! comments_open() ) : ?>
						<p class="nocomments"></p>
					<?php endif; // end ! comments_open() ?>
				<?php endif; // end have_comments() ?>

			<?php $i++; endwhile; // end of the loop. ?>

			<?php wp_reset_query(); // reset query ?>

				    <!-- Fim Loop -->

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
	<?php get_sidebar('blog'); ?>
	</div>
<?php get_footer(); ?>
