<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Trabalhe Conosco
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<!-- Chama página Trabalhe Conosco -->

		<?php
		$trabalhe_conosco = get_page_by_title( 'Trabalhe Conosco' );
		$content_trabalhe_conosco = apply_filters('the_content', $trabalhe_conosco->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $trabalhe_conosco->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_trabalhe_conosco; ?>
		</div><!-- .entry-content -->

		<!-- Final Trabalhe Conosco -->

			<?php while ( have_posts() ) : the_post(); ?>
				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'trabalhe-conosco', 'menu_class' => 'nav-menu-internas' ) ); ?>
				</nav><!-- #site-navigation -->

				<?php if (is_page( 'trabalhe-conosco' ) ) { ?>
				<p class="nocomments"> </p>
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
