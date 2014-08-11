<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Kazuá das Artes
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

	<!-- Chama página Kazuá das Artes -->

		<?php
		$kazua_das_artes = get_page_by_title( 'Kazua das Artes' );
		$content_kazua_das_artes = apply_filters('the_content', $kazua_das_artes->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $kazua_das_artes->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_kazua_das_artes; ?>
		</div><!-- .entry-content -->

	<!-- Final Kazuá das Artes -->

			<?php while ( have_posts() ) : the_post(); ?>

				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'kazua-das-artes', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<?php if (is_page( 'kazua-das-artes' ) ) { ?>
				<p class="nocomments"> </p>
				<?php } else { ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>
            <?php //ajax div ?>
            <div id="ajax-menu-load-div" data-ajax="true" data-load-image="<?php bloginfo('template_url'); ?>/imagens/ajax-loader.gif"></div>

		</div><!-- #content -->
	</div><!-- #primary -->
	<div id="secondary" class="widget-area" role="complementary">
		<?php get_sidebar('interno'); ?>
	</div>
<?php get_footer(); ?>
