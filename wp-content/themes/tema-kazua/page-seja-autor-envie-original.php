<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Seja Autor - Envie seu Original
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

				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'seja-autor', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->


	<!-- Final Seja Autor -->

<!-- Chama página Modos de Publicação -->

		<?php
		$envie_original = get_page_by_title( 'Envie o seu original' );
		$content_envie_original = apply_filters('the_content', $envie_original->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $envie_original->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_envie_original; ?>
		</div><!-- .entry-content -->

	<!-- Final Modos de Publicação -->


		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
