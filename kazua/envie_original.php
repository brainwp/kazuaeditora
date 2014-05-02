<?php
	session_start();
	if($_POST){
		
		//$conn = mysqli_connect("localhost", "root", "", "kazua", 3306);
		$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
		$mensagem = "";
		//uploads
		
		//-->upload da capa <----
		$_UP['extensoes'] = array('jpg','png','gif','bmp');
		$tamanho =  1024 * 1024 * 1;
		if($_FILES['capa']['size'] > $tamanho){
			$mensagem = "O tamanho máximo permitido para a foto de capa é de 1MB";
        	//aqui deve ser o redirecionamento
		}
		
		$extensao = explode('.', strtolower($_FILES['capa']['name']));
		$extensao = array_pop($extensao);
		
		if (array_search($extensao, $_UP['extensoes']) === false){
			$mensagem = "Apenas fotos serão aceitas para a capa. Escolha uma foto válida e tente novamente";
		}
		
		$capa = md5(time()).".".$extensao;
				
		//die($_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final);
		if(!move_uploaded_file($_FILES['capa']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/kazua/images/uploads/capas/".$capa)){
		//if(!move_uploaded_file($this->request->data['Amigo']['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final)){
			$mensagem = "Erro ao fazer o upload. Tente novamente";        	
		}
		//-->FIM upload da capa <----
		
		//-->UPLOAD foto<---
		$_UP['extensoes'] = array('jpg','png','gif','bmp');
		$tamanho =  1024 * 1024 * 1;
		if($_FILES['foto']['size'] > $tamanho){
			$mensagem = "O tamanho máximo permitido para a foto do autor é de 1MB";
        	//aqui deve ser o redirecionamento
		}
		
		$extensao = explode('.', strtolower($_FILES['foto']['name']));
		$extensao = array_pop($extensao);
		
		if (array_search($extensao, $_UP['extensoes']) === false){
			$mensagem = "Apenas fotos serão aceitas para a foto do autor. Escolha uma foto válida e tente novamente";
		}
		
		$foto = md5(time()).".".$extensao;
				
		//die($_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final);
		if(!move_uploaded_file($_FILES['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/kazua/images/uploads/fotos/".$foto)){
		//if(!move_uploaded_file($this->request->data['Amigo']['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final)){
			$mensagem = "Erro ao fazer o upload. Tente novamente";
			
			unlink("c:/xampp/htdocs/kazua/images/uploads/capas/".$capa);      	
		}
		//-->FIM upload foto<---
		
		//UPLOAD original <---
		//$_UP['extensoes'] = array('jpg','png','gif','bmp');
		$tamanho =  1024 * 1024 * 5;
		if($_FILES['original']['size'] > $tamanho){
			$mensagem = "O tamanho máximo permitido para a obra do autor é de 5MB";
        	//aqui deve ser o redirecionamento
		}
		
		$extensao = explode('.', strtolower($_FILES['original']['name']));
		$extensao = array_pop($extensao);
		
		/*if (array_search($extensao, $_UP['extensoes']) === false){
			$mensagem = "Apenas fotos serão aceitas para a foto do autor. Escolha uma foto válida e tente novamente";
		}*/
		
		$original = md5(time()).".".$extensao;
				
		//die($_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final);
		if(!move_uploaded_file($_FILES['original']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/kazua/images/uploads/originais/".$original)){
		//if(!move_uploaded_file($this->request->data['Amigo']['foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].DS.'turbulentos'.DS.'app'.DS.'webroot'.DS.'img'.DS.$nome_final)){
			$mensagem = "Erro ao fazer o upload. Tente novamente";
			
			unlink($_SERVER['DOCUMENT_ROOT']."/kazua/images/uploads/capas/".$capa);
			unlink($_SERVER['DOCUMENT_ROOT']."/kazua/images/uploads/fotos/".$foto);      	
		}
		
		if($mensagem != ""){
			die($mensagem);
		}
		//fim upload original
		
		
		
		//fim uploads
		
		//query insercao do novo autor
		$sql = "INSERT INTO novos_autores VALUES 
			(NULL, 
			'".$_POST['nome']."', 
			'".$_POST['usuario']."', 
			'".$_POST['senha']."', 
			'".$capa."',
			'".$foto."',
			'".$original."',
			'".$_POST['descricao_autor']."',
			'".$_POST['descricao_obra']."',
			1,
			'".$_POST['titulo']."',
			NOW())";
			
			$result = mysqli_query($conn,$sql);
			$_SESSION['autenticado'] = 1;
			$_SESSION['usuario_id'] = mysqli_insert_id($conn);
			echo "<script>location.href='acompanhe_publicacao.php?id=".$_SESSION['usuario_id']."'</script>";
			
			
		//fim query	
		
		
	}
	else{
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
					<p style="text-align:justify;margin-bottom: 20px;">
						O ideal da Editora Kazuá é funcionar para um coletivo
						de autores e disponibilizar os profissionais e os serviços
						que cada livro requer. O resultado são projetos personalizados
						e originais que refletem a proposta editorial de colocar
						no mercado publicações únicas, com o melhor custo-benefício.												
					</p>
					
					<p style="text-align:justify;margin-bottom: 20px;">
						A Kazuá surgiu do desejo de oferecer aos autores a possibilidade 
						de publicar sem pagar pela própria obra, um diferencial 
						em relação ao mercado tradicional de editoração.						
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
					<?php include('mnu_seja_autor.php'); ?>
					<h2>Como enviar os originais</h2>
					<p style="text-align: justify; margin-bottom: 20px; " >
						Na Kazuá o autor envia seu original e pode acompanhar on-line todo o processo de apreciação 
						dos seus escritos. Após o preenchimento do formulário automaticamente é criado um perfil 
						do autor no portal da Kazuá, nos moldes do facebook e outras mídias sociais.
					</p>
					<p style="text-align: justify; margin-bottom: 20px; " >
						A partir do cadastramento de seu projeto literário a Editora oferece 
						um espaço colaborativo onde é possível publicar seu original de forma aberta, 
						dando lugar a que outros autores possam conhecer, opinar e discutir aspectos do 
						seu material; assim como pode optar por fazê-lo de forma restrita, na qual apenas 
						os pareceristas da equipe da Kazuá terão acesso ao seu conteúdo. A evolução deste 
						processo pode então ser seguida passo a passo. O autor também encontrará um espaço 
						para conversar com revisores, assim como um lugar para estabelecer debates literários.
					</p>
					
					<form method="post" enctype="multipart/form-data">
						<div class="object">
							<div class="object-label">
								<label>Seu Nome:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="nome" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>Email:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="usuario" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>Insira uma senha:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="senha" />
							</div>	
						</div>
						<!--<div class="object">
							<div class="object-label">
								<label>Repita a senha:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="repsenha" />
							</div>	
						</div>-->
						<div class="object">
							<div class="object-label">
								<label>Título proposto:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="titulo" />
							</div>	
							
						</div>	
						<div class="object">
							<div class="object-label">
								<label>Capa:<label/>
							</div>
							<div class="object-control">
								<input type="file" name="capa" />
								<i>Dica: Envie com as seguintes proporções: 1000px X 300px</i>
							</div>	
							
						</div>	
						<div class="object">
							<div class="object-label">
								<label>Foto do autor:<label/>
							</div>
							<div class="object-control">
								<input type="file" name="foto" />
								
							</div>	
							
						</div>
						<div class="object">
							<div class="object-label">
								<label>O Original:<label/>
							</div>
							<div class="object-control">
								<input type="file" name="original" />
								
							</div>	
							
						</div>
						<div class="object">
							<div class="object-label">
								<label>Descrição do autor:<label/>
							</div>
							<div class="object-control">
								<textarea rows="5" cols="40"  name="descricao_autor"></textarea>
							</div>	
							
						</div>
						<div class="object">
							<div class="object-label">
								<label>Descrição do original:<label/>
							</div>
							<div class="object-control">
								<textarea rows="5" cols="40" name="descricao_obra"></textarea>
							</div>	
							
						</div>	
						<input type="submit" value="Enviar orginal" />					
					</form>	
				</div><!--/ Fim destaque -->
				
			</div><!--/ Fim content -->
			<?php include('sidebar.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>

<?php } ?>
