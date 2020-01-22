<?php 
/*
Template Name: Gastronomia
*/
get_header();
?>
<main class="gastronomia">
	<section class="banner-topo gastronomia">
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
						            'terms'    => 'gastronomia',
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
							<span>GASTRONOMIA</span>
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
						<img src="<?php bloginfo('template_url') ?>/img/gastronomia/logo-hangar.png" alt="">
					</div>
					<br>
					<div class="texto">
						O <strong>Hangar Food Park</strong> é o espaço gastronômico do <strong>Aerotown</strong>.
						Sua montagem é toda feita com containers, dando um ar descontraído e moderno.
						O espaço receberá diversos públicos diariamente, dando ótima visibilidade para diferentes
						marcas e negócios, além de criar uma verdadeira experiência social no local.
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