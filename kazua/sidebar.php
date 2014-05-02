<div id="sidebar">
		<h2 style="text-align:left; background:#FFF"><a href="blog_post.php"><img src="images/BLOG.jpg"></a></h2>
		<?php
			//$conn = mysqli_connect("editorakazua.com.br","edito253_root","chuvakazua","edito253_kazua",3306);
			$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua",3306);
			
			$query = "SELECT ID, post_title, post_date, post_name, post_content FROM ods_posts WHERE post_type = 'post' AND post_status = 'publish' ORDER by id DESC LIMIT 5";
			
			$result = mysqli_query($conn,$query);
			
			while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		?>
		<!--<a style="display:block; text-decoration:none; color:#777" target="_blank" href="http://www.editorakazua.com.br/<?php echo $linha['post_name'];?>">-->
		<?php
			preg_match_all("/src=\\\"([^\\\"]+)\\\"/", $linha['post_content'], $matches);
			//print_r($matches);
		?>	
		<a style="display:block; text-decoration:none; color:#777" target="_top" href="blog_post.php?id=<?php echo $linha['ID'];?>">	
		<div class="blog-post">
			<div class="blog-title">
				<img src="<?php echo $matches[1][0]; ?>" width="250px" />
				<p style="font-size:14px"><?php echo utf8_encode($linha['post_title']); ?></p>
			</div>
			<div class="content-blog-preview">
				<p style="text-align:right">Publicação: 	<?php echo date('d/m/Y', strtotime($linha['post_date']));?></p>
			</div>		
		</div>
		</a>	
		<?php } mysqli_free_result($result); mysqli_close($conn); ?>
	</div><!--/ Fim sidebar-->