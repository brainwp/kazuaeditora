<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Seja Autor
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<!-- Chama página Seja Autor -->

		<?php
		$seja_autor = get_page_by_title( 'Seja Autor!' );
		$content_seja_autor = apply_filters('the_content', $seja_autor->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $seja_autor->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_seja_autor; ?>
		</div><!-- .entry-content -->

	<!-- Final Seja Autor -->

			<?php while ( have_posts() ) : the_post(); ?>
				
				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'seja-autor', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<?php if (is_page( 'seja-autor' ) ) { ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/sj_orig.jpg" width="100%" height="auto" alt="" />
				<?php } else { ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
