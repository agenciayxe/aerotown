<style>
	.box-loja {
		box-shadow: 0px 0px 5px #b7b7b7;
		/* background-color: #e8e8e8; */
		overflow: hidden;
		border-radius: 10px;
		margin: 7px 0px;
		border: none !important;
	}
	.box-loja .box,
	.box-loja .titulo {
		width: 100%;
	}
	
	.btn-cardapio,
	.btn-galeria {
		background: #bbb;
		border-radius: 25px;		
		color: white;		
		padding: 10px 15px;
	}
	
	.btn-galeria {
		
	}
	
	@media screen and (max-width: 767px) {
		.text-center-xs {
			text-align: center;
		}
	}
</style>
<?php 
$results = $wpdb->get_results("SELECT * FROM ae_gastronomy WHERE status=1 order by loja");
if ($results) {
	foreach ($results as $singleLojas) {
		$string = $singleLojas->instagram;
		// Regex (leia o final para entender!):
		// $regrex = '/\/(.*?)\//';

		// Usa o REGEX:
		// preg_match_all($regrex, $string, $resultado);
		// $instaUser = array_slice($resultado[1], -1);
		$instaUser = ($string) ? preg_replace("%@%", '', $string) : '';
		$empty = 0;
		?>
		<article class="loja col-xs-12">
            <div class="box-loja">
				<div class="row">
					<div class="col-xs-12 col-md-3" style="display: flex; align-items: center; justify-content: center">
						<img src="/wp-content/themes/aerotown/img/<?php echo $singleLojas->img ? "gastronomia/logos/{$singleLojas->img}": 'logo-animada.gif'; ?>" style="max-width: 100%; margin-bottom: 10px"/>					
					</div>
					
					<div class="col-xs-12 col-md-9" style="display: flex; flex-direction: column;">						
            			<div class="titulo">
            				<div class="categoria"><?php echo $singleLojas->categoria; ?></div>
                			<h3 style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap"><?php echo $singleLojas->loja; ?></h3>
                		</div>
						<div class="box">
							<ul>
								<?php if($singleLojas->descricao): ?>
								<li>
									<?php echo $singleLojas->descricao; ?>
								</li>
								<?php endif; ?>
								<?php 
									if ($singleLojas->numero) { 
								?>
									<li>
										<i class="fa fa-map-marker"></i> <?php echo $singleLojas->prefixo . $singleLojas->numero; ?>
									</li>
								<?php 
									} else { 
										$empty++; 						
									}
									if ($singleLojas->instagram) { 
								?>
									<li style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
										<a href="https://www.instagram.com/<?php echo $instaUser; ?>" class="social" target="_blank">
											<i class="fa fa-instagram"></i> <?php echo $singleLojas->instagram; ?>
										</a>
									</li>
								<?php 
									} else {
										$empty++;
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
									} else {
										$empty++;
									}
									if ($singleLojas->telefone) {
								?>
									<li>
										<a href="tel:+55<?php echo preg_replace("/[^0-9]/", "", $singleLojas->telefone); ?>" target="_blank">
											<i class="fa fa-phone"></i> 
											<?php echo $singleLojas->telefone; ?>
										</a>
									</li>
								<?php } else {
										$empty++;
									} ?>

								<?php for($i = 0; $i < $empty; $i++) { ?><li>&nbsp;</li><?php } ?>
																
								<li class="text-center">
									<div class="row">
										<div class="col-xs-12 col-md-6" style="padding-top: 40px">
											<a class="btn-cardapio" <?php echo $singleLojas->cardapio ? 'href="/wp-content/themes/aerotown/img/gastronomia/cardapio/'.$singleLojas->cardapio.'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
												VER O CARDÁPIO
											</a>
										</div>
										<?php 
											$images = [];
											$loja = $singleLojas;
											$slug = sanitize_title($loja->loja, $loja->id);
											$dir = get_template_directory()."/img/lojas/galeria/".$slug; 
											if(file_exists($dir)) $images = array_diff(scandir($dir), array('.', '..'));
										?>			
										<div class="col-xs-12 col-md-6" style="padding-top: 40px">
											<a class="btn-galeria" <?php echo count($images) ? 'href="/galeria-restaurante?loja='.$singleLojas->id.'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
												VER A GALERIA
											</a>
										</div>
										
									</div>
								</li>

									<!--li>
										<a <?php echo $singleLojas->cardapio ? 'href="/wp-content/themes/aerotown/img/gastronomia/cardapio/'.$singleLojas->cardapio.'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
										<img src="/wp-content/themes/aerotown/img/icone-cardapio2.png" style="width: 100%"/>
										</a>
									</li-->

								<!--li>
									<a <?php echo $singleLojas->whatsapp ? 'href="https://api.whatsapp.com/send?phone=+55'.preg_replace("/[^0-9]/", "", $singleLojas->whatsapp).'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
										<img src="/wp-content/themes/aerotown/img/icone-whatsapp.png" style="width: 100%"/>
									</a>
								</li-->
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