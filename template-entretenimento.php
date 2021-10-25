<?php 
/*
Template Name: Entretenimento
*/
get_header();
?>
<style>
	div.anchor {
		display: block;
		position: relative;
		top: -250px;
		visibility: hidden;
	}
	.nav-tabs {
		border: none;
		display: inline-block; 
	}
	.nav-tabs>li>a {
		border: none;
	}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
		border: none;
		border-bottom: 2px solid black;
	}
	.panel { 
		padding-bottom: 50px; 
		padding-top: 50px; 
		position: relative;
	}
	p.descricao {
		text-align: justify;
    	font-size: 115%;
	}
</style>

<main class="home-banner banner-page" data-spy="scroll">
	<section class="banner-topo gastronomia" style="padding-top: 0">
		<div class="">
			
				
				<div class="container">
					<div class="chamada">							
						<span>LAZER</span>
					</div>
				
			</div>
		</div>
	</section>
	
	<?php $lojas = $wpdb->get_results("SELECT * FROM ae_stores WHERE id in (75, 85, 89);"); ?>			

	<div class="container">
		<div id="tabs" style="text-align: center; padding-top: 50px">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
			<?php foreach($lojas as $loja): ?>
			<?php $slug = sanitize_title($loja->loja, $loja->id); ?>
			<li role="presentation" class="active"><a class="goto" href="#<?php echo $slug; ?>" aria-controls="big-jump" role="tab" data-toggle="tab"><?php echo $loja->loja; ?></a></li>
			<?php endforeach; ?>			
		  </ul>

		  <!-- Tab panes -->
		  <div class="content-panel">			
			  <?php foreach($lojas as $loja): ?>
			  	<div role="tabpanel" class="panel">
				<?php
					$slug = sanitize_title($loja->loja, $loja->id);
					$dir = get_template_directory()."/img/lojas/galeria/".$slug; 
				?>			
				<div class="anchor" id="<?php echo $slug; ?>"></div>
				<?php $lojas = $wpdb->get_row("SELECT * FROM ae_stores WHERE id = 75;"); ?>			
				<div class="row">
					
					<?php if(file_exists($dir)): ?>
					<?php $images = array_diff(scandir($dir), array('.', '..')); ?>			
					<div class="col-xs-12 col-md-6 col-md-push-6">
						<div class="home-banner banner-page">
							<div class="market-slide swiper-content">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-wrapper">
									<?php foreach ($images as $image) { ?>
									<div class="swiper-slide">								
										<div class="banner-slide-single" style="background-image: url('<?php echo "/wp-content/themes/aerotown/img/lojas/galeria/".$slug."/".$image; ?>'); background-position: center; background-size: cover; padding-bottom: 100%"></div>
									</div>
									<?php } ?>									
								</div>
							</div>				
						</div>					
					</div>
					<?php endif; ?>

					<div class="col-xs-12<?php if(isset($images)) echo " col-md-6 col-md-pull-6"; ?>">						
						<h2><?php echo $loja->loja; ?></h2>						
						<p class="descricao">
							<?php echo $loja->descricao; ?>
						</p>
						<div class="text-left">
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
										<a href="https://www.instagram.com/<?php echo $loja->instagram; ?>" class="social" target="_blank">
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
			  	</div>		
			  <?php endforeach; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
<script>
	$(function() {
		$('.goto').on('click', function() {
			location.hash = this.href.split('#')[1];
		});
		$('body').scrollspy({
			offset: 150,
			target: '#tabs' 
		});
	});
</script>