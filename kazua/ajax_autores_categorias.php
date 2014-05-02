<?php
	if($_POST['acao']=="geral"){
		$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
			
		//$query = " select term_id, name from ods_terms where term_id between 161 AND 172 order by name;";
		$query = " select term_id, name from ods_terms where term_id in (132,131,8,15,143,160,155,14,108,41,58,65,16,125,157,158,120,6,126,130,119,17,4,107,127,144,12,5,62,10,3,173,11,140,67,133,9,138,63,159,135,18,134,7) order by name;";

		$result = mysqli_query($conn,$query);
		$html="<option value='0'>--Escolha--</option>";
		while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		//$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
		//if($linha){
			$html .= "<option value='".$linha['term_id']."'>".utf8_encode($linha['name'])."</option>";
		//}
		//else{
			//echo "<h2>Oops.. isso é embaraçoso, mas nenhuma postagem foi encontrada. Tente novamente</h2>";
		}
		die($html);
	}
	
	if($_POST['acao']=="busca"){
		$conn = mysqli_connect("localhost","edito253_root","chuvakazua","edito253_kazua");
			
		//$query = " select term_id, name from ods_terms where term_id between 161 AND 172 order by name;";
		$query = " select term_id, name from ods_terms where term_id in (132,131,8,15,143,160,155,14,108,41,58,65,16,125,157,158,120,6,126,130,119,17,4,107,127,144,12,5,62,10,3,173,11,140,67,133,9,138,63,159,135,18,134,7)  and name like '%".$_POST['busca']."%' order by name";

		$result = mysqli_query($conn,$query);
		$html="<option value='0'>--Escolha--</option>";
		$i=0;
		while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		//$linha = mysqli_fetch_array($result, MYSQLI_ASSOC);
		//if($linha){
			$html .= "<option value='".$linha['term_id']."'>".utf8_encode($linha['name'])."</option>";
		//}
		//else{
			//echo "<h2>Oops.. isso é embaraçoso, mas nenhuma postagem foi encontrada. Tente novamente</h2>";
			$i++;
		}
		if($i==0){
			$html="<option value='0'>Não foram encontrados resultados</option>";
		}
		die($html);
	}
?>