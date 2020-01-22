<?php 
/*
Template Name: Sobre
*/
get_header();
?>
<main class="aerotown">
	<section class="banner-topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="slider">
						<?php 
						$argsBanner = array(
							'post_type' => 'slide',
							'posts_per_page' => -1,
							'tax_query' => array(
						        array(
						            'taxonomy' => 'slide',
						            'field'    => 'slug',
						            'terms'    => 'aerotown',
						        ),
						    ),
						    'orderby' => 'title',
						    'order' => 'ASC'
						);
						$querySlide = new WP_Query( $argsBanner );
						if ($querySlide->have_posts()) {
							?><div class="owl-carousel owl-theme"><?php
							while ($querySlide->have_posts()) {
								$querySlide->the_post();
								if (get_field('imagem')) {
									$imageCurrent = get_field('imagem');
									?>
									<div class="item">
										<?php 
										if (get_field('video')) {
											?><a class="owl-video" href="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?rel=0&amp;showinfo=0&autoplay=1"></a><?php 
										}
										?>
										<img src="<?php echo $imageCurrent['url']; ?>" alt="">
									</div>
									<?php
								}
							}
							?></div><?php
						}
						?>
						<button class="muda-slide">
							<div class="icono-arrow1-left"></div>								
						</button>
						<div class="chamada">							
							<span>
								AEROTOWN
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="conceito">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="logo">
						<img src="<?php bloginfo('template_url') ?>/img/aerotown/logo-footer.png" alt="">
					</div>
					<br>
					<div class="texto">
						Agora na <strong>barra da tijuca</strong>, conheça o <strong>aerotown polo de moda</strong>. Um empreendimento, que abrange não somente um centro de compras, mas também outras operações como gastronomia, entretenimento e outras atividades, que formam um grande complexo de compras. Com uma localização super privilegiada na Av. Ayrton Senna este empreendimento já está pronto para decolar.
						<br>
						<strong>Apertem os cintos.</strong>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="fundo-claro">
			<div class="container">
				<div class="row">					
					<div class="col-xs-12 col-sm-6">
						<div class="bloco park">
							<b>
								<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-park.png" alt=""><br>
								ESTACIONAMENTO
								<div class="box-park">
									R$ 10,00 PREÇO ÚNICO<br>
									CARÊNCIA 20 MINUTOS								
								</div>
								SEGUNDA A SÁBADO - DAS 10H ÀS 22H<br>
								DOMINGOS E FERIADOS - DAS 15H ÀS 21H<br>
								<br>
								SAÍDA DE VEÍCULOS: ATÉ 1H DA MANHÃ<br>
								<br>
								GUICHÊS DE PAGAMENTO: <br>
								Hangar Food Park<br>
								<br>
								AUTOATENDIMENTO:<br>
								Hangar Food Park
							</b>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="bloco transporte">
							<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-transporte.png" alt=""><br>
							<b>TRANSPORTE PARA EMPRESAS</b><br>
							Serviço de transporte gratuito para os centros comerciais CEO e Vivo.<br>
							O AEROTOWN informa que está à disposição dos consumidores um micro-ônibus gratuito que circula por centros comerciais da Barra da Tijuca
							para facilitar o acesso ao shopping,de segunda a sexta, das 12h00 às 14h55. Exceto feriado.<br>
							<br>
							O objetivo é oferecer mais conforto e comodidade aos nossos clientes facilitando o deslocamento durantes as suas compras.<br>
							<br>
							O itinerário está com seu ponto de embarque e desembarque devidamente sinalizado no estacionamento do Hangar Food Park.<br>
							<br>
							<button class="btn btn-grade" data-toggle="collapse" data-target="#tabela">CONFIRA A NOSSA GRADE DE HORÁRIOS</button>
							<div class="tabela collapse" id="tabela">
								<div class="titulo">FUNCIONAMENTO DE SEGUNDA A SEXTA</div>
								<table>
									<tr class="topo">
										<td>AEROTOWN</td>
										<td>CEO</td>
										<td>VIVO</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>11:55</td>
									</tr>
									<tr>
										<td>12:00</td>
										<td>12:10</td>
										<td>12:15</td>										
									</tr>
									<tr>
										<td>12:20</td>
										<td>12:30</td>
										<td>12:35</td>										
									</tr>
									<tr>										
										<td>12:40</td>
										<td>12:50</td>
										<td>12:55</td>
									</tr>
									<tr>										
										<td>13:00</td>
										<td>13:10</td>
										<td>13:15</td>
									</tr>
									<tr>										
										<td>13:20</td>
										<td>13:30</td>
										<td>13:35</td>
									</tr>
									<tr>										
										<td>13:40</td>
										<td>13:50</td>
										<td>13:55</td>
									</tr>
									<tr>										
										<td>14:00</td>
										<td>14:50</td>
										<td>14:15</td>
									</tr>
									<tr>										
										<td>14:20</td>
										<td>14:30</td>
										<td>14:35</td>
									</tr>
									<tr>										
										<td>14:40</td>
										<td>14:50</td>
										<td>14:55</td>
									</tr>
								</table>
								* Os horários poderão sofrer alterações de acordo com as condições de trânsito.<br>
								* Não haverá tempo de espera nos pontos dos prédios comerciais.<br>
								* Embarque e desembarque somente nos pontos.
							</div>
						</div>
					</div>
					<!-- 
					<div class="col-xs-12 col-sm-6">
						<div class="bloco dog">
							<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-dog.png" alt="" class="ico"><br>
							<b>DOG FRIENDLY</b><br>
							O acesso de cães ao shopping é permitido de acordo com os critérios abaixo:<br>
							<br>
							Cães de pequeno e médio porte, de até 60 cm de altura, são autorizados nos corredores do shopping
							É obrigatória a utilização de guia e coleira nas dependências do estabelecimento
							Cães não amigáveis, mesmo que de pequeno porte, devem utilizar focinheira
							Não é permitida a circulação nas áreas destinadas à alimentação e à lazer 
							A entrada em lojas está condicionada às exigências do lojista, que pode ou não permitir o acesso
						</div>
					</div>
					-->
					<div class="col-xs-12 col-sm-6">
						<div class="bloco trocadores">
							<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-achados.png" alt=""><br>
							<b>ACHADOS E PERDIDOS</b><br>								
							Os objetos encontrados são mantidos por 6 meses.<br>
							Localização: Administração.<br>
							Horário de Funcionamento:<br>
							Segunda a sexta, das 10h às 18h
						</div>
						<!-- 
						<div class="bloco trocadores">
							<b>
								<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-baby.png" alt=""><br>
								TROCADORES PORTÁTEIS<br>
								Localizado no interior dos Banheiros Masculino e Feminino <br>
								(Hangar Food Park)
							</b>
						</div>
						-->
					</div>
<!--
<div class="item">
<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-renda.png" alt="">
<div class="texto">
Renda média familiar
de 14.000,00 por mês
</div>
</div>
<div class="item">
<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-faturamento.png" alt="">
<div class="texto">
Recorde de faturamento
nas maiores redes de
comércio do estado
</div>
</div>
<div class="item">
<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-consumo.png" alt="">
<div class="texto">
Mais de R$ 12 bilhões
de consumo anual
na região
</div>
</div>
-->
</div>
</div>			
</div>
<!--
<div class="fundo-escuro">
<div class="container">
<div class="row">
<div class="item">
<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-publico.png" alt="">
<div class="texto">
Público de 800 mil
consumidores a uma
distância de até 15 minutos
</div>
</div>
<div class="item">
<img src="<?php bloginfo('template_url') ?>/img/aerotown/ico-veiculos.png" alt="">
<div class="texto">
mais de 160.000
veículos/dia na sua porta
</div>
</div>
</div>
</div>
</div>
-->
</section>
<section class="mapa-aerotown">
	<img src="<?php bloginfo('template_url') ?>/img/aerotown/mapa.jpg" alt="">
</section>
<!-- <section class="fotos">
	<img class="half" src="<?php bloginfo('template_url') ?>/img/aerotown/fotos/1.jpg" alt="">
	<img class="half" src="<?php bloginfo('template_url') ?>/img/aerotown/fotos/2.jpg" alt="">
	<img class="quarter" src="<?php bloginfo('template_url') ?>/img/aerotown/fotos/3.jpg" alt="">
	<img class="quarter" src="<?php bloginfo('template_url') ?>/img/aerotown/fotos/4.jpg" alt="">
	<img class="half" src="<?php bloginfo('template_url') ?>/img/aerotown/fotos/5.jpg" alt="">
</section> -->
</main>
<?php get_footer(); ?>
<script> $(".nav-aerotown").addClass("pag-ativa"); </script>