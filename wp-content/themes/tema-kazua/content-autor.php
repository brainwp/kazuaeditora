<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_singular( 'autor' ) ) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>


			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<div class="author-single-avatar"><img src="<?php the_field('autorimage'); ?>" alt="" width="auto" /></div>
			<div id="image-header-autor">
			<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail();
			endif; ?>
			</div>
			<div id="menu-botoes-autor">
				<?php
				if(get_field('kamaradagem_do_autor'))
				{
					echo '<a class="btn-kamaradagem" href="' . get_field('kamaradagem_do_autor') . '">Kamaradagem do Autor</a>';
				}
				?>			
				<?php
				if(get_field('acoes_de_divulgacao'))
				{
					echo '<a class="btn-acoes" href="' . get_field('acoes_de_divulgacao') . '">Acoes de Divulgacao</a>';
				}
				?>	
				<?php
				if(get_field('blog_do_autor'))
				{
					echo '<a class="btn-blog-autor" href="' . get_field('blog_do_autor') . '">Blog do Autor</a>';
				}
				?>	
				<?php
				if(get_field('compre'))
				{
					echo '<a class="btn-compre" href="' . get_field('compre') . '">Compre</a>';
				}
				?>
			</div>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	</article><!-- #post -->
