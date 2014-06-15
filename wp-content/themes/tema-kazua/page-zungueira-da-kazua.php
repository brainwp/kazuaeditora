<?php
/**
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 * Template name: Zungueira da Kazuá
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<!-- Chama página Zungueira -->

		<?php
		$zungueira = get_page_by_title( 'Zungueira da Kazua: Distribuidora e Divulgadora' );
		$content_zungueira = apply_filters('the_content', $zungueira->post_content);
		?>
		<header class="entry-header">
		<h1 class="entry-title"><?php echo $zungueira->post_title; ?></h1>
		</header>
		<div class="entry-content">
		<?php echo $content_zungueira; ?>
		</div><!-- .entry-content -->

		<!-- Final Zungueira -->

			<?php while ( have_posts() ) : the_post(); ?>
				<nav id="template-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'menu' => 'zungueira-da-kazua', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				
			  <?php if (is_page( 'zungueira-da-kazua-distribuidora-e-divulgadora' ) ) { ?>
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
