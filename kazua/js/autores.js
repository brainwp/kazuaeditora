$(document).ready(function(){
	$.post("ajax_autores_categorias.php",{
		acao: "geral"
	},function(data){
		$(".object-control select").empty();
		$(".object-control select").append(data);
	},"html");
	
	$("#busca").keypress(function(e){
		
		if(e.keyCode == "13" && $(this).val().trim()!=""){
			var busca = $(this).val();
			$.post("ajax_autores_categorias.php",{
				acao: "busca",
				busca: busca
			},function(data){
				$(".object-control select").empty();
				$(".object-control select").append(data);
			},"html");
		}
	});
	
	$(".object-control select").change(function(){
		if($(this).val()!="0"){
			location.href="blog_post.php?categoria="+$(this).val();
		}
	});
	
	$("#mnu_cat_autores").click(function(){
		$("#busca_form").show('slow');
	});
});
