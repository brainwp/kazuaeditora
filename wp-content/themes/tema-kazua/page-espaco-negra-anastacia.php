<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Espaço Negra Anastácia de Novos Autores
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<!-- Chama página Zungueira -->

		<?php
		$negra_anastacia = get_page_by_title( 'Espaço Negra Anastacia de Novos Autores' );
		$content_negra_anastacia = apply_filters('the_content', $negra_anastacia->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $negra_anastacia->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_negra_anastacia; ?>
		</div><!-- .entry-content -->

		<!-- Final Zungueira -->

			<?php while ( have_posts() ) : the_post(); ?>
			<a href="<?php echo esc_url( home_url( '/kamaradagem-literaria' ) ); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/botao-kamaradagem-literaria.jpg">
			</a>	

			<nav id="template-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'menu' => 'espaco-negra-anastacia', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->

  				<?php if (is_page( 'espaco-negra-anastacia-de-novos-autores' ) ) { ?>
				<div id="ajax-menu-load-div" data-ajax="true" data-load-image="<?php echo get_stylesheet_directory_uri() ?>/imagens/ajax-loader.gif"></div>
				<?php } ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
