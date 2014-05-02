<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Kazuá</title>

		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="js/jquery.js"></script>
		
		

		
		</head>
	<body>
		<?php include('header.php'); ?>
			
			<div id="header-content-ii">
				<div id="header-extendido" style="height:140px">
					<h1 style="text-align: left">Espaço Negra Anastácia de Novos Autores</h1>
					<p style="text-align: justify; margin-bottom: 20px; " >
						O Espaço Negra Anastácia de Novos Autores é dedicado a projetos 
						de escritores iniciantes. O objetivo é estimular a criatividade de 
						quem está interessado em produzir literatura e para isso propomos 
						canais de interação e aprendizado. A Editora Kazuá disponibiliza uma 
						lista de revisores que já trabalham na Kaza. Ao realizar o seu 
						cadastro no portal, você terá acesso a diferentes procedimentos 
						que servirão como ferramentas para desenvolver seus escritos e 
						transforma-los em uma publicação. A <span style="font-weight: bold">Oficina de Texto</span> oferece orientação 
						técnica especializada; o <span style="font-weight: bold">Espaço Colaborativo</span> fomenta a troca produtiva 
						de leituras entre escritores; em <span style="font-weight: bold">Dicas</span> reunimos e coletamos conselhos 
						e recomendações para facilitar o processo criativo e o posterior desenvolvimento 
						do projeto literário. Entre em contato conosco.
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
			
			
			
		</div><!--/ Fim header -->

		<div id="container">
			<div id="content">
				<div id="box-principal" style="text-align: left">
					
					
					<?php include('mnu_espaco_na.php'); ?>
					
					<h3 style="margin-top:20px;">Espaço Colaborativo</h3>
					<p style="text-align: justify; margin-bottom: 20px; " >
						Este espaço foi idealizado para a criação coletiva. As propostas de exercícios são elaboradas 
						nas oficinas e/ou criadas por você e podem integrar às atividades. 
						Vamos compartilhar os conhecimentos!
					</p>	

					<h3 style="margin-top:20px;">Troca de Leituras</h3>
					<p style="text-align: justify; margin-bottom: 20px; " >
						Este é o espaço para a postagem de textos. Adicione comentários 
						sobre a escrita de outros autores. Uma excelente oportunidade para 
						expor sua escrita.
					</p>
					<p style="text-align: justify; margin-bottom: 20px; " >
						Sobre o envio:<br />

						O autor participante pode enviar seu escrito pelo <i>link</i> 
						abaixo e deixar seu <i>e-mail</i> e comentário sobre o exercício. 
						Sua apreciação será anônima para os leitores do portal e ao 
						receber o comentário solicitaremos que você dê retorno, 
						acrescentando suas observações. A proposta é incentivar 
						a interação entre os participantes das oficinas.
					</p>
					<form action="post">
						<div class="object">
							<div class="object-label">
								<label>nome:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="nome" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>email:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="email" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>Comentários:<label/>
							</div>
							<div class="object-control">
								<textarea name="comentarios" cols="10" rows="5" ></textarea>
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>texto:<label/>
							</div>
							<div class="object-control">
								<textarea name="repsenha" cols="10" rows="5" ></textarea>
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<!--<label>texto:<label/>--></label/>
							</div>
							<div class="object-control">
								<input type="submit" value="Enviar" />		
							</div>	
						</div>	
											
					</form>
						
					<div style="clear:both"></div>
					<hr style="color:#777; border: 1px solid black" /><br />
					<p style="text-align: justify; margin-bottom: 20px; " >
						Para ser um Leitor:<br />

						- Mande seu texto para leitura, preenchendo os campos 
						abaixo. Após o cadastro você recebe o texto de um autor 
						anônimo para comentar. Se solicitado, colocaremos a disposição 
						o e-mail de ambos para que possam interagir produtivamente.
					</p>
					
					<p style="text-align: justify; margin-bottom: 20px; " >
						- O leitor só poderá receber um novo texto se 
						não estiver com nenhuma pendência de comentário anterior.
					</p>
					<p style="text-align: justify; margin-bottom: 20px; " >
						- O prazo ideal para a devolução é de 7 (sete) dias, 
						com um dia adicional para cada 10 (dez) páginas de texto.
					</p>
					<p style="text-align: justify; margin-bottom: 20px; " >
						- Confirme o recebimento do material e faça sua 
						oferta de prazo de devolução.
					</p>
					
					<p style="text-align: justify; margin-bottom: 20px; " >
						- Lembre que cada texto terá apenas um leitor por vez e 
						que um colega autor aguarda por você e seus textos para apreciação.
					</p>
					<form action="post">
						<div class="object">
							<div class="object-label">
								<label>nome:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="nome" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>email:<label/>
							</div>
							<div class="object-control">
								<input type="text" name="email" />
							</div>	
						</div>
						<div class="object">
							<div class="object-label">
								<label>Fale sobre o tipo de texto de sua preferência:<label/>
							</div>
							<div class="object-control">
								<textarea name="preferencia" cols="10" rows="5" ></textarea>
							</div>	
						</div>
						
						<div class="object">
							<div class="object-label">
								<!--<label>texto:<label/>--></label/>
							</div>
							<div class="object-control">
								<input type="submit" value="Enviar" />		
							</div>	
						</div>	
											
					</form>
					
				</div><!--/ Fim box-principal -->
				
			</div><!--/ Fim content -->
			<?php include('sidebar.php'); ?>

		</div><!--/ Fim container -->
		
		
		
	</body>
</html>
