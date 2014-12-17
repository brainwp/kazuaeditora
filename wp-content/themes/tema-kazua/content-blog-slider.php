<div class="content-blog-box">
	<a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('content-blog-thumb'); ?>
	</a>
	<a class="content-blog-box-footer" href="<?php the_permalink();?>">
		<span class="leiamais-blog"></span>
		<h3><?php the_title(); ?></h3>
		<h3 class="date"><?php the_date('d/m/Y'); ?></h3>
		<div class="content-resumo">
			<?php echo wp_strip_all_tags(get_the_excerpt(), true);?>
		</div><!-- .content -->
	</a><!-- .content-blog-box-footer -->
</div><!-- .content-blog-box -->