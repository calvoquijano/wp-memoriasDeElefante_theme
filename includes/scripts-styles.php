<?php
/**
 * estilos definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */

 function elefante_theme_styles(){
    //Registro de hojas de estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', '' , '5.3.3' , 'all' );
    wp_register_style('calvo_styles', RUTAELEFANTE . '/css/calvo_styles.css', '' , '' , 'all' );
    wp_register_style('elefante_styles', get_stylesheet_uri() , array('bootstrap','calvo_styles') , '1.0' , 'all' );
    //Carga de los estilos
    wp_enqueue_style('elefante_styles' );
 }

 add_action('wp_enqueue_scripts', 'elefante_theme_styles');