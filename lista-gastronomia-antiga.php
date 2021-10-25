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
		?>
		<article class="loja col-md-3 col-xs-12">
            <div class="box-loja">				
				<div style="text-align: center">					
					<img src="/wp-content/themes/aerotown/img/gastronomia/logos/<?php echo $singleLojas->img ?: 'blank.jpg'; ?>" style="width: 100%; margin-bottom: 10px"/>					
				</div>
				
            	<div class="titulo">
            		<div class="categoria"><?php echo $singleLojas->categoria; ?></div>
                	<h3><?php echo $singleLojas->loja; ?></h3>
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
                	</ul>
            	</div>
            </div>
        </article>
		<?php 
	}
}
?>