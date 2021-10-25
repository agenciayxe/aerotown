<?php 
/*
Template Name: Lojas
*/
get_header();
?>
<main class="lojas">
	<section class="banner-topo">
		<?php echo get_template_part('templates/part', 'title'); ?>
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
	<section class="lojas">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<div class="busca">
						<input type="text" class="busca-lojas" placeholder="Pesquisar">
					</div>
					<div class="categorias hidden-xs">
						<div class="titulo">
							CATEGORIAS
						</div>
						<div class="lista-categorias">
							<div class="item ativo">Todas as categorias</div>
							<div class="item">Moda Feminina</div>
							<div class="item">Moda Masculina</div>
							<div class="item">Moda Infantil</div>
							<div class="item">Moda Plus Size</div>
							<div class="item">Lingerie</div>
							<div class="item">Roupas de Dormir</div>
							<div class="item">Aluguel de Roupas</div>
							<div class="item">Calçados</div>
							<div class="item">Calçados Femininos</div>
							<div class="item">Calçados Infantis</div>
							<div class="item">Fitness</div>
							<div class="item">Tecidos/Decorações</div>
							<div class="item">Bolsas</div>
							<div class="item">Acessórios</div>
							<div class="item">Bijuterias</div>
							<div class="item">Folheados a Ouro</div>
							<div class="item">Joias</div>
							<div class="item">Cosméticos</div>
							<div class="item">Farmácia</div>
							<div class="item">Colégio</div>
							<div class="item">Perfumaria</div>
							<div class="item">Ótica</div>
							<div class="item">Papelaria</div>
							<div class="item">Informática</div>
							<div class="item">Empório</div>
							<div class="item">Adega</div>
							<div class="item">Barbearia</div>
							<div class="item">Produtos Cães e Gatos</div>
							<div class="item">Artigos Para Festas</div>
							<div class="item">Outros</div>
							<div class="item maior">Alimentação</div>
							<div class="item">Hamburgueria</div>
							<div class="item">Massas</div>
							<div class="item">Chopp</div>
							<div class="item">Churrasco</div>
							<div class="item">Mate</div>
							<div class="item">Empada</div>
							<div class="item">Pizza</div>
							<div class="item">Suco</div>
							<div class="item">Pastel</div>
							<div class="item">Drinks</div>
							<div class="item">Doceria</div>
						</div>
					</div>
					<div class="categorias visible-xs">
						<button class="titulo btn" data-toggle="collapse" data-target="#categorias-collapse">
							CATEGORIAS <i class="fa fa-caret-down"></i>
						</button>
						<div class="lista-categorias collapse" id="categorias-collapse">
							<div class="item ativo">Todas as categorias</div>
							<div class="item">Moda Feminina</div>
							<div class="item">Moda Masculina</div>
							<div class="item">Moda Infantil</div>
							<div class="item">Moda Plus Size</div>
							<div class="item">Lingerie</div>
							<div class="item">Roupas de Dormir</div>
							<div class="item">Aluguel de Roupas</div>
							<div class="item">Calçados</div>
							<div class="item">Calçados Femininos</div>
							<div class="item">Calçados Infantis</div>
							<div class="item">Fitness</div>
							<div class="item">Tecidos/Decorações</div>
							<div class="item">Bolsas</div>
							<div class="item">Acessórios</div>
							<div class="item">Bijuterias</div>
							<div class="item">Folheados a Ouro</div>
							<div class="item">Joias</div>
							<div class="item">Cosméticos</div>
							<div class="item">Farmácia</div>
							<div class="item">Colégio</div>
							<div class="item">Perfumaria</div>
							<div class="item">Ótica</div>
							<div class="item">Papelaria</div>
							<div class="item">Informática</div>
							<div class="item">Empório</div>
							<div class="item">Adega</div>
							<div class="item">Barbearia</div>
							<div class="item">Produtos Cães e Gatos</div>
							<div class="item">Artigos Para Festas</div>
							<div class="item">Outros</div>
							<div class="item maior">Alimentação</div>
							<div class="item">Hamburgueria</div>
							<div class="item">Massas</div>
							<div class="item">Chopp</div>
							<div class="item">Churrasco</div>
							<div class="item">Mate</div>
							<div class="item">Empada</div>
							<div class="item">Pizza</div>
							<div class="item">Suco</div>
							<div class="item">Pastel</div>
							<div class="item">Drinks</div>
							<div class="item">Doceria</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div id="lista-lojas">
						<ul class="list">
							<?php include('lista-lojas.php'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script>$(".nav-lojas").addClass("pag-ativa");</script>