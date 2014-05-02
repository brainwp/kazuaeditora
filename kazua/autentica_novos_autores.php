<?php
	session_start();
		
	//$conn = mysqli_connect("localhost", "root", "", "kazua", 3306);
	$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
	if($_POST){
		$query = "SELECT id FROM novos_autores WHERE usuario = '".$_POST['usuario']."' AND senha = '".$_POST['senha']."'";
		$result = mysqli_query($conn, $query);
		$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if($linha['id']!=""){
			$_SESSION['autenticado']  = 1;
			$_SESSION['usuario_id'] = $linha['id'];
			echo "<script>location.href='acompanhe_publicacao.php?id=".$linha['id']."'</script>";
		}
		else{
			$mensagem = "Usuário ou senha inválidos";
		}	
		
	}
	
	

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
			
			
			<div id="header-content-ii">
				<div id="header-extendido">
					<h2>Autentique-se</h2>
					<h3><?php echo isset($mensagem) ? $mensagem: ""; ?></h3>
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
					
						
					<form method="post">
						<div class="object">
							<div class="object-label">
								<label>Usuário:<label/>
							</div>
							<div class="object-control">
								
								<input type="text" name="usuario"  />
							</div>	
						</div>		
						<div class="object">
							<div class="object-label">
								<label>Senha:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="senha"  />
							</div>	
						</div>
						<div style="clear:both"></div>				
						<input type="submit" value="Autenticar" />					
					</form>
				</div><!--/ Fim destaque -->
				
			</div><!--/ Fim content -->
			<?php include('bloco_novos_autores.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
