<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo wp_title('-'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="<?php bloginfo('template_url') ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_url') ?>/assets/bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/owl-carousel/owl.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">
    
    <!-- ASSETS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/lightbox/css/lightbox.min.css">
    <link href="<?php bloginfo('template_url') ?>/css/main.css?v=1.2.8" rel="stylesheet">
	<link href="<?php bloginfo('template_url') ?>/css/update.css?v=1" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139725148-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-139725148-1');
    </script>
    <?php wp_head(); ?>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1670370989767479');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1670370989767479&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <header>
        <nav class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 visible-xs">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
                            <span class="sr-only">Navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="<?php bloginfo('home'); ?>">
                        <img class="logo" src="<?php bloginfo('template_url') ?>/img/logo-aerotown-horizontal.png" alt="Logo Aerotown" style="height: auto !important; width: 100% !important; max-width: 200px; margin-top: 5px;">
                    </a>
                </div>
                <div class="hidden-xs col-md-3">
                    <?php echo get_template_part('templates/part', 'title'); ?>
                </div>
                <div class="collapse-menu-header col-md-9 col-lg-9">
                    <div class="row">
                        <div id="collapse-menu" class="collapse navbar-collapse">
                            <?php 
                            if (has_nav_menu( 'principal' )) {
                                wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'principal', 
                                        'menu_class' => 'header-menu',
                                        'menu_id' => 'header-nav',
                                        'container_class' => 'menu', 
                                        'container_id' => 'menu',
                                    ) 
                                );
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>