<?php 
/*
Template Name: Galeria Restaurante
*/
get_header();
?>

<main class="lojas home-banner banner-page">
	<section class="banner-topo">
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
								'terms'    => 'lojas',
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
											<div class="banner-slide-single" style="background-image: url('<?php echo $imageCurrent['url']; ?>');"></div>
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
				<div class="col-xs-12">
					<div class="chamada">							
						<span>RESTAURANTES</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="loja" style="margin: 50px 0">	
		<div class="container">
			<?php $loja = $wpdb->get_row("SELECT * FROM ae_gastronomy WHERE id = {$_GET['loja']};"); ?>
			<?php 
				$slug = sanitize_title($loja->loja, $loja->id);
				$dir = get_template_directory()."/img/lojas/galeria/".$slug; 
				?>		
			<h2 id="<?php echo $slug; ?>"><?php echo $loja->loja; ?></h2>			
			<!--pre><?php print_r($results); ?></pre-->
			<?php if($loja->whatsapp): ?>
			<!--div class="well">
				Fale com a loja via WhatsApp pelo número: <?echo $loja->whatsapp; ?>.
			</div-->
			<?php endif; ?>			
			<div class="row">									
				<div class="col-xs-12 col-md-6">
					<?php $images = []; ?>
					<div class="home-banner banner-page">
						<div class="market-slide swiper-content">
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
							<div class="swiper-wrapper">
								<div class="swiper-slide">		
									<div class="banner-slide-single" style="background-image: url('/wp-content/themes/aerotown/img/gastronomia/logos/<?php echo $loja->img ?: 'blank.jpg'; ?>'); min-height: 500px"></div>
								</div>
								<?php if(file_exists($dir)): ?>
								<?php $images = array_diff(scandir($dir), array('.', '..')); ?>			
								<?php foreach ($images as $image) { ?>
								<div class="swiper-slide">								
									<div class="banner-slide-single" style="background-image: url('<?php echo "/wp-content/themes/aerotown/img/lojas/galeria/".$slug."/".$image; ?>'); min-height: 500px"></div>
								</div>
								<?php } ?>									
								<?php endif; ?>
							</div>
						</div>				
					</div>					
				</div>				
				
				<div class="col-xs-12<?php if(isset($images)) echo " col-md-4"; ?>">
					<?php if($loja->numero): ?>
					<h4>Localização</h4>
					<ul class="list-unstyled">						
						<li>
							<i class="fa fa-map-marker"></i> <?php echo $loja->prefixo . $loja->numero; ?>
						</li>	                	
					</ul>
					<?php endif; ?>
					<h4>Contatos</h4>
					<ul class="list-unstyled">	
						<?php
                		if ($loja->instagram) {
	                		?>
	                		<li>
								<a href="https://www.instagram.com/<?php echo $instaUser; ?>" class="social" target="_blank">
	                				<i class="fa fa-instagram"></i> <?php echo $loja->instagram; ?>
								</a>
	                		</li>
	                		<?php 
                		}
						if ($loja->whatsapp) {
							?>
        					<li>
								<a href="https://api.whatsapp.com/send?phone=+55<?php echo preg_replace("/[^0-9]/", "", $loja->whatsapp); ?>" target="_blank">
									<i class="fa fa-whatsapp"></i>
									<?php echo $loja->whatsapp; ?>
								</a>
            				</li>
							<?php
						}
						if ($loja->telefone) {
            				?>
            				<li>
								<a href="tel:+55<?php echo preg_replace("/[^0-9]/", "", $loja->telefone); ?>" target="_blank">
									<i class="fa fa-phone"></i> 
									<?php echo $loja->telefone; ?>
								</a>
            				</li>
            				<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>