<style>
	@media screen and (max-width: 768px) {
		.box-loja .row {
			flex-direction: column;
		}
	}
	@media screen and (max-width: 993px) {
		.home-banner .row .col-xs-12 {
			height: auto!important;
		}
	}
	
	.home-banner .row .col-xs-12 {
		display: flex;
		align-items: center;
		align-self: center;
	}
	
	.box-loja {
		box-shadow: 0px 0px 5px #b7b7b7;
		/* background-color: #e8e8e8; */
		overflow: hidden;
		border-radius: 10px;
		margin: 7px 0px;
		border: none !important;
		min-height: 270px;
	}
	.box-loja .box,
	.box-loja .titulo {
		width: 100%;
	}
	
	.button {
		background: black;
		border-radius: 25px;
		color: white;
		display: block;
		padding: 5px;
		text-align: center;
	}
</style>
<?php 
$results = $wpdb->get_results("SELECT * FROM ae_stores where categoria not in ('diversao') AND status=1 ORDER BY numero ASC ");
if ($results) {
	foreach ($results as $index => $singleLojas) {
		// Sua string:
		$string = $singleLojas->instagram;
		// Regex (leia o final para entender!):
		// $regrex = '/\/(.*?)\//';

		// Usa o REGEX:
		// preg_match_all($regrex, $string, $resultado);
		// $instaUser = array_slice($resultado[1], -1);
		$instaUser = ($string) ? preg_replace("%@%", '', $string) : '';
		?>
		<article class="loja col-xs-12 col-md-6">
            <div class="box-loja">
				<div class="row" style="display: flex">
					<?php 
						$images = [];
						$loja = $singleLojas;
						$slug = sanitize_title($loja->loja, $loja->id);
						$dir = get_template_directory()."/img/lojas/galeria/".$slug; 
						if(file_exists($dir)) $images = array_diff(scandir($dir), array('.', '..'));
					?>										
					<div class="col-xs-12 col-xs-push-0 col-md-6 <?php if($index % 2 !== 0) echo "col-md-push-6"; ?>" style="display: flex; align-items: center; justify-content: center">
						<img src="/wp-content/themes/aerotown/img/<?php echo $singleLojas->img ? "lojas/logos/{$singleLojas->img}" : 'logo-animada.gif'; ?>" style="max-width: 100%" />
						<!--div class="home-banner banner-page">
							<div class="market-slide swiper-content">
								<div class="swiper-button-prev"></div>
								<div class="swiper-button-next"></div>
								<div class="swiper-wrapper">
									<div class="swiper-slide">								
										<div class="banner-slide-single" style="background-image: url('/wp-content/themes/aerotown/img/lojas/logos/<?php echo $singleLojas->img ?: 'blank.jpg'; ?>'); height: auto!important; padding-bottom: 60%!important; background-size: contain!important;"></div>
									</div>
									<?php foreach ($images as $image) { ?>
									<div class="swiper-slide">								
										<div class="banner-slide-single" style="background-image: url('<?php echo "/wp-content/themes/aerotown/img/lojas/galeria/".$slug."/".$image; ?>'); height: auto!important; padding-bottom: 60%!important"></div>
									</div>
									<?php } ?>									
								</div>
							</div>										
						</div-->		
					</div>			
					<div class="col-xs-12 col-xs-pull-0 col-md-6 <?php if($index % 2 !== 0) echo "col-md-pull-6"; ?>" style="display: flex; align-items: center; flex-direction: column;">
						<div class="titulo">
							<div class="categoria"><?php echo $singleLojas->categoria; ?></div>
							<h3><?php echo $singleLojas->loja; ?></h3>
						</div>
					<!--/div>
					<div class="col-xs-12 col-xs-pull-0 col-md-4 <?php if($index % 2 !== 0) echo "col-md-pull-4"; ?>" style="display: flex; align-items: center"-->
						<div class="box">
							<ul>
								<?php 
								if ($singleLojas->numero) {
									?>
									<li>
										<i class="fa fa-map-marker"></i> <?php echo $singleLojas->prefixo . $singleLojas->numero; ?>
									</li>
									<?php
								}
								if ($singleLojas->instagram) {
									?>
									<li>
										<a href="https://www.instagram.com/<?php echo $instaUser; ?>" class="social" target="_blank">
											<i class="fa fa-instagram"></i> <?php echo $singleLojas->instagram; ?>
										</a>
									</li>
									<?php 
								}
								if ($singleLojas->whatsapp) {
									?>
									<li>
										<a href="https://api.whatsapp.com/send?phone=+55<?php echo preg_replace("/[^0-9]/", "", $singleLojas->whatsapp); ?>" target="_blank">
											<i class="fa fa-whatsapp"></i>
											<?php echo $singleLojas->whatsapp; ?>
										</a>
									</li>
									<?php
								}
								if ($singleLojas->telefone) {
									?>
									<li>
										<a href="tel:+55<?php echo preg_replace("/[^0-9]/", "", $singleLojas->telefone); ?>" target="_blank">
											<i class="fa fa-phone"></i> 
											<?php echo $singleLojas->telefone; ?>
										</a>
									</li>
									<?php
								}
								?>
								<?php if(count($images)): ?>
								<li>
									<a class="button" href="https://www.aerotown.com.br/galeria-loja?loja=<?php echo $singleLojas->id ?>">Ver Mais</a>
								</li>
								<?php endif; ?>
							</ul>
						</div>	
					</div>
				</div>				
            </div>
        </article>
		<?php 
	}
}
?>