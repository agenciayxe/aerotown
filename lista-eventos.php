<?php 
$results = $wpdb->get_results("SELECT * FROM ae_events");
if ($results) {
	foreach ($results as $singleEventos) {
		// Sua string:
		$string = $singleEventos->instagram;

		// Regex (leia o final para entender!):
		$regrex = '/\/(.*?)\//';

		// Usa o REGEX:
		preg_match_all($regrex, $string, $resultado);
		$instaUser = array_slice($resultado[1], -1);
		?>
		<article class="evento col-md-6">
            <div class="box-evento">
            	<div class="row">
            		<div class="col-md-5">
            			<h2 class="text-center evento-day">12</h2>
            			<h3 class="text-center evento-month">Novembro</h3>
            		</div>
            		<div class="col-md-7">
            			<div class="titulo">
		            		<div class="categoria"><?php echo $singleEventos->categoria; ?></div>
		                	<h3><?php echo $singleEventos->evento; ?></h3>
		                </div>
		                <div class="box">
		                	<ul>
		                		<?php 
		                		if ($singleEventos->numero) {
			                		?>
			                		<li>
			                			<i class="fa fa-map-marker"></i> <?php echo $singleEventos->numero; ?>
			                		</li>
			                		<?php
		                		}
		                		if ($singleEventos->instagram) {
			                		?>
			                		<li>
										<a href="<?php echo $singleEventos->instagram; ?>" class="social" target="_blank">
			                				<i class="fa fa-instagram"></i> @<?php echo $instaUser[0]; ?>
										</a>
			                		</li>
			                		<?php 
		                		}
								if ($singleEventos->whatsapp && $singleEventos->telefone) {
									?>
		        					<li>
										<a href="https://api.whatsapp.com/send?phone=+55<?php echo preg_replace("/[^0-9]/", "", $singleEventos->telefone); ?>" target="_blank">
											<i class="fa fa-whatsapp"></i>
											<?php echo $singleEventos->telefone; ?>
										</a>
		            				</li>
									<?php
								}
								else if ($singleEventos->telefone) {
		            				?>
		            				<li>
		            					<i class="fa fa-phone"></i> 
		            					<?php echo $singleEventos->telefone; ?>
		            				</li>
		            				<?php
								}
								?>
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