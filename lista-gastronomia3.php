<?php 
$results = $wpdb->get_results("SELECT * FROM ae_gastronomy");
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
				<div style="text-align: center">					
					<img src="/wp-content/themes/aerotown/img/gastronomia/logos/<?php echo $singleLojas->img ?: 'blank.jpg'; ?>" style="width: 100%; margin-bottom: 10px"/>					
				</div>
				
            	<div class="titulo">
            		<div class="categoria"><?php echo $singleLojas->categoria; ?></div>
                	<h3 style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap"><?php echo $singleLojas->loja; ?></h3>
                </div>
                <div class="box">
                	<ul>
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
						
            				<li>
								<a <?php echo $singleLojas->cardapio ? 'href="/wp-content/themes/aerotown/img/gastronomia/cardapio/'.$singleLojas->cardapio.'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
								<img src="/wp-content/themes/aerotown/img/icone-cardapio2.png" style="width: 100%"/>
								</a>
            				</li>
            				
        					<!--li>
								<a <?php echo $singleLojas->whatsapp ? 'href="https://api.whatsapp.com/send?phone=+55'.preg_replace("/[^0-9]/", "", $singleLojas->whatsapp).'" target="_blank"' : 'href="javascript:void(0)" style="cursor: not-allowed; opacity: 0.5;"' ?>>
									<img src="/wp-content/themes/aerotown/img/icone-whatsapp.png" style="width: 100%"/>
								</a>
            				</li-->
                	</ul>
            	</div>
            </div>
        </article>
		<?php 
	}
}
?>