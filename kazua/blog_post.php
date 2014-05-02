<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kazuá</title>

		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="js/jquery.js"></script>
		<script src="js/autores.js"></script>

		
		</head>
	<body>
		
			<?php include('header.php'); ?>
				
			
			
		
		<div id="header-content-ii">
				<div id="header-extendido">
					<h1 style="text-align: left">BLOG</h1>
				</div>
		</div>
		<div id="container">
			<div id="content" class="back-post">
				<div id="box-principal" class="postagem">
					<div id="blog_post">
				<?php
					$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
					
					if(empty($_GET['nav']))
						if(empty($_GET['categoria'])){
							if(isset($_GET['id']))
								$query = "SELECT ID, post_title,post_content, post_date FROM ods_posts WHERE ID = ".$_GET['id'];
							else
								$query = "SELECT ID, post_title,post_content, post_date FROM ods_posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY ID DESC LIMIT 1";
						}	
						else
							$query = "select a.ID, t.name, a.post_title, a.post_date, a.post_content from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID DESC LIMIT 1";
					else{
						if(empty($_GET['categoria'])){
							if(empty($_GET['ant']))
								$query = "SELECT ID, post_title,post_content, post_date FROM ods_posts WHERE ID < ".$_GET['id']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID DESC LIMIT 1";
							else
								$query = "SELECT ID, post_title,post_content, post_date FROM ods_posts WHERE ID > ".$_GET['id']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID ASC LIMIT 1";
						}
						else{
							if(empty($_GET['ant']))
								$query = "select a.ID, t.name, a.post_title, a.post_date, a.post_content from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID < ".$_GET['id']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID DESC LIMIT 1";
							else
								$query = "select a.ID, t.name, a.post_title, a.post_date, a.post_content from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID > ".$_GET['id']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID ASC LIMIT 1";
							
						}	
					}		
					$result = mysqli_query($conn,$query);
			
					//while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
					if($linha){
						//definicao da navegacao se aparece ou nao
						if(empty($_GET['categoria'])){
							$query = "SELECT count(0) as dir FROM ods_posts WHERE ID < ".$linha['ID']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID DESC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							
							if($r['dir'])
								echo "<a style='display:block; width:150px;float:right' href='blog_post.php?id=".$linha['ID']."&nav=true&categoria=".$_GET['categoria']."'><img src='images/flecha-proxima.jpg' width='150px' /></a>";
							
							$query = "SELECT count(0) as esq FROM ods_posts WHERE ID > ".$linha['ID']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID ASC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							if($r['esq'])
								echo "<a style='display:block; width:150px;float:left' href='blog_post.php?id=".$linha['ID']."&nav=true&ant=true&categoria=".$_GET['categoria']."'><img src='images/flecha-anterior.jpg' width='150px'  /></a>";
							//fim definicao
						}
						else{
							
							$query = "select count(0) dir from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID < ".$linha['ID']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID DESC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							
							if($r['dir'])
								echo "<a style='display:block; width:150px;float:right' href='blog_post.php?id=".$linha['ID']."&nav=true&categoria=".$_GET['categoria']."'><img src='images/flecha-proxima.jpg' width='150px' /></a>";
							
							$query = "select count(0) esq from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID > ".$linha['ID']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID ASC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							if($r['esq'])
								echo "<a style='display:block; width:150px;float:left' href='blog_post.php?id=".$linha['ID']."&nav=true&ant=true&categoria=".$_GET['categoria']."'><img src='images/flecha-anterior.jpg' width='150px'  /></a>";
						}	
							
						echo "<div style='clear:both'></div>";
						echo "<h2>".utf8_encode($linha['post_title'])."</h2>";
						echo "<h3><i>".date('d/m/Y', strtotime($linha['post_date']))."</i></h3>";
						
						$str = $linha['post_content'];
						
						$pattern = '/width="(\d+)" height="(\d+)"/i';
						preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE);
						
						//if($matches[1][0] > 680){
							$novo_tamanho = 610;
							$nova_autura = round($novo_tamanho * $matches[2][0] / $matches[1][0]);
							
							$reg[0] = '/width="(\d+)"/';
							$reg[1] = '/height="(\d+)"/';
							$subst[0] = 'width="'.$novo_tamanho.'"';
							$subst[1] = 'height="'.$nova_autura.'"';
							
							$str = preg_replace($reg, $subst, $str);
							
							
							
						//}
						//die($matches[1][0].'x'.$matches[2][0].'.jpg');
						$str = str_ireplace('-'.$matches[1][0].'x'.$matches[2][0].'.jpg', '.jpg', $str);
						$search_mark_quotes = array(chr(145), 
                   						 chr(146), 
                   						 chr(147), 
                   						 chr(148), 
                   						 chr(151)); 

						    $replace_mark_quotes = array("'", 
						                     "'", 
						                     '"', 
						                     '"', 
						                     '-');
						$str = str_ireplace($search_mark_quotes, $replace_mark_quotes, $str);	
						
						//echo utf8_encode(str_ireplace('-300x110.jpg" width="300" height="110', '.jpg" width="680" heigth="249"',$linha['post_content']));
						echo utf8_encode($str);
						echo "<div style='clear:both'></div>";
						
						//definicao da navegacao se aparece ou nao
						if(empty($_GET['categoria'])){
							$query = "SELECT count(0) as dir FROM ods_posts WHERE ID < ".$linha['ID']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID DESC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							
							if($r['dir'])
								echo "<a style='display:block; width:150px;float:right' href='blog_post.php?id=".$linha['ID']."&nav=true&categoria=".$_GET['categoria']."'><img src='images/flecha-proxima.jpg' width='150px' /></a>";
							
							$query = "SELECT count(0) as esq FROM ods_posts WHERE ID > ".$linha['ID']." AND post_type = 'post' AND post_status = 'publish' ORDER BY ID ASC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							if($r['esq'])
								echo "<a style='display:block; width:150px;float:left' href='blog_post.php?id=".$linha['ID']."&nav=true&ant=true&categoria=".$_GET['categoria']."'><img src='images/flecha-anterior.jpg' width='150px'  /></a>";
							//fim definicao
						}
						else{
							
							$query = "select count(0) dir from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID < ".$linha['ID']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID DESC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							
							if($r['dir'])
								echo "<a style='display:block; width:150px;float:right' href='blog_post.php?id=".$linha['ID']."&nav=true&categoria=".$_GET['categoria']."'><img src='images/flecha-proxima.jpg' width='150px' /></a>";
							
							$query = "select count(0) esq from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['categoria']." AND a.ID > ".$linha['ID']." AND a.post_type = 'post' AND a.post_status = 'publish' ORDER BY a.ID ASC LIMIT 1";
							mysqli_free_result($result);
							$result = mysqli_query($conn,$query);
							$r = mysqli_fetch_array($result,MYSQLI_ASSOC);
							if($r['esq'])
								echo "<a style='display:block; width:150px;float:left' href='blog_post.php?id=".$linha['ID']."&nav=true&ant=true&categoria=".$_GET['categoria']."'><img src='images/flecha-anterior.jpg' width='150px'  /></a>";
						}
					}
					else{
						echo "<h2>Oops.. isso é embaraçoso, nenhuma postagem foi encontrada. Tente novamente.</h2>";
					}		
				?>
				</div>
				</div>	
			</div><!--/ Fim content -->
			<?php include('blog_categorias.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
