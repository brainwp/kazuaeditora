<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kazuá</title>

		<link rel="stylesheet" type="text/css" href="style.css" />

		
		</head>
	<body>
		
			<?php include('header.php'); ?>
				
			
			
		
		<div id="header-content-ii">
				<div id="header-extendido">
					<h1 style="text-align: left">Categorias do BLOG</h1>
				</div>
		</div>
		<div id="container">
			<div id="content">
				<div id="box-principal" >
				<?php
					$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
			
					$query = "select t.name, a.post_title, a.post_date, a.post_content from ods_posts a join ods_term_relationships b on (a.ID = b.object_id) join ods_term_taxonomy c ON (b.term_taxonomy_id = c.term_taxonomy_id) join ods_terms t ON (c.term_id = t.term_id) where t.term_id = ".$_GET['term_id']." order by a.id desc limit 5;";
			
					$result = mysqli_query($conn,$query);
			
					while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					//$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
					//if($linha){
						echo "<h2>".utf8_encode($linha['post_title'])."</h2>";
						echo "<h3><i>".date('d/m/Y', strtotime($linha['post_date']))."</i></h3>";	
						echo utf8_encode(substr(str_ireplace('-300x110.jpg" width="150" height="55', '.jpg" width="680" heigth="249"',$linha['post_content']),0,1000));
						echo "<br /><br />";
					//}
					//else{
						//echo "<h2>Oops.. isso é embaraçoso, mas nenhuma postagem foi encontrada. Tente novamente</h2>";
					}		
				?>
				</div>	
			</div><!--/ Fim content -->
			<?php include('sidebar.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
