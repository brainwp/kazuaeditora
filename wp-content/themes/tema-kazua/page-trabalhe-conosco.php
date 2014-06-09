<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Tabalhe Conosco
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'trabalhe-conosco', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->
				<?php if ( have_comments() ) : ?>
					<?php comments_template( '', true ); ?>
				<?php else : // or, if we don't have comments:
					if ( ! comments_open() ) : ?>
						<p class="nocomments"></p>
					<?php endif; // end ! comments_open() ?>
				<?php endif; // end have_comments() ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
