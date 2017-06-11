<!DOCTYPE html>
<html>
	<title>Netfilms</title>
	<head>
	<?php
		session_start();
		if((!isset ($_SESSION["email"]) == true) and (!isset ($_SESSION["senha"]) == true))
		{
			unset($_SESSION["email"]);
			unset($_SESSION["senha"]);
			header('location:index.php');
			}
		$logado = $_SESSION["email"];
	?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			

		<!--<script>
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
				$("#nav").load("../html/navigation.html");
			});

			$("#btn-ass").click(function assistirFilme(){
				if (id == 01) {
					window.location.assign("../html/casamento-grego.html");
				}
			});
		});
		
		</script>-->	
	</head>
	<body>
		<div id="nav"></div>
		
		<div id="container" class="container-fluid">	
			<div id="header" class="carousel slide" data-ride="carousel"">
				<ol class="carousel-indicators">
					<li data-target="#header" data-slide-to="0" class="active"></li>
					<li data-target="#header" data-slide-to="1"></li>
					<li data-target="#header" data-slide-to="2"></li>
					<li data-target="#header" data-slide-to="3"></li>
					<li data-target="#header" data-slide-to="4"></li>
					<li data-target="#header" data-slide-to="5"></li>
				</ol>
				 <div class="carousel-inner" role="listbox">
					<div class="item active"><img src="../imagens/post1.jpg"></div>

					<div class="item"><img src="../imagens/post2.jpg"></div>
    
					<div class="item"><img src="../imagens/post3.jpg"></div>

					<div class="item"><img src="../imagens/post4.jpg"></div>
					
					<div class="item"><img src="../imagens/post5.jpg"></div>
    
					<div class="item"><img src="../imagens/post6.jpg"></div>
				</div>
				
				<a class="left carousel-control" href="#header" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#header" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
						
			</div>
			<div id="content">
				<div class="modal fade" id="modalDesc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="position: fixed;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="modal-title"></h4>
							</div>
							<div class="modal-body">
							 <div class="row">
								<img id="modal-img" class="img-responsive col-8 col-sm-6" src="">
								<div id="modal-desc" class="col-4 col-sm-6"></div>
							</div>
							</div>
							<div class="modal-footer">
								<div id="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<button type="button" id="btn-ass" class="btn btn-secondary" data-dismiss="modal" onclick="assistirFilme()" target="_self">Assistir</button>
								</div>
							</div>
						</div>
					</div>
				</div>
					<div id="category-recomendados" class="carousel slide" data-interval="0">
						<h4 class="text-category">Recomendados</h4>
						<ul>
							<div class="carousel-inner">
								<div class="item active">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="01" src="../imagens/0027910_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="AMOR POR ACASO" alt="Ana Vilanova (Juliana Paes) trabalha como vendedora em uma grande loja de departamentos no Rio de Janeiro. Após descobrir que herdou uma propriedade em uma região vinícola da California, ela parte para a pequena cidade de Webster. Lá conhece Jake Sullivan (Dean Cain), que está se separando da estrela de cinema Amanda Cox (Kimberly Quinn) e é dono da propriedade a qual Ana acredita ser sua. Ao descobrir a situação, Ana faz de tudo para despejar Sullivan do local."></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="02" src="../imagens/0027375_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="O AMANTE DA RAINHA" alt="Século XVIII. Caroline Mathilde (Alicia Vikander) é uma jovem britânica que se torna rainha da Dinamarca após se casar com o insano rei Christian VII (Mikkel Boe Folsgaard). Em viagem pela Europa, a saúde mental do monarca piora a cada dia e um acompanhamento médico torna-se necessário. O alemão Johann Struensee (Mads Mikkelsen) é escolhido e rapidamente conquista a confiança do rei, tornando-se seu confidente e principal conselheiro. Promovido a médico da corte, Struensee também se aproxima cada vez mais de Caroline. Aproveitando-se da fragilidade de Christian, os dois assumem o poder do país e iniciam uma surpreendente reforma de inspiração iluminista."></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="03" src="../imagens/0025048_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="CASAMENTO GREGO" alt="Toula Portokalos (Nia Vardalos) tem 30 anos, é grega e trabalha no restaurante de sua família. O sonho de seu pai é vê-la casada com um grego, mas ela espera algo mais da vida. Com muito custo Toula consegue convencer seu pai a lhe pagar aulas de informática, como forma de melhorar seu trabalho. No curso ela conhece e se apaixona por Ian Miller (John Corbett), sendo correspondida. Porém, Ian é inglês e por causa disso eles decidem manter seu namoro em segredo. Mas logo eles são descobertos, desencadeando um processo de aceitação para Ian, para que ele possa se adequar às tradições gregas."></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="04" src="../imagens/0033570_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="O PLANO PERFEITO" alt="Uma mulher bem sucedida e apaixonada por seu namorado tenta quebrar a tradição de sua família, em que todo primeiro casamento acaba em divórcio. Para isso ela criou um plano perfeito: casar-se com um estranho qualquer e divorciar-se dele para depois ficar com seu namorado para sempre. Isso poderia dar certo se o homem escolhido não fosse um irritante redator de guias de viagem que ela tem que acompanhar de Kilimanjaro a Moscou."></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="05" src="../imagens/0034267_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="RECÉM CHEGADA" alt="DMiami. Lucy Hill (Renée Zellweger) é uma executiva ambiciosa. Ela imediatamente aceita uma oferta de trabalho temporário em uma fábrica do Minnesota que passa por um processo de reestruturação, teoricamente uma grande chance para uma carreira promissora. O problema é que chegando lá ela percebe que nada é da forma que lhe foi informado."></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="06" src="../imagens/0041319_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="LABIRINTO DE MENTIRAS" alt="1958, Frankfurt, Alemanha. Johann Radmann (Alexander Fehling) é um jovem procurador que começa a investigar casos relacionados à Segunda Guerra Mundial, encerrada há mais de uma década. Aos poucos ele descobre que a extensão dos crimes vai muito além dos condenados pela justiça, percebendo o quanto o nazismo esteve entranhado na sociedade alemã. À medida que as investigações avançam, Radmann sofre uma pressão cada vez maior para que não siga além em sua busca."></a>
												
											</div>
										</div>												
									</li>
								</div>
								<div class="item">
									<li>
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="07" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="08" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="09" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="10" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="11" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="12" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
							
								<a class="left carousel-control" style="width:30px" href="#category-recomendados" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" style="width:30px" href="#category-recomendados" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</ul>
					</div>
					<div id="category-acao" class="carousel slide" data-interval="0">
						<h4 class="text-category">Ação</h4>
						<ul>
							<div class="carousel-inner">
								<div class="item active">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="13" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="14" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#"  onclick="event.preventDefault();" class="service"><img class="img-responsive" id="15" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="16" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="17" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="18" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<div class="item">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="19" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="20" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="21" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>	
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="22" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>	
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="23" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>	
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="24" src="../imagens/0000097_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
											</div>	
										</div>
										
									</li>
								</div>
								<a class="left carousel-control" style="width:30px" href="#category-acao" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" style="width:30px" href="#category-acao" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</ul>	
					</div>	
					<div id="category-drama" class="carousel slide" data-interval="0">
						<h4 class="text-category">Drama</h4>
						<ul>
							<div class="carousel-inner">
								<div class="item active">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="26" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#"  onclick="event.preventDefault();" class="service"><img class="img-responsive" id="27" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="28" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="29" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="30" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#"  onclick="event.preventDefault();" class="service"><img class="img-responsive" id="31" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<div class="item">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="32" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="33" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="34" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="35" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="36" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="37" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<a class="left carousel-control" style="width:30px" href="#category-drama" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" style="width:30px" href="#category-drama" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</ul>	
					</div>	
					<div id="category-romance" class="carousel slide" data-interval="0">
						<h4 class="text-category">Romance</h4>
						<ul>
							<div class="carousel-inner">
								<div class="item active">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="38" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="39" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="40" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="41" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="42" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="43" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<div class="item">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="44" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="45" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="46" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="47" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="48" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="49" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<a class="left carousel-control" style="width:30px" href="#category-romance" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" style="width:30px" href="#category-romance" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</ul>	
					</div>	
					<div id="category-suspense" class="carousel slide" data-interval="0">
						<h4 class="text-category">Suspense</h4>
						<ul>
							<div class="carousel-inner">
								<div class="item active">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="50" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="51" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="52" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="53" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="54" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="55" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<div class="item">
									<li>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="56" src="../imagens/0000026_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
																					
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" dir="57" src="../imagens/0000034_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="58" src="../imagens/0000057_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="59" src="../imagens/0000056_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="60" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>
										<div class="col-lg-2 col-xs-2 col-md-2 col-sm-2">
											<div class="img"><a href="#" onclick="event.preventDefault();" class="service"><img class="img-responsive" id="61" src="../imagens/0000080_200.jpg" onclick="obterDados" data-toggle="modal" data-target="#modalDesc" title="Titulo do filme" alt="Descrição do Texto Descrição do Texto Descrição do Texto Descrição do Texto"></a>
												
											</div>
										</div>												
									</li>
								</div>
								<a class="left carousel-control" style="width:30px" href="#category-suspense" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" style="width:30px" href="#category-suspense" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</ul>						
					</div>
			</div>
		</div>
		<div id="footer">&copy; Todos os direitos reservados</div>
	</body>
	<script type="text/javascript" src="../javascript/functions.js"></script>
</html>