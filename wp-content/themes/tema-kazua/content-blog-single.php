<?php
//content blog single
?>
<article class="blog-single">
	<?php the_post_thumbnail('blog-destaque',array('class' => 'thumbnail-img')); ?>
	<h1 id="blog-title"><?php the_title();?></h1><!-- #blog-title -->
	<span class="post-data"><?php the_date('d/m/Y'); ?></span>
	<div class="content-single"><?php the_content(); ?></div><!-- .content-single -->
</article><!-- .blog-single -->