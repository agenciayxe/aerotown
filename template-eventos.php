<?php 
/*
Template Name: Eventos
*/
get_header();
?>
<main class="eventos">
	<section class="banner-topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="slider">
						<div class="chamada">							
							<span>Eventos</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="eventos">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="slider">
						<?php
						date_default_timezone_set("America/Sao_Paulo");
						$timeCurrent = (string) strftime('%Y-%m-%d', strtotime('now'));
						$eventosList = array(
							'post_type' => 'eventos',
							'posts_per_page' => -1,
							'meta_query' => array(
								'relation' => 'AND',
								array(
									'key' => 'data',
									'value' => $timeCurrent,
									'compare' => '>=',
									'type' => 'DATE'
								)
							),
							'orderby' => 'meta_value',
							'order' => 'ASC',
							'meta_key' => 'data'
						);
						$wpEvents = new WP_Query($eventosList);
						$dayCurrent = 0;
						if ($wpEvents->have_posts()) {
							while ($wpEvents->have_posts()) {
								$wpEvents->the_post();
								$dayNumber = (int) strftime('%w', strtotime(get_field('data')));
								$monthNumber = (int) strftime('%m', strtotime(get_field('data')));
								?>
								<div class="item col-md-4" id="content">
									<div class="content">
										<?php
										if (has_post_thumbnail()) {
											?>
											<img src="<?php echo get_the_post_thumbnail_url($post, 'medium_large'); ?>" alt="" class="img-fluid img-responsive">
											<?php 
										}
										?>
										<div class="content-text">
											<div class="row">
												<div class="col-xs-7">
													<?php
													if (get_field('pretitulo')) { ?><div class="content-ref"><?php echo get_field('pretitulo') ; ?></div><?php }
													if (get_the_title()) { ?><h3 class="content-title"><?php echo get_the_title(); ?></h3><?php }
													if (get_field('subtitulo')) { ?><p class="subtitulo"><?php echo get_field('participante') ; ?></p><?php }
													?>
												</div>
												<div class="col-xs-5">
													<?php if (get_field('data')) { ?><div class="content-store-info content-store-date"><?php if (strftime('%Y-%m-%d', strtotime(get_field('data'))) == $timeCurrent) { echo 'HOJE'; } else { echo strftime('%d/%m', strtotime(get_field('data'))); } ?></div><?php } ?>
													<?php if (get_field('data')) { ?><div class="content-store-info"><?php if (nameDayWeek($dayNumber) !== false) { echo nameDayWeek($dayNumber); } ?></div><?php } ?>
													<div class="content-store-info">às <?php echo strftime('%H:%M', strtotime(get_field('data'))); ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
						else {
							?><p>Não há eventos disponíveis no momento.</p><?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script>$(".nav-eventos").addClass("pag-ativa");</script>