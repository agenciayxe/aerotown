<?php 
/*
Template Name: Serviços
*/
get_header();
?>
<main class="lojas home-banner banner-page">
	<section class="banner-topo">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php 
					$argsBanner = array(
						'post_type' => 'slide',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'slide',
								'field'    => 'slug',
								'terms'    => 'servicos',
							),
						),
						'orderby' => 'title',
						'order' => 'ASC'
					);
					$querySlide = new WP_Query( $argsBanner );
					if ($querySlide->have_posts()) {
						?>
						<div class="market-slide swiper-content">
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
							<div class="swiper-wrapper">
								<?php
								while ($querySlide->have_posts()) {
									$querySlide->the_post();
									if (get_field('imagem')) {
										$imageCurrent = get_field('imagem');
										?>
										<div class="swiper-slide">
											<?php 
											if (get_field('video')) { ?><a class="owl-video" href="https://www.youtube.com/embed/<?php echo get_field('video'); ?>?rel=0&amp;showinfo=0&autoplay=1"></a><?php }
											if (get_field('link')) { ?><a href="<?php echo get_field('link'); ?>" target="_blank"><?php }
											?>
											<div class="banner-slide-single" style="background-image: url('<?php echo $imageCurrent['url']; ?>'); background-size: contain"></div>
											<?php 
											if (get_field('link')) { ?></a><?php }
											?>
										</div>
										<?php
									}
								}
								?>
							</div>
						</div>
					<?php 
					}
					?>
				</div>
				<div class="col-xs-12">
					<div class="chamada">						
						<span>SERVIÇOS</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="conceito">
		<div class="container">
			<div class="row">
    			<div class="col-xs-12">
        			<h1>DETRAN RJ</h1>
				</div>
			</div>
			
			<div class="row">
    			<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
    				<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">
								<img src="/wp-content/themes/aerotown/img/servicos/detran-veiculos.jpg" style="width: 100%">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-12" style="height: 258px">
								<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
									<h3>VEÍCULOS</h3>
									<ul class="list-unstyled ">
										<li>Licenciamento Anual</li>
										<li>Transferência de Propriedade</li>
										<li>Compra e Venda</li>
										<li>2ª Via do CRV ou CRLV</li>
										<li>IPVA – Orientações</li>
										<li>1⁰ Licença Reg. Veículos</li>
										<li>Emplacamento</li>
									</ul>
								</div>
							</div>
						</div>
    				</div>
				</div>

    			<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
    				<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">
								<img src="/wp-content/themes/aerotown/img/servicos/detran-identificacao.jpg" style="width: 100%">
							</div>							
							<div class="col-xs-12 col-sm-6 col-md-12" style="height: 258px">
								<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
									<h3>UNIDADE IDENTIFICAÇÃO CIVIL</h3>
									<ul class="list-unstyled">
										<li>Agendamento de Carteira de Identidade</li>
										<li>1ª via da Identidade</li>
										<li>2ª via da Identidade</li>
										<li>Carteiras: Extravio / Roubo / Furto</li>
										<li>Solicitação de Atestado de Antecedentes</li>
										<li>Validar Atestado / Certidão / Ofício</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

    			<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
    				<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">								
    							<img src="/wp-content/themes/aerotown/img/servicos/detran-habilitacao.jpg" style="width: 100%">								
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-12" style="height: 258px">
								<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
									<h3>HABILITAÇÃO</h3>
									<ul class="list-unstyled">
										<li>Renovação da Habilitação</li>
										<li>1ª Habilitação</li>
										<li>Troca de Permissão para CNH</li>
										<li>2ª Via da CNH</li>
										<li>Mudança de Categoria</li>
										<li>Exames práticos Habilitação (Carro e Moto)</li>
									</ul>
								</div>
							</div>
						</div>
    				</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<h3>CENTRAL DE ATENDIMENTO DETRAN RJ - TELEFONES</h3>
					<p>O teleatendimento está funcionando apenas para casos urgentes, de segunda a sexta-feira, das 8h às 20h. (21) 3460-4040 / (21) 3460-4041 / (21) 3460-4042.</p>
				</div>
			</div>
			
			<div class="row">
    			<div class="col-xs-12">
        			<h1>SINE</h1>				
					<p style="text-align: justify">
						O SINE-RJ (SIstema Nacional de Emprego) é uma rede de atendimento ao cidadão gerada pelo governo federal, onde se pode solicitar o Seguro-Desemprego, obter primeira e segunda vias de carteira de identidade, obter intermediação de mão-de-obra (IMO), ou seja, se candidatar a vagas de emprego e além disso, os jovens participantes do programa Jovem Empreendedor ainda têm a oportunidade de obter renegociação de dívidas (Microcrédito).
					</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
					<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">								
    							<img src="/wp-content/themes/aerotown/img/servicos/sine-agendamento.jpg" style="width: 100%">								
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-12" style="height: 200px">
								<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
									<h3>AGENDAMENTO SEGURO DESEMPREGO</h3>
									<ul class="list-unstyled">
										<li>Através do telefone 158 ou <a href="http://site www.saaweb.mte.gov.br">http://site www.saaweb.mte.gov.br</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
					<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-12">								
    							<img src="/wp-content/themes/aerotown/img/servicos/sine-agendamento.jpg" style="width: 100%">								
							</div>
						
							<div class="col-xs-12 col-sm-6 col-md-12" style="height: 200px">
								<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
									<h3>INTERMEDIAÇÃO DA MÃO DE OBRA (Busca de Emprego)</h3>
									<ul class="list-unstyled">
										<li>Horário de atendimento 10h30 às 15h45</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>						
			</div>
			
			<div class="row">
				<div class="col-xs-12" style="margin-bottom: 25px">
					<div class="row">
						<div class="col-xs-12">
							<h1>EDITE</h1>									
						</div>

						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">								
										<img src="/wp-content/themes/aerotown/img/servicos/sine-edite.jpg" style="width: 100%">								
									</div>

									<div class="col-xs-12 col-sm-6 col-md-12" style="height: 200px">
										<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
											<h3>SERVIÇOS ONLINE</h3>
											<ul class="list-unstyled">
												<li>Carteira de Trabalho</li>
												<li>Seguro digital</li>
												<li>Balcão de Emprego</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12">
							<h3>EDITE - Observação:</h3>
							<p>Todos os serviços são  on-line, mas o cidadão precisa vir até a unidade para acessar os serviços. A marcação é feita pelo próprio.</p>
						</div>
					</div>
				</div>				
			</div>
			
			<div class="row">
				<div class="col-xs-12" style="margin-bottom: 25px">
					<div class="row">
						<div class="col-xs-12">
							<h1>LOTERIAS</h1>									
						</div>

						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">								
										<img src="/wp-content/themes/aerotown/img/servicos/loteria-bancarios.jpg" style=" min-height: 250px; min-width: 100%">								
									</div>

									<div class="col-xs-12 col-sm-6 col-md-12" style="height: 250px">
										<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
											<h3>SERVIÇOS BANCÁRIOS</h3>
											<ul class="list-unstyled">
												<li>Abertura de conta</li>
												<li>Abertura conta poupança</li>
												<li>Saque</li>
												<li>Depósito</li>
												<li>Pagamento de contas</li>
												<li>Pagamento Pis</li>
												<li>Pagamento Abono Salarial</li>
												<li>Caixa Tem (Pagamento do Auxílio Emergencial)</li>												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">								
										<img src="/wp-content/themes/aerotown/img/servicos/loteria-jogos.jpg" style="min-height: 250px; min-width: 100%">								
									</div>

									<div class="col-xs-12 col-sm-6 col-md-12" style="height: 250px">
										<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
											<h3>SERVIÇOS LOTÉRICOS</h3>
											<ul class="list-unstyled">
												<li>Jogos (Mega-Sena, Timemania, Loteca, Dia da Sorte, Lotogol, Dupla Sena, Lotofácil, Quina, Lotomania, Loterial Federal, Bolão).
</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
							
						<div class="col-xs-12 col-md-4" style="margin-bottom: 25px">
							<div style="border-radius: 16px !important;box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px !important;overflow: hidden;">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-12">								
										<img src="/wp-content/themes/aerotown/img/servicos/loteria-servicos.jpg" style="min-height: 250px; min-width: 100%">								
									</div>

									<div class="col-xs-12 col-sm-6 col-md-12" style="height: 250px">
										<div style="padding-left: 20px;padding-right: 20px;padding-bottom: 20px;">
											<h3>DEMAIS SERVIÇOS</h3>
											<ul class="list-unstyled">
												<li>Venda do Seguro Amparo da Caixa</li>
												<li>Cap Aluguel (Alugue seu imóvel sem fiador)</li>
												<li>Seguro Habitacional Mais Premiável</li>
												<li>Impressão de Boletos, IPVA, DPVAT, GRT</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>

				</div>				
			</div>
		</div>
	</section>
	
</main>
<?php get_footer(); ?>