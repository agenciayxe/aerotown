function scrolledHeader(a) {
    $(document).on("scroll", function(b) {
        var c = $(document).scrollTop();
        c > a ? $("header").addClass("scrolled") : c < a && $("header").removeClass("scrolled")
    })
}

function mapDisableScroll() {
    $(document).ready(function() {
        $(".maps.disable-scroll").find("iframe").css("pointer-events", "none")
    });
    var a = function(c) {
            var d = $(this);
            d.on("click", b), d.off("mouseleave", a), d.find("iframe").css("pointer-events", "none")
        },
        b = function(c) {
            var d = $(this);
            d.off("click", b), d.find("iframe").css("pointer-events", "auto"), d.on("mouseleave", a)
        };
    $(".maps.disable-scroll").on("click", b)
}

function checkView(a) {
    function b() {
        var b = d.height() - a,
            e = d.scrollTop(),
            f = e + b;
        $.each(c, function() {
            var a = $(this),
                b = a.outerHeight(),
                c = a.offset().top;
            c + b >= e && c <= f && a.addClass("in-view")
        })
    }
    var c = $(".animation-element"),
        d = $(window);
    window.onload = function() {
        d.on("scroll resize", b), d.trigger("scroll")
    }
}

function adjustHeight(a, b) {
    function c(b) {
        b > 1.5 ? $(a).css("margin-top", "-15%") : b > 1.25 ? $(a).css("margin-top", "-10%") : b > 1.1 ? $(a).css("margin-top", "-5%") : $(a).css("margin-top", "0")
    }
    var d = window.innerHeight,
        e = $(a).height(),
        f = e / d;
    d < 775 && d < e ? ($(b).height(d), c(f)) : d > e ? ($(b).height(e), $(a).css("margin-top", "0")) : (c(f), $(b).height(d))
}
var onImgLoad = function(a, b) {
    $(a).each(function() {
        this.complete || $(this).height() > 0 ? b.apply(this) : $(this).on("load", function() {
            b.apply(this)
        })
    })
};
$(document).ready(function() {
    scrolledHeader(300);
    var a = $(".banner-topo .owl-carousel").owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        video: !0,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplayHoverPause: !0,
        loop: !0,
        items: 1,
        margin: 0,
        dots: !1,
        nav: !1,
        mouseDrag: !1
    });
    a.owlCarousel(), $(".banner-topo button.muda-slide").click(function() {
        a.trigger("next.owl.carousel")
    });
    var b = $(".carrossel-features .owl-carousel").owlCarousel({
        autoplay: !1,
        loop: !0,
        items: 1,
        margin: 0,
        dots: !1,
        nav: !1,
        mouseDrag: !1
    });
    b.owlCarousel(), $(".negocio button.muda-slide").click(function() {
        b.trigger("next.owl.carousel")
    });
    var c = $(".carrossel-galeria .owl-carousel").owlCarousel({
        autoplay: !0,
        autoplayTimeout: 6e3,
        loop: !0,
        margin: 10,
        dots: !1,
        nav: !1,
        mouseDrag: !1,
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
    c.owlCarousel(), $(".galeria button.muda-slide").click(function() {
        c.trigger("next.owl.carousel")
    });
    var d = $("section.clipping .owl-carousel").owlCarousel({
        autoplay: !1,
        loop: !1,
        items: 2,
        margin: 20,
        dots: !1,
        nav: !1,
        mouseDrag: !1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    d.owlCarousel(), $(".clipping button.next-slide").click(function() {
        d.trigger("next.owl.carousel")
    }), $(".clipping button.prev-slide").click(function() {
        d.trigger("prev.owl.carousel")
    });
    var e = $("section.videos .owl-carousel").owlCarousel({
        autoplay: !1,
        loop: !1,
        items: 2,
        margin: 20,
        dots: !1,
        nav: !1,
        mouseDrag: !1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        }
    });
    e.owlCarousel(), $(".videos button.next-slide").click(function() {
        e.trigger("next.owl.carousel")
    }), $(".videos button.prev-slide").click(function() {
        e.trigger("prev.owl.carousel")
    }), $(".menu .nav-contato a").click(function(a) {
        $(".botao-nav").click(), $("html, body").animate({
            scrollTop: $("section.contato").offset().top
        }, 1e3)
    });
    var f = {
            valueNames: ["categoria", "titulo", "num", "telefone"]
        },
        g = new List("lista-lojas", f);
    $("#busca-lojas").on("keyup", function() {
        var a = $(this).val();
        g.search(a)
        $('#lista-categorias, #lista-alimentacao').prop('selectedIndex', 0);
    }), 
    $("#lista-categorias, #lista-alimentacao").change(function() {
        var idCurrent = $(this).attr('id');

        console.log(idCurrent);
    	var a = $(this).val();
        if ( "Todas as categorias" != a ) { 
        	var b = a; 
        	g.search(b, ["categoria"])
        } 
        else g.search("");
        $("html, body").animate({
            scrollTop: $("#lista-lojas").offset().top - 180
        }, 500)

        if (idCurrent == 'lista-categorias') { $('#lista-alimentacao').prop('selectedIndex', 0); }
        else { $('#lista-categorias').prop('selectedIndex', 0); }
        $("#busca-lojas").val('');
    })
}), $(window).on("load", function() {
    $("html").easeScroll();
    var a = window.location.hash.replace("#", "");
    "" != window.location.hash && $("html, body").animate({
        scrollTop: $("section." + a).offset().top
    }, 1e3
)});

$(document).ready(function () {
    var bannerSlide = new Swiper('.swiper-content', {
        zoom: true,
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
});