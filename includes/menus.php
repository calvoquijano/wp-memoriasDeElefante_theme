<?php
/**
 * scripts definitions
 *
 * @package Memorias
 * @subpackage Memorias_Elefante
 * @since 1.0
 */
function menuda_memoria(){
    register_nav_menus(array(
        'menudo-menu' => __('Menú principal', 'elefante')
    ));
 }
 add_action( 'init', 'menuda_memoria' );