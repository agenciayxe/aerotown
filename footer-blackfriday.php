<?php /* ?>
<section class="section section-signature">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center">
				<div class="title-signature">
					<h1>Cadastre-se para receber novidades do Aerotown</h1>
				</div>
			</div>
			<div class="col-md-6">
				<form class="form-area">
					<div class="row">
						<div class="col-12 col-lg-5">
							<input type="text" name="cmp2" placeholder="Nome: " format="" class="type_VC form-control input-field" maxlength="80">
						</div>
						<div class="col-12 col-lg-5">
							<input type="text" name="cmp1" placeholder="E-mail: " format="" class="type_EMAIL field-required form-control input-field" maxlength="80">
						</div>
						<div class="col-12 col-lg-2">
							<input type="submit" value="Enviar" original-value="Enviar" class="btn btn-default button-form dinSubmit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
*/ ?>
<script src="<?php bloginfo('template_url') ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/script-blackfriday.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/script-blackfriday-countdown.js"></script>
<script>

	countdown.setLabels(
	' <span>milissegundo</span>| <span>segundo</span>| <span>minuto</span>| <span>hora</span>| <span>dia</span>| <span>semana</span>| <span>mês</span>| <span>ano</span>| <span>década</span>| <span>século</span>| <span>milênio</span>',
	' <span>milissegundos</span>| <span>segundos</span>| <span>minutos</span>| <span>horas</span>| <span>dias</span>| <span>semanas</span>| <span>meses</span>| <span>anos</span>| <span>décadas</span>| <span>séculos</span>| <span>milênios</span>',
	' e ',
	' + ',
	'OFERTAS FINALIZADAS');
	var content = '';
	var dateFinish = new Date(2020, 7, 31, 23);
	var timerId =
  	countdown(
    	dateFinish,
	    function(ts) {
	    	content = ts.toHTML("div"); 
	    	if (ts.end > dateFinish) { document.getElementById("id-countdown").innerHTML="<h1>OFERTAS FINALIZADAS</h1>"; document.getElementById("title-blackfriday").innerHTML=""; }
	    	else { document.getElementById("id-countdown").innerHTML=content; }
	    },
    	countdown.DAYS|countdown.HOURS|countdown.MINUTES|countdown.SECONDS
    );
	// // later on this timer may be stopped
	// window.clearInterval(timerId);
	// console.log(content);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>