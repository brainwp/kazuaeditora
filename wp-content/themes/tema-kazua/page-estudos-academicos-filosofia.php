<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Estudos Acadêmicos Filosofia
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
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="academicos-header">
					<div class="img-destacada">
				<?php if ( ! post_password_required() && ! is_attachment() ) :
					the_post_thumbnail('thumb-academicos');
				endif; ?>
					</div>
					<div class="resumo">
					<?php the_excerpt(); ?>
					</div>
				</header>
				<?php if (is_page('kazua-de-filosofia' || $post->post_parent == 'kazua-de-filosofia' ) ) { ?>
				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'academicos-filosofia', 'menu_class' => 'nav-menu' ) ) ?>
				</nav><!-- #site-navigation -->
				<?php } else { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php }; ?>
	
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->

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
