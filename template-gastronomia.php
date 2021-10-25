<?php 
/*
Template Name: Gastronomia
*/
get_header();
?>
<style>	
	.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
		/*min-height: 300px !important;*/
		height: auto !important;
		padding-bottom: 42%;
	}
	@media screen and (max-width: 991px) {
		.box-loja .col-xs-12.col-md-3 {
			height: auto!important;
		}
	}
	/*
	@media screen and (min-width: 1921px) {
		.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
			min-height: 800px !important;		
		}	
	}
	@media screen and (max-width: 1920px) and (min-width: 1441px) {
		.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
			min-height: 630px !important;		
		}	
	}
	@media screen and (max-width: 1440px) and (min-width: 1025px) {
		.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
			min-height: 520px !important;		
		}	
	}
	@media screen and (max-width: 1024px) and (min-width: 993px) {
		.home-banner.banner-page .row .swiper-content .swiper-wrapper .swiper-slide div.banner-slide-single {
			min-height: 420px !important;		
		}	
	}
	*/
</style>
<main class="gastronomia home-banner banner-page">
	<section class="banner-topo gastronomia" style="padding-top: 0">
		<div class="">
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
								'terms'    => 'gastronomia',
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
										<div class="swiper-slide">
											<?php 
											if (get_field('video')) { ?><a class="owl-video" href="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?rel=0&amp;showinfo=0&autoplay=1"></a><?php }
											if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><?php }
											?>
											<div class="hidden-xs banner-slide-single" style="background-image: url('<?php echo $imageCurrent['url']; ?>');"></div>
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
				<div class="container">
					<div class="chamada">							
						<span>GASTRONOMIA</span>
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
						<img src="<?php bloginfo('template_url') ?>/img/gastronomia/logo-hangar.png" alt="">
					</div>
					<br>
					<div class="texto">
						O <strong>Hangar Food Park</strong> é o espaço gastronômico do <strong>Aerotown</strong>.
						Sua montagem é toda feita com containers, dando um ar descontraído e moderno.
						O espaço recebe diversos públicos diariamente, dando ótima visibilidade para diferentes
						marcas e negócios, além de criar uma verdadeira experiência social no local.<br/>						
						<strong>Horário de funcionamento:</strong><br/>
						Segunda a Sábado: De 10:00 às 22:00<br/>
						Domingos e feriados 12:00 às 21:00
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="gastronomia">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div id="lista-gastronomia">
						<div class="list">
							<?php include('lista-gastronomia.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 
	<section class="fotos">
		<img class="half" src="<?php bloginfo('template_url') ?>/img/gastronomia/fotos/1.jpg" alt="">
		<img class="quarter" src="<?php bloginfo('template_url') ?>/img/gastronomia/fotos/2.jpg" alt="">
		<img class="quarter" src="<?php bloginfo('template_url') ?>/img/gastronomia/fotos/3.jpg" alt="">
		<img class="half" src="<?php bloginfo('template_url') ?>/img/gastronomia/fotos/4.jpg" alt="">
		<img class="half" src="<?php bloginfo('template_url') ?>/img/gastronomia/fotos/5.jpg" alt="">
	</section>
	-->
</main>
<?php get_footer(); ?>
<script>$(".nav-gastronomia").addClass("pag-ativa");</script>