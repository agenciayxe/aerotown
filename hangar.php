<?php 
    $title = "- Hangar";
    include ("header.php"); 
?>

<main class="hangar">
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img class="full" src="img/hangar/banner-topo.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="conteudo">
		<div class="container">
			<div class="fundo"></div>
			<div class="row espaco">
				<div class="col-xs-12 col-sm-5">
					<div class="foto">
						<img src="img/hangar/espaco.jpg" alt="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="texto">
						<div class="forma"></div>
						<div class="descricao">
							O Hangar Food Park é o espaço gastronômico do Aerotown.
							Sua montagem é toda feita com containers, dando um ar descontraído e moderno. O espaço receberá diversos públicos diariamente, dando ótima visibilidade para diferentes
							marcas e negócios, além de criar uma verdadeira experiência social no local.
						</div>
					</div>
				</div>
			</div>
			<div class="row gastronomia">
				<div class="col-xs-12 col-sm-7">
					<div class="texto">
						<div class="titulo">
							ESPAÇO<br>
							<span>GASTRONÔMICO</span>
						</div>
						<!-- <button class="btn" data-toggle="modal" data-target="#gastronomia">
							em breve
						</button> -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-5">
					<img src="img/hangar/gastronomia.jpg" alt="">
				</div>
			</div>
			<div class="row masterplan">
				<div class="col-xs-12 col-sm-5">
					<img src="img/hangar/masterplan.jpg" alt="">
				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="texto">
						<div class="titulo">							
							<span>MASTERPLAN</span>
						</div>
						<button class="btn" data-toggle="modal" data-target="#masterplan">
							saiba mais
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php 
    include ("modal-hangar.php"); 
    include ("footer.php"); 
?>
<script>$(".nav-hangar").addClass("pag-ativa");</script>
<script>$(".footer-hangar").addClass("ativo");</script>