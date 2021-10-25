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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
    
    <!-- ASSETS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/lightbox/css/lightbox.min.css">
    <link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139725148-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-139725148-1');
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="container">
            <div class="row">
                <div class="col-xs-12 visible-xs">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
                            <span class="sr-only">Navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="<?php bloginfo('home'); ?>"><img class="logo" src="<?php bloginfo('template_url') ?>/img/logo-aerotown.png" alt="Logo Aerotown"></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div id="collapse-menu" class="collapse navbar-collapse">
                            <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'principal', 
                                    'menu_class' => 'header-menu',
                                    'menu_id' => 'header-nav',
                                    'container_class' => 'menu', 
                                    'container_id' => 'menu',
                                ) 
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>