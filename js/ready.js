$( document ).ready(function() {
	scrolledHeader(300);

	var bannerTopo = $('.banner-topo .owl-carousel').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		video: true,
		autoplay: true,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		loop: true,
		items: 1,
		margin: 0,
		dots: false,
		nav: false,
		mouseDrag: false
	});
	bannerTopo.owlCarousel();
	$('.banner-topo button.muda-slide').click(function() {
	    bannerTopo.trigger('next.owl.carousel');
	});

	var sliderNegocio = $('.carrossel-features .owl-carousel').owlCarousel({
		// animateOut: 'fadeOut',
		// animateIn: 'fadeIn',
		autoplay: false,
		// autoplayTimeout: 6000,
		loop: true,
		items: 1,
		margin: 0,
		dots: false,
		nav: false,
		mouseDrag: false
	});
	sliderNegocio.owlCarousel();
	$('.negocio button.muda-slide').click(function() {
	    sliderNegocio.trigger('next.owl.carousel');
	});

	var sliderGaleria = $('.carrossel-galeria .owl-carousel').owlCarousel({
		autoplay: true,
		autoplayTimeout: 6000,
		loop: true,
		margin: 10,
		dots: false,
		nav: false,
		mouseDrag: false,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			}
		}
	});
	sliderGaleria.owlCarousel();
	$('.galeria button.muda-slide').click(function() {
	    sliderGaleria.trigger('next.owl.carousel');
	});

	var sliderClipping = $('section.clipping .owl-carousel').owlCarousel({
		// animateOut: 'fadeOut',
		// animateIn: 'fadeIn',
		autoplay: false,
		loop: false,
		items: 2,
		margin: 20,
		dots: false,
		nav: false,
		mouseDrag: false,
		responsive: {
			0 : {
				items: 1
			},
			768 : {
				items: 2
			}
		}
	});
	sliderClipping.owlCarousel();
	$('.clipping button.next-slide').click(function() {
	    sliderClipping.trigger('next.owl.carousel');
	});
	$('.clipping button.prev-slide').click(function() {
	    sliderClipping.trigger('prev.owl.carousel');
	});

	var sliderVideos = $('section.videos .owl-carousel').owlCarousel({
		// animateOut: 'fadeOut',
		// animateIn: 'fadeIn',
		autoplay: false,
		loop: false,
		items: 2,
		margin: 20,
		dots: false,
		nav: false,
		mouseDrag: false,
		responsive: {
			0 : {
				items: 1
			},
			768 : {
				items: 2
			}
		}
	});
	sliderVideos.owlCarousel();
	$('.videos button.next-slide').click(function() {
	    sliderVideos.trigger('next.owl.carousel');
	});
	$('.videos button.prev-slide').click(function() {
	    sliderVideos.trigger('prev.owl.carousel');
	});
	
	$('.menu .nav-contato a').click(function(e){
	    $('.botao-nav').click();
	    $('html, body').animate({scrollTop: $("section.contato").offset().top}, 1000);
	});


	var options = {
	    valueNames: [ 'categoria', 'titulo', 'num', 'telefone' ]
	};
	var listaLojas = new List('lista-lojas', options);

	$('.busca-lojas').on('keyup', function() {
		var searchString = $(this).val();
		listaLojas.search(searchString);
	});

	$('.lista-categorias .item').each(function(){
		var categoria = $(this).html().trim();
		$(this).click(function(){
			$('.lista-categorias .item').removeClass('ativo');
			$(this).addClass('ativo');

			if (categoria != 'Todas as categorias') {
				var searchString = categoria;
				listaLojas.search(searchString, ['categoria']);	
			} else{
				listaLojas.search('');					
			}

	    	$('html, body').animate({scrollTop: $("#lista-lojas").offset().top - 50 }, 300);
		});

	});
});

$(window).on('load', function(){
    $("html").easeScroll();
	
	var hash = window.location.hash.replace('#','')
	if ( window.location.hash != '') {
	    $('html, body').animate({scrollTop: $("section."+hash+"").offset().top}, 1000 );
	}
});