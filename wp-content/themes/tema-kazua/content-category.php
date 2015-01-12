<?
//content blog
?>
<div class="content-blog-box cat-query">
	<a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('content-blog-thumb'); ?>
	</a>		
	<div class="content-title-date">
	<a href="<?php the_permalink();?>">		
		<h3><?php the_title(); ?></h3>
		<h3 class="date"><?php the_date('d/m/Y'); ?></h3>
	</a>
	</div>
	<a href="<?php the_permalink();?>">		
		<div class="content-resumo">	
			<?php echo wp_strip_all_tags(get_the_excerpt(), true);?>
		</div><!-- .content-resumo -->
	</a>
	<div class="content-blog-box-footer">
		<a href="<?php the_permalink();?>">
			<span class="leiamais-blog"></span>
		</a>	
	</div><!-- .content-blog-box-footer -->
</div><!-- .content-blog-box -->
