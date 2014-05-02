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
					<form onsubmit="return false">
						<div class="object">
							<div class="object-label">
								<label>Selecione o autor:<label/>
							</div>
							<div class="object-control">
								<select name="autor">
									<!-- resultados ajax -->
								</select>	
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>Refine os autores, Busque:<label/>
							</div>
							<div class="object-control">
								<input type="text" id="busca" value="" />	
							</div>	
						</div>
					</form>	
				</div>	
			</div><!--/ Fim content -->
			<?php include('blog_categorias.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
