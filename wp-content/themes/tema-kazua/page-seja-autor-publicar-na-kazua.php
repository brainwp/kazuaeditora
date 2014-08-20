<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Seja Autor - Publicar na Kazua
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

<!-- Chama página Publicar na Kazua -->

		<?php
		$publicar_na_kazua = get_page_by_title( 'Publicar na Kazua' );
		$content_publicar_na_kazua = apply_filters('the_content', $publicar_na_kazua->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $publicar_na_kazua->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_publicar_na_kazua; ?>
		</div><!-- .entry-content -->

	<!-- Final Publicar na Kazua -->

				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'publicar-na-kazua', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php if (is_page( '4476' ) ) { ?>
            <div id="ajax-menu-load-div" data-ajax="true" data-load-image="<?php echo get_stylesheet_directory_uri() ?>/imagens/ajax-loader.gif"></div>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
