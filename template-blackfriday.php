<?php 
/*
Template Name: Blackfriday
*/
get_header('blackfriday');
?>
<main class="content-blackfriday home-banner">
	<div class="img-shadow">
		<img src="<?php bloginfo('template_url'); ?>/blackfriday/sombra.png" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-blackfriday my-4">Se liga nas ofertas!</h3>
			</div>
		</div>
		<div class="card-columns">
			<?php 
			$contentProducts = $wpdb->get_results("SELECT * FROM ae_products ORDER BY rand()");
			foreach ($contentProducts as $singleProduct) {
				$idStore = $singleProduct->store_id;
				$contentStore = ($singleProduct->type == 'gastronomy') ? $wpdb->get_results("SELECT * FROM ae_gastronomy WHERE id='$idStore'") : $wpdb->get_results("SELECT * FROM ae_stores WHERE id='$idStore'");
				
				$string = $contentStore[0]->instagram;
				$instaUser = ($string) ? preg_replace("%@%", '', $string) : '';
				$priceDescription = ($singleProduct->starting) ? 'A partir de ' : 'Por:';
				?>
				<div class="card" id="content">
					<div class="content">
						<img src="<?php bloginfo('template_url') ?>/blackfriday/products/<?php echo $singleProduct->img; ?>" alt="" class="img-fluid">
						<div class="content-text">
							<div class="row">
								<div class="col-md-7">
									<?php
									if ($singleProduct->title) { ?><div class="content-ref"><?php echo $singleProduct->title; ?></div><?php }

									if ($singleProduct->name) { ?><h3 class="content-title"><?php echo $singleProduct->name; ?></h3><?php }
									?>
									<div class="content-price">
										<?php 
										if ($singleProduct->money && $singleProduct->price) {
											?>
											<div class="content-price-regular">Cartão: R$ <?php echo number_format($singleProduct->price, 2, ',', '.'); ?></div>
											<div class="content-price-promotion">Dinheiro: R$ <?php echo number_format($singleProduct->money, 2, ',', '.'); ?></div>
											<?php 
										}
										else if ($singleProduct->price && $singleProduct->price_promotion) {
											?>
											<div class="content-price-regular">DE: <del>R$ <?php echo number_format($singleProduct->price, 2, ',', '.'); ?></del></div>
											<div class="content-price-promotion"><?php echo $priceDescription; ?> R$ <?php echo number_format($singleProduct->price_promotion, 2, ',', '.'); ?></div>
											<?php 
										}
										else if ($singleProduct->price) {
											?>
											<div class="content-price-promotion"><?php echo $priceDescription; ?> R$ <?php echo number_format($singleProduct->price, 2, ',', '.'); ?></div>
											<?php 
										}
										else if ($singleProduct->price_promotion) {
											?><div>A PARTIR de</div><div class="content-price-promotion">R$ <?php echo number_format($singleProduct->price_promotion, 2, ',', '.'); ?></div><?php
										}
										?>
									</div>
								</div>
								<div class="col-md-5">
								<div class="content-store-info">Loja - <?php echo $contentStore[0]->prefixo . $contentStore[0]->numero; ?></div>
									<div class="content-store-title"><?php echo $contentStore[0]->loja; ?></div>
									<?php 
									if ($contentStore[0]->instagram) {
										?>
										<a href="https://www.instagram.com/<?php echo $instaUser; ?>" target="_blank">
											<div class="content-store-instagram">
												<i class="fab fa-instagram fa-2x"></i>
											</div>
										</a>
										<?php 
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</main>
<?php get_footer('blackfriday'); ?>