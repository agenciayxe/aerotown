<?php 
$results = $wpdb->get_results("SELECT * FROM ae_gastronomy");
if ($results) {
	foreach ($results as $singleLojas) {
		// Sua string:
		$string = $singleLojas->instagram;

		// Regex (leia o final para entender!):
		$regrex = '/\/(.*?)\//';

		// Usa o REGEX:
		preg_match_all($regrex, $string, $resultado);
		$instaUser = array_slice($resultado[1], -1);
		?>
		<article class="loja col-md-3 col-xs-12">
            <div class="box-loja">
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
	                			<i class="fa fa-map-marker"></i> <?php echo $singleLojas->numero; ?>
	                		</li>
	                		<?php
                		}
                		if ($singleLojas->instagram) {
	                		?>
	                		<li>
								<a href="<?php echo $singleLojas->instagram; ?>" class="social" target="_blank">
	                				<i class="fa fa-instagram"></i> @<?php echo $instaUser[0]; ?>
								</a>
	                		</li>
	                		<?php 
                		}
						if ($singleLojas->whatsapp && $singleLojas->telefone) {
							?>
        					<li>
								<a href="https://api.whatsapp.com/send?phone=+55<?php echo preg_replace("/[^0-9]/", "", $singleLojas->telefone); ?>" target="_blank">
									<i class="fa fa-whatsapp"></i>
									<?php echo $singleLojas->telefone; ?>
								</a>
            				</li>
							<?php
						}
						else if ($singleLojas->telefone) {
            				?>
            				<li>
            					<i class="fa fa-phone"></i> 
            					<?php echo $singleLojas->telefone; ?>
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