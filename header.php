<!doctype html>
<html class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css?=v1.0">
</head>

<body <?php body_class(); ?>>

<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<a href="#maincontent" class="skip-link">Skip to main content</a>

<header class="header">
    <div class="wrapper">
        <a href="/" class="header__logo">
            <h2>
                <span>Your Logo</span>
            </h2>
        </a>
        <nav aria-label="Main Menu">
            <button class="open-button" aria-expanded="false" aria-haspopup="menu" aria-controls="main-menu" aria-label="Open Main Navigation">
                <div class="hidden">Open Menu</div>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="main-menu">
                <?php wp_nav_menu( array('menu' => 'Main Menu') ); ?>
            </div>
        </nav>
    </div>
</header>