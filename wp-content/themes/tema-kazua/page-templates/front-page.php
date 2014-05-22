<?php
/**
 * Template Name: Home Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		
		<div id="header-negra-anastacia">
			<a href="<?php echo esc_url( home_url( '/novos-autores' ) ); ?>">
			<div class="imagem-destaque">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo-negra-anastacia-final.gif" width="100%" height="auto" alt="" />
			</div>
			<div class="texto-imagem-destaque">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/botao-na-03.jpg" width="100%" height="auto" alt="" />
			</div>
			</a>
		</div>

		<div id="header-zungueira">
		<a href="<?php echo esc_url( home_url( '/zungueira-distribuidora' ) ); ?>">
			<div class="imagem-destaque">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo-zungueira.jpg" width="100%" height="auto" alt="" />
		
			</div>
			<div class="texto-imagem-destaque">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/botao-zungueira-03.jpg" width="100%" height="auto" alt="" />
	
			</div>
		</a>
		</div>

		<div class="clear"></div>

		<div id="header-estudos-academicos">
		<a href="<?php echo esc_url( home_url( '/estudos-academicos' ) ); ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/06AA-kazua-estudos-academicos.jpg" width="100%" height="auto" alt="" />
		</a>	
		</div>

	</div><!-- #primary -->

		<div id="content" class="esquerda-home" role="main">

				<a id="logo-loja">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo-loja.jpg" width="100%" height="auto" alt="" />
				</a><!-- Fim logo-loja -->
				<div id="catalogo">
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/eu_sou_o_que_rezo_pra_mim-capa.jpg" width="100%" height="auto" />
						<p><a style="color:#777" href="http://www.zungueira.com.br/lancamentos/eu-sou-o-que-rezo-pra-mim-de-negra-anastacia.html">Eu sou o que rezo pra mim, de Negra Anastácia</a></p>
						<p style="margin-top: 10px;">R$ 37,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/eu-sou-o-que-rezo-pra-mim-de-negra-anastacia.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/poema-preta-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/poema-preta-de-negra-anastacia.html">Poema Preta, de Negra Anastácia</a></p>
						<p style="margin-top: 10px;">R$35,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/poema-preta-de-negra-anastacia.html">Comprar</a>
					</div>					
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/o-mar-quando-mergulho-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/o-mar-e-quando-mergulho-de-negra-anastacia.html">O mar é quando mergulho, de Negra Anastácia</a></p>
						<p style="margin-top: 10px;">R$32,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/o-mar-e-quando-mergulho-de-negra-anastacia.html">Comprar</a>
					</div>
					<!--<div style="border:1px solid #777; width:100%; float:left"></div>-->
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/um-travesseiro-para-dois-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/um-travesseiro-para-dois-marcio-rodrigues.html">Um travesseiro para dois, de Márcio Rodrigues</a></p>
						<p style="margin-top: 10px;">R$32,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/um-travesseiro-para-dois-marcio-rodrigues.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/ultimo-samba-enredo-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/o-ultimo-samba-enredo-paulo-fabiao.html">O último samba-enredo, de Paulo Fabião</a></p>
						<p style="margin-top: 10px;">R$32,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/o-ultimo-samba-enredo-paulo-fabiao.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/entre-semioticas-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/entre-semioticas.html">Entre-semióticas</a></p>
						<p style="margin-top: 10px;">R$35,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/entre-semioticas.html">Comprar</a>
					</div>					
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/para-quando-o-entulho-soterrar-os-joelhos-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/para-quando-o-entulho-soterrar-os-joelhos.html">Para Quando o Entulho Soterrar os Joelhos</a></p>
						<p style="margin-top: 10px;">R$32,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/para-quando-o-entulho-soterrar-os-joelhos.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/o-caos-do-acaso-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/o-caos-do-acaso-de-mauro-nunes.html">O Caos do Acaso, de Mauro Nunes</a></p>
						<p style="margin-top: 10px;">R$35,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/o-caos-do-acaso-de-mauro-nunes.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/memorias-heliopolis-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/memorias-heliopolis-criacao-coletiva.html">Memórias de Heliópolis</a></p>
						<p style="margin-top: 10px;">R$23,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/memorias-heliopolis-criacao-coletiva.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/meia-pata-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/meia-pata-ricardo-dantas.html">Meia Pata, de Ricardo Dantas</a></p>
						<p style="margin-top: 10px;">R$35,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/meia-pata-ricardo-dantas.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/dionisio-kore-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/lancamentos/dionisio-kore-marcelo-marcus-fonseca.html">De Dionísio para Koré, de Marcelo Marcus Fonseca</a></p>
						<p style="margin-top: 10px;">R$99,90</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/lancamentos/dionisio-kore-marcelo-marcus-fonseca.html">Comprar</a>
					</div>
					<div class="exemplar" >
						<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/no-diva-do-palhaco-capa.jpg"  />
						<p><a style="color:#777"href="http://www.zungueira.com.br/no-diva-palhaco-carlos-biaggioli.html">No divã do palhaço, de Carlos Biaggioli</a></p>
						<p style="margin-top: 10px;">R$32,00</p>
						<a style="display:block;width:70px; position:absolute;text-decoration:none; color:#777; background:#e1e1e1; border:1px solid #777; text-align:center; bottom:10px; left:40px" href="http://www.zungueira.com.br/no-diva-palhaco-carlos-biaggioli.html">Comprar</a>
					</div>
				</div>	

		</div> <!-- #content -->

			<?php // while ( have_posts() ) : the_post(); ?>
				<?php // if ( has_post_thumbnail() ) : ?>
					<!-- <div class="entry-page-image">
						<?php// the_post_thumbnail(); ?>
					</div> .entry-page-image -->
				<?php // endif; ?>

				<?php // get_template_part( 'content', 'page' ); ?>

			<?php // endwhile; // end of the loop. ?>

		<div id="content" class="direita-home" role="main">
			<?php get_sidebar('front'); ?>
		</div>

<?php get_footer(); ?>
