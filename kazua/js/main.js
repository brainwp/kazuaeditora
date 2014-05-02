$(document).ready(function(){
	$(".img-autor-kaza").mouseover(function(){
		//alert("mouse");
		$(this).children("p").show();
		$(this).children("img").css("width:100px");
		$(this).children(".img-autor-moldura").show();
		$(this).children("a").children("img").attr("src","images/moldura-para-autores_b.gif");
		
	});
	$(".img-autor-kaza").mouseout(function(){
		//alert("mouse");
		$(this).children("p.esconder").hide();
		$(this).children("img").css("width:100px");
		$(this).children(".img-autor-moldura").hide();
		$(this).children("a").children("img").attr("src","images/moldura-para-autores.png");
	});
});
