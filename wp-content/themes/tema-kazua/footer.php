<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/rodape-geral.jpg" width="100%" height="auto" alt="" />
				<?php // do_action( 'twentytwelve_credits' ); ?>		
				<!-- <a href="<?php echo esc_url( __( 'http://editorakazua.com.br', 'Editora Kazuá Ltda - 2013' ) ); ?>" title="<?php esc_attr_e( 'ir para home page', 'twentyeleven' ); ?>"><?php printf( __( 'Editora Kazuá Ltda - 2013 <br /> CNPJ 16.569.856/0001-12 ' ), 'Editora Kazuá' ); ?></a> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
