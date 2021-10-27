<?php get_header(); ?>
<style>	
	.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
		/*min-height: 300px !important;*/
		height: auto !important;
		padding-bottom: 42% !important;
	}
</style>
<section class="banner-topo home-banner" style="padding: 0!important;">
	<div class="">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				date_default_timezone_set("America/Sao_Paulo");
				$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
				$argsBanner = array(
					'post_type' => 'slide',
					'order' => 'DESC',
					'orderby' => 'date',
					'posts_per_page' => -1,
					'tax_query' => array(
						array( 'taxonomy' => 'slide', 'field'    => 'slug', 'terms'    => 'home', ),
					),
					'meta_query' => array(
						'relation' => 'OR',
						array( 'key' => 'validade', 'compare' => 'NOT EXISTS', 'value' => '' ),
						array( 'key' => 'validade', 'value' => $timeCurrent, 'compare' => '>', 'type' => 'DATE' ),
						array( 'key' => 'validade', 'value' => '', 'compare' => '=', ),
						
					)
				);
				$querySlide = new WP_Query( $argsBanner );
				if ($querySlide->have_posts()) {
					?>
					<div class="market-slide swiper-content">
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
						<div class="swiper-wrapper">
							<?php
							while ($querySlide->have_posts()) {
								$querySlide->the_post();
								if (get_field('imagem')) {
									$imageCurrent = get_field('imagem');
									?>
									<div class="swiper-slide">
										<?php 
										if (get_field('video')) { ?><a class="owl-video" href="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?rel=0&amp;showinfo=0&autoplay=1"></a><?php }
										if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><?php }
										?>
										<div class="hidden-xs banner-slide-single" style="background-image: url('<?php echo $imageCurrent['url']; ?>'); height: auto !important; padding-bottom: 42% !important;"></div>
										<img class="visible-xs banner-slide-single" src="<?php echo $imageCurrent['url']; ?>" style="height: auto!important;"/>										
										<?php 
										if (get_field('link')) { ?></a><?php }
										?>
									</div>
									<?php
								}
							}
							?>
						</div>
					</div>
				<?php 
				}
				?>
			</div>
		</div>
	</div>
</section>
<main class="home">
	
	<section class="conceito servicos bg-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="titulo">SERVIÇOS<br>
						<span>AEROTOWN</span>
					</div>
					<br>
					<div class="texto"></div>
					<div class="row">
    
						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<img src="/wp-content/themes/aerotown/img/servicos/detran.jpg" style="width:100%">
							</div>    
						</div>
						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<img src="/wp-content/themes/aerotown/img/servicos/sine.jpg" style="width:100%">
							</div>
						</div>
						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<img src="/wp-content/themes/aerotown/img/servicos/loterias.jpg" style="width:100%">
							</div>
						</div>    
					</div>
					<br>
					<a href="http://www.aerotown.com.br/servicos/">
						<button class="btn saiba-mais">
							Saiba mais
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>
		
	<section class="conceito">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="titulo">
						O CONCEITO<br>
						<span>POLO DE MODA</span>
					</div>
					<br>
					<div class="texto">
						Agora na <strong>barra da tijuca</strong>, conheça o <strong>aerotown polo de moda</strong>. 
						Com uma localização super privilegiada na Av. Ayrton Senna este 
						empreendimento já está pronto para decolar.<br>
						<strong>Apertem os cintos.</strong>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/9j6fo9Kd-DQ?autoplay=0&rel=0&showinfo=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/JTFWF2kBjJU?autoplay=0&rel=0&showinfo=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<br>
					<a href="<?php echo get_page_link(7); ?>">
						<button class="btn saiba-mais">
							Saiba mais
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="lojas">
		<div class="grid-lojas">
			<div class="loja">
				<a href="<?php echo get_page_link(11); ?>">
					<img src="<?php bloginfo('template_url') ?>/img/home/lojas/hangar.jpg" alt="" class="fundo">
					<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/hangar.png" alt="" class="logo">
				</a>
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/aerotown.jpg" alt="" class="fundo">				
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/papelex.jpg" alt="" class="fundo">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/papelex.png" alt="" class="logo">
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/teciplast.jpg" alt="" class="fundo">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/teciplast.png" alt="" class="logo">
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/venancio.jpg" alt="" class="fundo">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/venancio.png" alt="" class="logo">
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/detran.jpg" alt="" class="fundo">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/detran.png" alt="" class="logo">
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/aerotown.jpg" alt="" class="fundo">
			</div>
			<div class="loja">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/madero.jpg" alt="" class="fundo">
				<img src="<?php bloginfo('template_url') ?>/img/home/lojas/logos/madero.png" alt="" class="logo">
			</div>
		</div>
		<div class="conheca">
			<a href="<?php echo get_page_link(9); ?>">
				<button class="btn">
					Conheça nossas lojas
				</button>
			</a>
		</div>
	</section>
	<section class="negocio">
		<div class="container">
			<div class="titulo">
				MUITO MAIS PARA<br>
				<span>SEU NEGÓCIO</span>
			</div>
			<div class="carrossel-features">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="wrap-texto">
							Acessibilidade universal 
							garantida em todo 
							o empreendimento.							
						</div>

						<div class="separador"></div>

						<div class="wrap-texto">
							Facilidade aos meios de transporte 
							como estação do brt- via parque e 
							parada de ônibus na frente 
							do empreendimento. 
						</div>

						<div class="separador"></div>

						<div class="wrap-texto">
							Amplo estacionamento 
							para clientes e funcionários 
							com cerca de 1000 vagas. 
						</div>
					</div>
					<div class="item">
						<div class="wrap-texto">
							Ampla área de alimentação e área de convivência e protegida de chuva.						
						</div>

						<div class="separador"></div>

						<div class="wrap-texto">
							<!-- Facilidade aos meios de transporte 
							como estação do brt- via parque e 
							parada de ônibus na frente 
							do empreendimento.  -->
						</div>

						<div class="separador"></div>
						
						<div class="wrap-texto">
							<!-- Amplo estacionamento 
							para clientes e funcionários 
							com cerca de 1000 vagas.  -->
						</div>
					</div>
				</div>
				<button class="muda-slide">
					<div class="icono-arrow1-left"></div>								
				</button>
			</div>
		</div>
	</section>
	<section class="gastronomia">
		<div class="chamada bg-1">
			<img src="<?php bloginfo('template_url') ?>/img/logo-hangar.png" alt="">
			<div class="linebreak"></div>
			<div class="titulo">
				ESPAÇO<br>
				<span>GASTRONÔMICO</span>
			</div>
			<div class="linebreak"></div>
			<a href="gastronomia">
				<button class="btn">
					Saiba mais
				</button>				
			</a>
		</div>
		<div class="imagem">
			<img src="<?php bloginfo('template_url') ?>/img/home/espaco-gastronomico.jpg" alt="">
		</div>
	</section>
	<section class="galeria">
		<div class="container">
			<div class="titulo">
				PRÓXIMOS<br>
				<span>EVENTOS</span>
			</div>
			<div class="slider">
				<?php
				date_default_timezone_set("America/Sao_Paulo");
				$timeCurrent = (string) strftime('%Y-%m-%d', strtotime('now'));
				$eventosList = array(
					'post_type' => 'eventos',
					'posts_per_page' => 3,
					'meta_query' => array(
						'relation' => 'AND',
						array(
							'key' => 'data',
							'value' => $timeCurrent,
							'compare' => '>=',
							'type' => 'DATE'
						)
					),
					'orderby' => 'meta_value',
					'order' => 'ASC',
					'meta_key' => 'data'
				);
				$wpEvents = new WP_Query($eventosList);
				$dayCurrent = 0;
				if ($wpEvents->have_posts()) {
					while ($wpEvents->have_posts()) {
						$wpEvents->the_post();
						$dayNumber = (int) strftime('%w', strtotime(get_field('data')));
						$monthNumber = (int) strftime('%m', strtotime(get_field('data')));
						?>
						<div class="item col-md-4" id="content">
							<div class="content">
								<?php
								if (has_post_thumbnail()) {
									?>
									<img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" alt="" class="img-fluid img-responsive">
									<?php 
								}
								?>
								<div class="content-text">
									<div class="row">
										<div class="col-xs-7 text-left">
											<?php
											if (get_field('pretitulo')) { ?><div class="content-ref"><?php echo get_field('pretitulo') ; ?></div><?php }
											if (get_the_title()) { ?><h3 class="content-title"><?php echo get_the_title(); ?></h3><?php }
											if (get_field('subtitulo')) { ?><p class="subtitulo"><?php echo get_field('participante') ; ?></p><?php }
											?>
										</div>
										<div class="col-xs-5">
											<?php if (get_field('data')) { ?><div class="content-store-info content-store-date"><?php if (strftime('%Y-%m-%d', strtotime(get_field('data'))) == $timeCurrent) { echo 'HOJE'; } else { echo strftime('%d/%m', strtotime(get_field('data'))); } ?></div><?php } ?>
											<?php if (get_field('data')) { ?><div class="content-store-info"><?php if (nameDayWeek($dayNumber) !== false) { echo nameDayWeek($dayNumber); } ?></div><?php } ?>
											<div class="content-store-info">às <?php echo strftime('%H:%M', strtotime(get_field('data'))); ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
				}
				else {
					?><p>Não há eventos disponíveis no momento.</p><?php
				}
				?>
			</div>
		</div>
	</section>
	<section class="mapa">
		<?php echo get_template_part('templates/part', 'map'); ?>
	</section>
</main>


<?php 
date_default_timezone_set("America/Sao_Paulo");
$timeCurrent = (string) strftime('%Y-%m-%d %H:%M:%S', strtotime('now'));
$argsPopup = array(
	'post_type' => 'popup',
	'order' => 'DESC',
	'orderby' => 'date',
	'posts_per_page' => 1,
	'meta_query' => array(
		'relation' => 'OR',
		array( 'key' => 'validade', 'compare' => 'NOT EXISTS', 'value' => '' ),
		array( 'key' => 'validade', 'value' => $timeCurrent, 'compare' => '>', 'type' => 'DATE' ),
		array( 'key' => 'validade', 'value' => '', 'compare' => '=', ),
		
	)
);
$popupQuery = new WP_Query( $argsPopup );
if ($popupQuery->have_posts()) {
	while ($popupQuery->have_posts()) {
		$popupQuery->the_post();
		?>
		<div class="modal fade modal-destaque" id="destaque" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
					<div class="modal-body">
						<?php if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><?php } ?>
						<img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" width="100%" alt="" />
						<?php if (get_field('link')) { ?></a><?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
	}
}
?>


<div class="modal fade modal-regulamentos" id="regulamentos" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
			<div class="modal-body">
				<strong>REGULAMENTO:</strong><br>
				<br>
				Promoção válida por tempo indeterminado, a partir de 07 e agosto de 2019, no estacionamento do Aerotown. A promoção poderá ser cancelada pelo Shopping, ao seu exclusivo critério e a qualquer tempo.<br>
				<br>
				Poderão participar todos os clientes do Aerotown, que ingressarem no Shopping a partir das 12h00min (meio dia) e saírem até às 14h00min (quatorze horas) do mesmo dia, exceto sábados, domingos e feriados. <br>
				<br>
				O cliente deverá efetuar a compra na área de alimentação e apresentar a nota fiscal ou nota de pedido e o ticket de entrada no guichê de estacionamento que valida a liberação do Detran, localizado no shopping.<br>
				<br>
				O cliente precisa validar o ticket no momento da saída, se esta ocorrer até às 14h00min (quatorze horas). Após esse horário o ticket deverá ser validado e o pagamento realizado normalmente, conforme valor vigente.<br>
				<br>
				Para fins de conferência do horário de entrada do veículo no estacionamento do Shopping, será admitida somente a informação constante da máquina registradora situada no balcão de estacionamento.
			</div>
		</div>
	</div>
</div>
<script>$(".nav-home").addClass("pag-ativa");</script>	
<?php 
if ($_GET['a'] == 'b') {
	get_template_part('templates/home', 'roleta');
}
get_footer(); ?>