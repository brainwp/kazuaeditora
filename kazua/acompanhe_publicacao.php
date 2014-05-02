<?php
	session_start();
	if($_SESSION['autenticado']!=1){
		
		echo "<script>location.href='autentica_novos_autores.php'</script>";
	}
	
	
	
	//$conn = mysqli_connect("localhost", "root", "", "kazua", 3306);
	$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
	
	if($_POST){
		$query = "INSERT INTO novos_autores_comentarios VALUES (NULL, ".$_POST['novo_autor_id'].", ".$_SESSION['usuario_id'].", '".$_POST['comentario']."', NOW())";
		mysqli_query($conn, $query);
		$_GET['novo_autor_id'] = $_POST['novo_autor_id'];
	}
	
	$query = "SELECT * FROM novos_autores WHERE id = ".$_GET['id'];
	
	$result = mysqli_query($conn,$query);
	
	$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);

?>
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kazuá</title>

		<link rel="stylesheet" type="text/css" href="style.css" />

		
		</head>
	<body>
		<?php include('header.php'); ?>
			
			<div id="header-content-blog">
				<h1 style="text-align:left"><?php echo $linha['nome']; ?></h1>
				<!--img src="images/uploads/fotos/<?php echo $linha['foto']; ?>" rel="" title="" />-->
				<div id="capa" style="background: url('images/uploads/capas/<?php echo $linha['capa']; ?>') no-repeat; background-size:100% 300">
					<img src="images/uploads/fotos/<?php echo $linha['foto']; ?>" rel="" title="" />
				</div>
				<div id="timeline">
					<div style="width:80%; height: 90px; position:absolute;background:#000;z-index: 800">
						&nbsp;
					</div>		
					<div style="width:100%; height: 90px; position:absolute;background:url('images/k-barra-branca.png'); z-index:900;">
						&nbsp;
					</div>				
				</div>	
				
			</div>
			
			<div id="header-content-ii">
				<div id="header-extendido">
					
				</div>
					
				<!--<div id="header-negra-anastacia">
					<img src="images/logo-negra-anastacia.gif" align="left" rel="" title="" />
					<p style="text-align:justify; font-size:12px">A Editora Kazuá combina
						interatividade e criação
						lietrária. Econtre alternativas
						para desenvolver e aprimorar
						seu estilo literário. Trabalhe em
						sua obra. Participe de atividades
						literárias envolvendo
						criacao e revisão. Conheça dicas
						de escritores publicados pela Kazuá.
						Receba orientações do
						conselho Literário e orientação
						Técnica especialista. Acesse obras gratuitamente
					</p>
				</div>-->
			</div>	
			
			
			
		</div><!--/ Fim header -->

		<div id="container">
			<div id="content">
				<div id="box-principal">
					<h2>Sobre o Autor</h2>
					<p><?php echo $linha['descricao_autor']; ?></p>
					<hr />
					<h2>Sobre o Livro</h2>
					<p><?php echo $linha['descricao_obra']; ?></p>
					<div id="box-recados">
						<div id="box-recados-titulo" style="border: 1px solid #e1e1e1">
							<p>Recados</p>
						</div>
						
						<?php 
							$query = "SELECT * FROM novos_autores_comentarios a JOIN novos_autores b on (a.comentario_autor_id = b.id) WHERE novo_autor_id = ".$_GET['id']." ORDER BY a.id DESC LIMIT 5";
							$result = mysqli_query($conn,$query);
							
							while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						?>	
						<div class="box-comentarios">
							<p><b><?php echo $linha['nome']; ?></b></p>
							<img src="images/uploads/fotos/<?php echo $linha['foto']; ?>"  width="70px" align="left" />
							<p><?php echo $linha['comentario']; ?></p>
						</div>	
						<?php } ?>
					</div>
					<hr />
					<h2 style="text-align:left">Deixe seu comentário</h2>	
					<form method="post">
						<div class="object">
							<div class="object-label">
								<label>Comentário:<label/>
							</div>
							<div class="object-control">
								<textarea rows="5" cols="40"  name="comentario"></textarea>
								<input type="hidden" name="novo_autor_id" value="<?php echo $_GET['id'];?>" />
							</div>	
						</div>						
						<input type="submit" value="Comente!" />					
					</form>
				</div><!--/ Fim destaque -->
				
			</div><!--/ Fim content -->
			<?php include('bloco_novos_autores.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
