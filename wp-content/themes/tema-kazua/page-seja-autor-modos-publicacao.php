<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Seja Autor - Modos de Publicacao
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<!-- Chama página Seja Autor -->

		<?php
		$seja_autor = get_page_by_title( 'Seja Autor' );
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
		$modos_publicacao = get_page_by_title( 'Modos de Publicacao' );
		$content_modos_publicacao = apply_filters('the_content', $modos_publicacao->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $modos_publicacao->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_modos_publicacao; ?>
		</div><!-- .entry-content -->

	<!-- Final Modos de Publicação -->

				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'modos-de-publicacao', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if (is_page( '4445' ) ) { ?>
				<!-- <h1 class="entry-title"><?php // the_title(); ?></h1> -->
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
