<div id="sidebar">
		<h2 style="text-align:left; background:#FFF"><a href="blog_post.php"><img src="images/BLOG.jpg"></a></h2>
		<?php
					$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
			
					//$query = " select term_id, name from ods_terms where term_id between 161 AND 172 order by name;";
					$query = " select term_id, name from ods_terms where term_id in (172,162,165,161,164,163,166) order by name;";
			
					$result = mysqli_query($conn,$query);
					$i=0;
					while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					//$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
					//if($linha){
						if($i==0)
							echo "<a style='display:block; margin-top:10px' href='blog_post.php?categoria=".$linha['term_id']."'><img src='images/cat_blog_".$linha['term_id'].".jpg' /></a>";
						else
							echo "<a style='display:block;' href='blog_post.php?categoria=".$linha['term_id']."'><img src='images/cat_blog_".$linha['term_id'].".jpg' /></a>";
						++$i;
						//echo "<h3><i>".date('d/m/Y', strtotime($linha['post_date']))."</i></h3>";	
						//echo utf8_encode(str_ireplace('-300x110.jpg" width="300" height="110', '.jpg" width="680" heigth="249"',$linha['post_content']));
						echo "<br />";
					//}
					
					//else{
						//echo "<h2>Oops.. isso é embaraçoso, mas nenhuma postagem foi encontrada. Tente novamente</h2>";
					}
					echo "<a name='BUSCA_FORM'></a>";
					echo "<a id='mnu_cat_autores' style='display:block;' href='#BUSCA_FORM'><img src='images/blog_cat_autores.jpg' /></a>";		
				?>
				
			<div id="busca_form" style="float: left; width: 260px;margin:10px 0px 0px 15px; display: none">
				
				<form onsubmit="return false">
												
							<label style="display:block; width:260px; text-align:left; font-size:14px; font-weight: bold">Selecione o autor:<label/><br />
							
							
							
							<div class="object-control" style="width:260px">	
								<select name="autor">
									<!-- resultados ajax -->
								</select>	
							<div />	
							</div><br />	
						
								<label style="display:block; width:260px; text-align:left; font-size:14px; font-weight: bold">Refine os autores, Busque:<label/>
						
							
							<div class="object-control" style="width:260px">
								<input type="text" id="busca" value="" style="width:260px" />	
							</div>	
						
						
					</form>
				
			</div>		
	</div><!--/ Fim sidebar-->
