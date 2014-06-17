<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Estudos Acadêmicos Inicial
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div id="header-estudos-academicos">
			<a href="<?php echo esc_url( home_url( '/estudos-academicos' ) ); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/06AA-kazua-estudos-academicos.jpg" width="100%" height="auto" alt="" />
			</a>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<?php if ( have_comments() ) : ?>
					<?php comments_template( '', true ); ?>
				<?php else : // or, if we don't have comments:
					if ( ! comments_open() ) : ?>
						<p class="nocomments"></p>
					<?php endif; // end ! comments_open() ?>
				<?php endif; // end have_comments() ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div>
<?php get_footer(); ?>
