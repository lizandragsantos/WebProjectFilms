$(document).ready(function(){
	var id;
  	$("img").click(function obterDados(){
  		var tutulo, desc, image;
  		id = ($(this).attr("id"));
  		titulo = $("#"+id).attr("title");
		image = $("#"+id).attr("src");
		desc = $("#"+id).attr("alt");
		$("#modal-title").html(titulo);
		$("#modal-desc").html(desc);
		$("#modal-img").attr("src", image);
 	});

	var a = $(".service");
		a.click(function(e){
  	  	e.preventDefault();   
	});

	$(function() {
		$("#nav").load("http://netfilms/html/navigation.html");
	});
	
	$("#btn-ass").click(function assistirFilme(){
		if (id == 03) {
			window.location.assign("http://netfilms/html/filmes/casamento-grego.html");
		}
	});
});
		