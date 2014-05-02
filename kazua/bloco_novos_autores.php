<div id="sidebar">
		<h2 style="text-align:left; background:#FFF">Novos autores</h2>
		<?php
			//$conn = mysqli_connect("editorakazua.com.br","edito253_root","chuvakazua","edito253_kazua");
			$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
			
			$query = "SELECT id, foto FROM novos_autores";
			
			$result = mysqli_query($conn,$query);
			
			while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		?>
			
		<a style="display:block; text-decoration:none; color:#777" target="_top" href="acompanhe_publicacao.php?id=<?php echo $linha['id'];?>">	
			<div class="foto">
				<img src="images/uploads/fotos/<?php echo $linha['foto']; ?>" />
			</div>					
		
		</a>	
		<?php } mysqli_free_result($result); mysqli_close($conn); ?>
	</div><!--/ Fim sidebar-->