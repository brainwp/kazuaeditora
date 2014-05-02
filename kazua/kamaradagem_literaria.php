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
		<script src="js/jquery.js"></script>
		<script src="js/canvas.js"></script>

		
		</head>
	<body>
		
		<?php include('header.php'); ?>	
		
		<div id="header-content-ii">
				<div id="header-extendido" style="height:90px">
					<h2 style="text-align:left"><?php echo isset($mensagem) ? $mensagem: ""; ?></h2>										
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
		<div id="container">
			<div id="content">
				<div id="box-principal" style="text-align: left">
					
					<img src="images/kamaradagem-literaria.jpg" width="650px" />
					<div style="width:300px; height:120px; position: absolute; background: #fff; top:310px; left:240px">
						<form method="post" enctype="multipart/form-data">
						<div class="object" style="margin-left:0px;  padding:5px;">
							<div class="object-label" style="width:60px">
								<img src="images/botao-acesso.jpg" />
							</div>
							<div class="object-control">
								<input type="text" style="float:left;width:190px;height:20px; margin-top:10px"name="usuario" />
							</div>	
							
						</div>
						<div class="object" style="margin-left:0px; padding:5px;">
							<div class="object-label" style="width:60px">
								<img src="images/botao-senha.jpg" />
							</div>
							<div class="object-control">
								<input type="text" style="float:left;width:190px;height:20px; margin-top:10px"name="senha" />
							</div>	
							
						</div>
							
						<input type="submit" style="margin:5px"value="Autenticar" />					
					</form>
					</div>	
					<canvas id="teste" width="26px" height="50px" style="width:26px height:50px; display:block;position:absolute; top:447px;left:192px"></canvas>
					<div id="splash" style="width:350px; height:200px;position:absolute;background:#fff;top:447px;left:192px;display:none">
						<h1>Teste</h1>
						<p>Aqui será algum splash etc etc etc</p><br /><br />
						<p id="close_tag" style="cursor: pointer; color:red">[X] Fechar</p>
						
					</div>
				</div><!--/ Fim box-principal -->
				
			</div><!--/ Fim content -->
			<?php include('sidebar.php'); ?>

		</div><!--/ Fim container -->
		<script>
//Retorna o elemento Canvas
   function e(n){ return document.getElementById(n)}

//Limpa a tela, desenhando um novo retângulo vazio nesta.
   function clear(){e("teste").getContext("2d").clearRect(0,0,_width,_height)}

//Define o tamanho da tela
   var _width = 26;
   var _height = 50;

   e("teste").width = 26;
   e("teste").height = 50;

//Cria um número aleatório para desenhar o primeiro circulo;
   var x=Math.floor((Math.random()*_width/2)+5),
       y=Math.floor((Math.random()*_height/2)+5);

//Variáveis de incrementação
   var sx=1, sy=1;

//Desenha o primeiro circulo
   var ctx = e("teste").getContext("2d");
   ctx.beginPath();
   ctx.arc(sx,sy,5,0,2*Math.PI);
   //ctx.stroke();
   ctx.fillStyle="#FFFFFF";
   ctx.fill();

//Loop de animação
   function loop(){
    if(x>_width-5||x<5)sx*=-1;
    if(y>_height-5||y<5)sy*=-1;
    x+=sx;y+=sy
    clear();
    var ctx=e("teste").getContext("2d");
    ctx.beginPath();
    ctx.arc(x,y,5,0,2*Math.PI);
    //ctx.stroke();
    ctx.fillStyle="#FFFFFF";
    ctx.fill();

    setTimeout("loop()", 40)
   }loop();

  </script>
		
		
		
	</body>
</html>
