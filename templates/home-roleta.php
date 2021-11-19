<style>
.my-3 {
	margin-top: 15px;
	margin-bottom: 15px;
}
.the_wheel {
    background-image: url(<?php echo get_bloginfo('template_url'); ?>/roleta/wheel_back.png);
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%;
    width: 320px;
    height: 480px;
    padding-top: 55px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.content-roleta {
	background-color: #0f2337 !important;
    background-image: url(<?php echo get_bloginfo('template_url'); ?>/roleta/background.jpg) !important;
	background-position: center !important;
	background-size: cover !important;
	color: white;
	padding: 10px !important;
}
.content-roleta .form-control::placeholder {
	color: #565656;
}
.content-roleta a {
    text-decoration: none !important;
    color: #ffeb00 !important;
}
.roleta-logo {
    display: flex;
    justify-content: center;
    align-items: center;
}
.roleta-box {
    display: flex;
    justify-content: center;
    align-items: center;
}
.roleta-formulario {
    padding: 30px;
}
@media screen and (max-width: 768px) {
    .content-roleta {
        display: block !important;
        align-items: unset !important;
    }
}

.btn-roleta {
	background-color: #da030b !important;
	border: none;
	padding: 10px;
	font-size: 1em;
	border-radius: 5px;
	color: white !important;
}   

.roleta-title {
    
    color: #efefef;
    font-size: 3.0em;
    font-weight: bold;
}
.roleta-text {
    
    color: #efefef;
    font-size: 2.0em;

}
.content-roleta .close {
    color: white !important;
    opacity: 1 !important;
    font-size: 3em !important;
}
</style>
<div class="modal" id="modalRoleta" aria-labelledby="modalRoleta" aria-hidden="true">
	<div class="modal-dialog  modal-lg">
		<div class="modal-content  content-roleta">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-md-12 roleta-logo">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-aerotown-horizontal-white.png" class="img-fluid" width="250" alt="">
					</div>
				</div>
				<div class="content-center row d-flex">
					<div class="col-md-6 roleta-box">
						<div width="345" height="345" class="the_wheel">
							<canvas id="canvas" width="320" height="320">
								<p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
							</canvas>
						</div>
					</div>
					<div class="col-md-6 roleta-formulario">
						<div class="power_controls">
							<form id="form-action" action="" method="post" enctype="multipart/form-data">
								<div class="my-3">
									<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo" required>
								</div>
								<div class="my-3">
									<input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" required>
								</div>
								<div class="my-3">
									<input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
								</div>
								<div class="my-3">
									<input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
								</div>
								
								<div class="my-3">
									<input type="checkbox" name="aceito" id="aceito" value="sim"> Aceito os termos e condições
								</div>
								<div class="my-3">
									<button type="sub mit" class="btn btn-roleta" id="spin_button" >Participar</button>
								</div>
								<div class="my-3">
									<a href="https://www.aerotown.com.br/" class="text-white">VEJA O REGULAMENTO E REGRAS</a>
								</div>
								<div class="spanMessage"></div>
								<input type="hidden" name="action" value="roleta" />
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="<?php echo get_bloginfo('template_url'); ?>/roleta/js/winwheel.js"></script>
<script>
	$(document).ready(function() { 	
		$('#modalRoleta').modal('show');
	});

	let theWheel = new Winwheel({
		'outerRadius'     : 131,        
		'innerRadius'     : 54,         
		'textFontSize'    : 11,         
		'textOrientation' : 'horizontal',
		'textAlignment'   : 'center',    
		'numSegments'     : 14,         
		'segments'        :             
		[                                                  
			<?php
				$listPremios = $wpdb->get_results( "SELECT *  FROM roleta_premios" );
				$h = 0;
				$cores = array(
					'#777777',
					'#FCC911',
					'#1971BA',
					'#777777',
					'#E00A6B',
					'#2A1DA3',
					'#777777',
					'#18B78D',
					'#FF4E00',
					'#FCC911',
					'#777777',
					'#1971BA',
					'#E00A6B',
					'#2A1DA3',
				);
				foreach ($listPremios as $singlePremios) {
					?>
					{'fillStyle' : '<?php if (isset($cores[$h])) { echo $cores[$h]; } else { echo '#777777';} ?>', 'text' : '<?php echo $singlePremios->nome; ?>'}, 
					<?php
					$h++;
				}
			?>
		],
		'animation' : { 'type'     : 'spinToStop', 'duration' : 10, 'spins'    : 3,  'callbackFinished' : alertPrize, 'callbackSound'    : playSound, 'soundTrigger'     : 'pin' },
		'pins' :                // Turn pins on.
			{
				'number'     : 24,
				'fillStyle'  : 'silver',
				'outerRadius': 1,
			}
	});

	let audio = new Audio('https://www.aerotown.com.br/wp-content/themes/aerotown/roleta/tick.mp3');
	function playSound() { audio.pause(); audio.currentTime = 0; audio.play(); }

	let wheelPower    = 0;
	let wheelSpinning = false;

	function ajaxStateChange(spinResponse = 1) {
		if (wheelSpinning == false) {
			theWheel.stopAnimation(false);
			theWheel.rotationAngle = 0;
			theWheel.draw();

			theWheel.animation.spins = 4;
			let stopAt = theWheel.getRandomForSegment(spinResponse);
			theWheel.animation.stopAngle = stopAt;
			theWheel.startAnimation();
			wheelSpinning = true;
		}
	}
	var sendRoleta = false; var titleText = ''; var contentText = ''; var formRoleta = $("#form-action");
	formRoleta.submit( function (e) {
		if (!sendRoleta) {
			e.preventDefault(); 
			var content = new FormData(formRoleta[0]);
			$.ajax({
				type: 'POST',
				url: roleta_object.location,
				data: content,
				processData: false,
				contentType: false
			}).done( function(returnSend) {
				var contentReturn = JSON.parse(returnSend);
				if (contentReturn.status) { 
					$(".power_controls").html('<h3 class="text-center roleta-title">Aguarde a roleta terminar de girar!</h3>');
					titleText = contentReturn.title;
					contentText = contentReturn.message;
					ajaxStateChange(contentReturn.spin);
				}
				else { $('.spanMessage').html('<div class="alert alert-danger" role="alert">' + contentReturn.response + '</div>'); }
			});
		}
	});

	function alertPrize(indicatedSegment) { 
		$(".power_controls").html('<h3 class="text-center roleta-title">' + titleText + '</h3><p class="text-center roleta-text">' + contentText + '</p>');
	}

</script>