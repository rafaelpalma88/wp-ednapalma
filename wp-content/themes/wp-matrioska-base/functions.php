<?php
function meu_tema_setup() {
    // Suporte para imagens destacadas
    add_theme_support('post-thumbnails');

    // Suporte para título dinâmico
    add_theme_support('title-tag');
    
    // Registrar menu de navegação
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'wp-matrioska-base'),
    ));
}
add_action('after_setup_theme', 'meu_tema_setup');

function meu_tema_scripts() {
    // Enfileira o reset.css antes do style.css
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/css/reset.css');

     // Enfileirar folhas de estilo e scripts
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function wp_matrioska_base_custom_logo_setup() {
  add_theme_support('custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
  ));
}
add_action('after_setup_theme', 'wp_matrioska_base_custom_logo_setup');
