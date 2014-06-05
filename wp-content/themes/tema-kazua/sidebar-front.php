<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
	<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/BLOG.jpg" width="100%" height="auto" alt="" />
	</a>
	<div class="posts-query-home">

		 <!-- Inicio Loop -->
      	<?php
		if ( query_posts( array ( 'post_type'=>'post', 'post_status' => 'publish', 'posts_per_page' => 3 )) ) while ( have_posts() ) : the_post(); 
		?>
        <div id="cada-post">

                <?php if ( has_post_thumbnail() ) { ?>
				<div class="thumb-blog">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <?php } ?>

				<div class="post-titulo">
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</div>

				<div class="entry-data">
					Publicação: <?php the_time('d/m/Y'); ?>
				</div><!-- .entry-data -->
        </div><!-- #cada-post -->

			<?php endwhile; // end of the loop. ?>

			<?php wp_reset_query(); // reset query ?>
		</div><!-- Post Query HOme -->

	    <!-- Fim Loop -->
	
		<a id="botao-de-baixo-blog" href="<?php echo esc_url( home_url( '/blog' ) ); ?>" target="_self">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/rodape-blog.jpg" width="100%" height="auto" alt="" />
		</a>

		<div class="fb-like-box" data-href="https://www.facebook.com/editorakazua" data-width="350" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true">
		</div>

