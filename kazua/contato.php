<?php
	if($_POST){
		/*require_once('phpmailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Host     = 'mail.editorakazua.com.br';
		$mail->Username = 'contato@editorakazua.com.br'; // Usuário do servidor SMTP (endereço de email)
		$mail->Password = 'kazua2014$'; // Senha do servidor SMTP (senha do email usado)
		//$mail->Port = "465";
		
		
		$mail->From = "contato@editorakazua.com.br"; // Seu e-mail
		$mail->Sender = "contato@editorakazua.com.br"; // Seu e-mail
		$mail->FromName = "Contato Site"; // Seu nome
		
		$mail->AddAddress('contato@editorakazua.com.br');
		$mail->AddAddress('aloiso_gomes@hotmail.com.br');
		
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		
		$mail->Subject  = $_POST['assunto']; // Assunto da mensagem
		
		$corpo = "Nome do contato: ".$_POST['nome']."<br />";
		$corpo .= "Telefone: ".$_POST['telefone']."<br />";
		$corpo .= "Email: ".$_POST['email']."<br /><br />";
		$mail->Body = $corpo.$_POST['mensagem'];
		 
		
		 
		// Envia o e-mail
		$mail->SMTPDebug   = 2;
		$enviado = $mail->Send();
		 
		// Limpa os destinatários e os anexos
		$mail->ClearAllRecipients();
		$mail->ClearAttachments();
		 
		// Exibe uma mensagem de resultado
		if ($enviado) {
			$mensagem = "Email enviado com sucesso!";
		} else {
			$mensagem = "Houve um erro no envio. Tente novamente"; 
			echo $mail->ErrorInfo;
		
		}
				
		}*/
		
		
		// O remetente deve ser um e-mail do seu dominio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers = "MIME-Version: 1.1\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\n";
		$headers .= "From: contato@editorakazua.com.br\n"; // remetente
		$headers .= "Bcc: evandrorh@gmail.com\n"; // remetente
		//$headers .= "Return-Path: eu@seudominio.com\n"; // return-path
		//$envio = mail("411@hti.com.br", $_POST['assunto'], $_POST['texto'], $headers);
		
		$assunto = "[Site] - ".$_POST['assunto'];
		
		$mensagem = "Nome : ".$_POST['nome']."\nEmail: ".$_POST['email']."\nTelefone: ".$_POST['telefone']."\n\n Mensagem: \n".$_POST['mensagem'];
		$envio = mail("contato@editorakazua.com.br", utf8_decode($assunto), utf8_decode($mensagem), $headers);
		 
		if($envio)
		 $mensagem =  "Mensagem enviada com sucesso";
		else
		 $mensagem =  "A mensagem não pode ser enviada";
		
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
				<div id="header-extendido" style="height:90px">
					<h2 style="text-align:left">Entre em contato com a Kaza</h2>
					
					<p style="text-align: justify; margin-bottom: 20px; " >
						Envie-nos a sua mensagem
					</p>
										
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
					<h3><?php isset($mensagem) ? $mensagem: ""; ?></h3>
					<form method="post">
						<div class="object">
							<div class="object-label">
								<img src="images/formulario_nome.jpg" />
							</div>
							<div class="object-control">
								<input type="text" name="nome" />
							</div>	
						</div>	
						<div class="object">
							<div class="object-label">
								<img src="images/formulario_email.jpg" />
							</div>
							<div class="object-control">
								<input type="text" name="email" />
							</div>	
						</div>	
						<div class="object">
							<div class="object-label">
								<img src="images/formulario_telefone.jpg" />
							</div>
							<div class="object-control">
								<input type="text" name="telefone" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<img src="images/formulario_assunto.jpg" />
							</div>
							<div class="object-control">
								<input type="text" name="assunto" />
							</div>	
						</div>				
						<div class="object">
							<div class="object-label">
								<img src="images/formulario_mensagem.jpg" />
							</div>
							<div class="object-control">
								<textarea rows="5" cols="40" name="mensagem"></textarea>
							</div>	
							
						</div>	
						<input type="image" src="images/flecha-envie-sua-mensagem.jpg" width="250px" onsubmit="submit-form();" />					
					</form>			
					
				</div><!--/ Fim box-principal -->
				
			</div><!--/ Fim content -->
			<?php include('sidebar.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>