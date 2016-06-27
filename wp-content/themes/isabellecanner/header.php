<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Isabelle Chabran</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Referencement -->
    <meta name="description" content="Isabelle Chabran est coach pour des formations enneagramme et fait du coaching pour l'orientation professionnelle.">
    <meta name="keywords" content="Isabelle Chabran, coach, coaching, enneagramme, formation enneagramme, nantes">
    <meta name="author" content="Isabelle Chabran">
    <meta name="robots" content="index">
    <meta name="Indentifier-URL" content="www.isabelle-chabran.fr">
    <!-- END Référencement -->
    <!-- Open Graph-->
    <meta property="og:title" content="Isabelle Chabran - Coach">
    <meta property="og:type" content="website">
    <meta property="og:url" content="www.isabelle-chabran.fr">
    <meta property="og:image" content="www.isabelle-chabran.fr/LogoIsa-e1465491770614.png">
    <meta property="og:site_name" content="Isabelle Chabran - Coach">
    <meta property="og:description" content="Isabelle Chabran est coach pour des formations enneagramme et fait du coaching pour l'orientation professionnelle.">
    <!-- END Open Graph-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/main.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/media.css"/>
    <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>

<body>
<header>
    <?php if (!is_page('contact') ):?>
        <nav class="navbar navbar-default transparent " role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                </a>-->
                </div>
                <?php
                wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
        <?php else:?>
        <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>-->
                </div>
                <?php
                wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
    <?php endif;?>
</header>