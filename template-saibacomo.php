<?php 
/*
Template Name: Saiba como Ajudar
*/
get_header();
?>
<main class="promocoes">
	<section class="banner-topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="slider">
						<div class="chamada">
							<span>PEGUE UMA CARTINHA</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="promocoes">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							the_content();
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script>$(".nav-promocoes").addClass("pag-ativa");</script>