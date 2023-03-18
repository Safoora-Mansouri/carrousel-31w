<?php
/**
* Extension carrousel permet d'afficher dans une boîte modale 
* les images d'une galerie
* Package name : Carrousel
* Version: 1.0.0
*/
/*
Plugin name: Carrousel
Author: Eddy Martin
Plugin URI: https:github.com/eddytuto/carrousel
Description: Permet d'afficher dans une boîte modale les images d'une galerie avec un système de navigation
*/


function carrousel_enqueue(){

$version_css = filemtime(plugin_dir_path(__FILE__ ) . "style.css");
$version_js = filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

wp_enqueue_style(   'em_plugin_carrousel_css',
plugin_dir_url(__FILE__) . "style.css",
array(),
$version_css);

wp_enqueue_script(  'em_plugin_carrousel_js',
plugin_dir_url(__FILE__) ."js/carrousel.js",
array(),
$version_js,
true);
}

add_action('wp_enqueue_scripts', 'carrousel_enqueue');
//generer le code HTML//
function creation_carrousel()
{
return '<button class="bouton__ouvrir">Ouvrir</button>
    <div class="carrousel">
    <button class="bouton__x">X</button>
    <figure class="carrousel__figure"></figure>
    <div class="controls">
        <button class="button__next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M14.59 8L10 12.59L11.41 14L17.41 8L11.41 2L10 3.41L14.59 8Z"/>
      </svg>
      g</button>
        <button class="button__previous"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M9.41 16L14 11.41L12.59 10L6.59 16L12.59 22L14 20.59L9.41 16Z"/>
      </svg>
      </button>
    </div>
    <form class="carrousel__form"></form>
    </div>';
}  

add_shortcode('carrousel', 'creation_carrousel');




