<?php
/**
 * scripts definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */

 function elefante_theme_scripts(){
    //Registro de hojas de scripts
    wp_register_script( 'js-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', '', '5.3.3', false);
    wp_register_script( 'elefante-js',RUTAELEFANTE . '/js/functions.js', array('js-bootstrap') , '1.0', false);
    //Carga de los scripts
    wp_enqueue_script('elefante-js');
 }

 add_action('wp_enqueue_scripts', 'elefante_theme_scripts');