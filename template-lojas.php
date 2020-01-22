<?php 
/*
Template Name: Lojas
*/
get_header();
?>
<main class="lojas">
	<section class="banner-topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="slider">
						<?php 
						$argsBanner = array(
							'post_type' => 'slide',
							'posts_per_page' => -1,
							'tax_query' => array(
						        array(
						            'taxonomy' => 'slide',
						            'field'    => 'slug',
						            'terms'    => 'lojas',
						        ),
						    ),
						    'orderby' => 'title',
						    'order' => 'ASC'
						);
						$querySlide = new WP_Query( $argsBanner );
						if ($querySlide->have_posts()) {
							?><div class="owl-carousel owl-theme"><?php
							while ($querySlide->have_posts()) {
								$querySlide->the_post();
								if (get_field('imagem')) {
									$imageCurrent = get_field('imagem');
									// var_dump($imageCurrent);
									?>
									<div class="item">
										<?php 
										if (get_field('video')) {
											?><a class="owl-video" href="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?rel=0&amp;showinfo=0&autoplay=1"></a><?php 
										}
										?>
										<img src="<?php echo $imageCurrent['url']; ?>" alt="">
									</div>
									<?php
								}
							}
							?></div><?php
						}
						?>
						<button class="muda-slide">
							<div class="icono-arrow1-left"></div>								
						</button>
						<div class="chamada">							
							<span>LOJAS</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="filtro-lojas lojas">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="busca col-md-6">
						<input type="text" id="busca-lojas" class="busca-lojas form-loja" placeholder="Pesquisar">
					</div>
					<div class="categorias col-md-6">
						<select name="" id="lista-categorias" class="form-loja">
							<optgroup label="Categorias">
								<option>Todas as categorias</option>
								<?php
								$arrCategories = array('Acessórios', 'Adega', 'Aluguel de Roupas', 'Artigos Para Festas', 'Barbearia', 'Bijuterias', 'Bolsas', 'Calçados', 'Calçados Femininos', 'Calçados Infantis', 'Colégio', 'Cosméticos', 'Empório', 'Farmácia', 'Fitness', 'Folheados a Ouro', 'Informática', 'Joias', 'Lingerie', 'Moda Feminina', 'Moda Infantil', 'Moda Masculina', 'Moda Plus Size', 'Ótica', 'Outros', 'Papelaria', 'Perfumaria', 'Produtos Cães e Gatos', 'Roupas de Dormir', 'Tecidos/Decorações');
								foreach ($arrCategories as $singleCategory) {
									?><option><?php echo $singleCategory; ?></option><?php
								}
								?>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="lojas">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div id="lista-lojas">
						<div class="list">
							<?php include('lista-lojas.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script>$(".nav-lojas").addClass("pag-ativa");</script>