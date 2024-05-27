<?php

/**
 * Archivo del header
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('chartset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?php echo IMAGELEFANTE; ?>/icons/logotipo.ico" />
    <title><?php wp_title(' > ', true, 'right'); ?><?php bloginfo('name') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>


</head>

<body>
    <header>
        <div class="container-fluid d-flex align-items-center justify-content-around flex-column flex-md-row cinta-superior">
            <h1 class="text-center titulo-site"><?php bloginfo('name'); ?></h1>
            <h2 class="text-center subtitulo-site"><?php bloginfo('description'); ?></h2>
        </div>
        <nav class="navbar navbar-expand-lg menu-calvo sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img style="width: 180px; margin: 5px" src="<?php echo IMAGELEFANTE; ?>/logo/logotipo_calvo.svg" /></a>
                <button class="navbar-toggler menu-hamburguesa" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="navbar-nav col-lg-9 d-flex">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'menudo-menu'
                        )); ?>
                    </div>

                    <div class="d-flex justify-content-around col-lg-3">
                        <a class="nav-link p-2" href="https://calamarcreativo.com/" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/calamar.svg" alt="Calamar Creativo" /></a>
                        <a class="nav-link p-2" href="https://vimeo.com/camaramantis" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/mantis.svg" alt="Cámaramantis" /></a>
                        <a class="nav-link p-2" href="https://www.linkedin.com/in/andresdavidquijano/" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/linkedin.svg" alt="LinkedIn Andrés Quijano" /></a>
                        <a class="nav-link p-2" href="https://www.behance.net/calvoquijano" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/behance.svg" alt="Behance Andrés Quijano" /></a>
                        <a class="nav-link p-2" href="https://github.com/calvoquijano" target="_blank"><img src="<?php echo IMAGELEFANTE; ?>/icons/simple-icons_github.svg" alt="GitHub Andrés Quijano" /></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>