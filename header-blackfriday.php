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
    <script src="https://kit.fontawesome.com/7474cd89b5.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/owl-carousel/owl.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900" rel="stylesheet">
    
    <!-- ASSETS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/lightbox/css/lightbox.min.css">
    <link href="<?php bloginfo('template_url') ?>/css/blackfriday.css?v=1.1.1" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

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
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_url'); ?>/blackfriday/blackfriday-logo.png" alt="" class="img-header-logo img-fluid">
                    <h1 class="call-blackfriday">Black Friday no Aerotown</h1>
                    <h2 class="text-blackfriday">As Melhores ofertas das nossas lojas</h2>
                </div>
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_url'); ?>/blackfriday/blackfriday-tag.png" alt="" class="img-header-title img-fluid">
                </div>
            </div>
        </div>
    </header>
    <div class="count-down">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="title-blackfriday">AS OFERTAS TERMINAM EM</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="id-countdown"></div>
                </div>
            </div>
        </div>
    </div>