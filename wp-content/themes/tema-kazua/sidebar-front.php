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
	<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/BLOG.jpg" width="100%" height="auto" alt="" />

 <!-- Inicio Loop -->
      	<?php
		if ( query_posts( array ( 'post_type'=>'post', 'post_status' => 'publish', 'posts_per_page' => 5 )) ) while ( have_posts() ) : the_post(); 
		?>
        <div id="cada-post">

                <?php if ( has_post_thumbnail() ) { ?>
				<div class="thumb-blog">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                    <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <?php } ?>

				<div id="post-titulo">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>

				<div class="entry-data">
					<?php twentytwelve_entry_meta(); ?>
				</div><!-- .entry-data -->
        </div><!-- #cada-post -->

			<?php endwhile; // end of the loop. ?>

			<?php wp_reset_query(); // reset query ?>

	    <!-- Fim Loop -->
	
<!-- <div id="secondary" class="widget-area" role="complementary"> -->
	<?php // if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<!--<div class="first front-widgets">
		<?php // dynamic_sidebar( 'sidebar-2' ); ?>
	</div> .first -->
	<?php // endif; ?>

		<a href="#">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/rodape-blog.jpg" width="100%" height="auto" alt="" />
		</a>
</div><!-- #secondary -->


