<?php get_header(); ?>
<section class="banner-topo home-banner">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php 
				$argsBanner = array(
					'post_type' => 'slide',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'slide',
							'field'    => 'slug',
							'terms'    => 'home',
						),
					),
					'orderby' => 'title',
					'order' => 'ASC'
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
									<div class="swiper-slide"><div class="banner-slide-single" style="background-image: url('<?php echo $imageCurrent['url']; ?>');"></div></div>
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
						<div class="col-md-offset-2 col-md-8">
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
		<div class="chamada">
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
	<section class="instagram">
		<div class="container">
			<div class="titulo">
				AEROTOWN<br>
				<span>NO INSTAGRAM</span>
			</div>
			<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/5c71383100f657a38f4c7a9811581949.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
		</div>
	</section>
	<section class="galeria">
		<div class="container">
			<div class="titulo">
				GALERIA<br>
				<span>DE EVENTOS</span>
			</div>
			<div class="carrossel-galeria">
				<div class="owl-carousel owl-theme">
					<?php for ($i=1; $i <= 20 ; $i++) { ?>
						<div class="item">
							<a href="<?php bloginfo('template_url') ?>/img/home/galeria/<?=$i?>.jpg" data-lightbox="galeria">
								<img src="<?php bloginfo('template_url') ?>/img/home/galeria/<?=$i?>.jpg" alt="">
							</a>
						</div>
					<?php } ?>
				</div>
				<button class="muda-slide">
					<div class="icono-arrow1-left"></div>								
				</button>
			</div>
		</div>
	</section>
	<section class="mapa">
		<?php echo get_template_part('templates/part', 'map'); ?>
	</section>
</main>

<div class="modal fade modal-promocao" id="promocao" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
			<div class="modal-body">
				<div class="owl-carousel owl-theme">
					<img src="<?php bloginfo('template_url') ?>/img/home/eventos/popup-pais-1.jpg" alt="">					
					<img src="<?php bloginfo('template_url') ?>/img/home/eventos/popup-pais-2.jpg" alt="">					
					<img src="<?php bloginfo('template_url') ?>/img/home/eventos/popup-pais-3.jpg" alt="">					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-eventos" id="eventos" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
			<div class="modal-body">
				<!-- <h2 class="text-center">
					PRÓXIMOS EVENTOS
				</h2>
				<br> -->
				<img src="<?php bloginfo('template_url') ?>/img/home/eventos/popup-duelo.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-destaque" id="destaque" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
			<div class="modal-body">
				<img src="<?php bloginfo('template_url') ?>/img/home/black-banner-duelo-aerotown.jpg" alt="">
			</div>
		</div>
	</div>
</div>
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
<?php get_footer(); ?>