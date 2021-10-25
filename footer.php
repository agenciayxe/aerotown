<footer>
    <section class="contato" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <h2 class="titulo">CONTATO</h2>
                    <div class="subtitulo">FALE CONOSCO</div>
                    <!--div class="separador"></div-->
                    <form id="form-contact">
                        <input type="text" name="name" id="name" class="input-contato" placeholder="Nome">
                        <input type="text" name="email" id="email" class="input-contato" placeholder="E-mail">
                        <input type="text" name="phone" id="phone" class="input-contato" placeholder="Telefone">
                        <textarea name="message" id="message" class="input-contato" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
                        <input type="hidden" name="action" value="contact">
                        <div class="text-center">
                            <input type="submit" class="button-contato btn inv">
                        </div>
                        <br />
                        <div id="response-contact"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="rodape" style="background: white">
        <div class="container">
            <div class="row">
                <div class="logo-footer">
                    <div class="col-xs-12">
                        <!--img src="<?php bloginfo('template_url') ?>/img/aerotown/logo-footer.png" alt="aerotown" style="max-width: 100px"-->
						<img src="<?php bloginfo('template_url') ?>/img/logo-animada.gif" alt="aerotown" style="max-width: 100px">
                    </div>
                    <div class="col-xs-12">
                        <h3>Redes Sociais</h3>
                        <div class="list-socials">
                            <div class="single-social">
                                <a href="https://facebook.com/aerotownbarra/" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
                            </div>
                            <div class="single-social">
                                <a href="https://www.instagram.com/aerotown_barra/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12 col-md-6">					
		                	<div class="texto">
        		                HORÁRIO DE FUNCIONAMENTO DE SEGUNDA A SÁBADO<br>
								<small>
									<strong>POLO DE MODA: De 9:00 às 20:00 / Estendido até às 21:00 (obrigatório)</strong> <br>
                                    <em>Horário estendido em dias de eventos e shows.</em><br>
                                    (sexta e Sábado) até às 22:00 - facultativo <br><br>
									<strong>HANGAR FOOD PARK: De 11:00 às 21:00 </strong><br>
                                    <em>Horário estendido em dias de evento até às 01:00 - (facultativo)</em><br>
								</small>
							</div>
						</div>						
						<div class="col-xs-12 col-md-6">
							<div class="texto">                        
								HORÁRIO DE FUNCIONAMENTO DOMINGOS E FERIADOS<br>
								<small>
									<strong>POLO DE MODA: das 13:00 às 19:00 / Estendido até às 21:00 (obrigatório) </strong><br>
                                    <em>Horário estendido em dias de evento até às 21:00 - (facultativo)</em><br><br>
									<strong>HANGAR FOOD PARK: de 12:00 às 21:00</strong><br>
                                    <em>Horário estendido em dias de evento até às 01:00 - (facultativo)</em>
								</small>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="texto">								
								<!--<div style="color: #790909;">
									FUNCIONAMENTO NATAL E ANO NOVO<br>
									(24 e 31 de Dezembro)<br>
									<small>
										AEROTOWN: das 10:00 às 16:00 <br>
									</small><br>
									<strong>Estaremos fechados nos dias 25/12 e 01/01.</strong>
								</div>
								<br><br>-->
								Circulação do público limitada a 40%<br>
                                Horário de funcionamento em respeito ao decreto n. 48.573 da prefeitura do Rio. <br>
								TEL: (21) 2070-0500<br>
								AVENIDA AYRTON SENNA N°2541<br>                            
								BARRA DA TIJUCA - RIO DE JANEIRO<br>
								CEP 22775-002
							</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    © <?php echo date('Y'); ?> AEROTOWN POWER CENTER. TODOS OS DIREITOS RESERVADOS.
                    <!-- <div class="logo-nova">
                        <a href="http://novastudio.com.br" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/logo-nova-studio.png" alt="Desenvolvido por Nova Studio - Comunicação e Propaganda" title="Desenvolvido por Nova Studio - Comunicação e Propaganda"></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/script-contact.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/vendor.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/list/list.js"></script> 
<script src="<?php bloginfo('template_url') ?>/assets/jquery.easeScroll/jquery.easeScroll.js"></script> 
<script src="<?php bloginfo('template_url') ?>/assets/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/main.js" type="text/javascript"></script>
<?php 
if (is_front_page()) {
    ?>
    <script>
        $(document).ready(function() {
            $('.modal-destaque').modal('show');
            $('.modal-promocao .owl-carousel').owlCarousel({
                autoplay: true, autoplayTimeout: 6000, loop: true, items: 1, margin: 0, dots: false, nav: true, mouseDrag: false
            });
        });
    </script>
    <?php
}
?>
</body>
</html>