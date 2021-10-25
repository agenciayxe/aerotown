<?php 
$results = $wpdb->get_results("SELECT * FROM ae_stores");
if ($results) {
	foreach ($results as $singleLojas) {
		?>
		<li class="loja">
			<div class="titulo">
				<div class="categoria"><?php echo $singleLojas->categoria; ?></div>
				<?php 
				echo $singleLojas->loja;
				if ($singleLojas->instagram) {
					?>
					<a href="<?php echo $singleLojas->instagram; ?>" class="social" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
					<?php
				}
				?>
			</div>
			<div class="num"><?php echo $singleLojas->numero; ?></div>
			<div class="telefone">
				<?php 
				if ($singleLojas->whatsapp) {
					?>
					<a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace("/[^0-9]/", "", $singleLojas->telefone); ?>" target="_blank">
						<i class="fa fa-whatsapp"></i>
						<?php echo $singleLojas->telefone; ?>
					</a>
					<?php
				}
				else {
					echo $singleLojas->telefone;
				}
				?>
			</div>
		</li>
		<?php 
	}
}
?>