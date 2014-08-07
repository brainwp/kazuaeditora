<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<div id="link-blog">
	
		<?php
		// The Query
		query_posts( 'posts_per_page=1' );
		// The Loop
			while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"  rel="bookmark" alt="<?php the_title(); ?>">		
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/entrelinhas.jpg" width="100%" height="auto" alt="" />
			</a>
		<?php endwhile;?>
		<?php // Reset Query
		wp_reset_query();
		?>
	</div>
	<div class="posts-query-home">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area-blog" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>

			<div id="autores-categorias">
				<div id="conteudo">
				<h3 id="mostra">Exibir e Ocultar</h3>
				</div>
				<div id="oculto">
					<?php if ( is_active_sidebar( 'sidebar-autores' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-autores' ); ?>
					<?php endif; ?>
				</div>
				</div>
		</div><!-- .widget-area-blog -->

	</div><!-- Post Query HOme -->

