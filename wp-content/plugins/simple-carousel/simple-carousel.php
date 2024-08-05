<?php
/*
Plugin Name: Simple Carousel
Plugin URI: http://seudominio.com/
Description: Um plugin simples para exibir um carousel de imagens usando um shortcode.
Version: 1.0
Author: Seu Nome
Author URI: http://seudominio.com/
License: GPL2
*/

// Evita o acesso direto ao arquivo
if (!defined('ABSPATH')) {
    exit;
}

// Enfileira os estilos e scripts necessários
function simple_carousel_enqueue_scripts() {
    wp_enqueue_style('simple-carousel-style', plugin_dir_url(__FILE__) . 'css/style.css');
    wp_enqueue_script('simple-carousel-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'simple_carousel_enqueue_scripts');

// Shortcode para exibir o carousel
function simple_carousel_shortcode($atts) {
    $atts = shortcode_atts(array(
        'images' => '',
    ), $atts, 'simple_carousel');

    $images = explode(',', $atts['images']);
    ob_start();
    ?>
    <div class="simple-carousel">
        <?php foreach ($images as $image) : ?>
            <div class="carousel-slide">
                <img src="<?php echo esc_url(trim($image)); ?>" alt="Carousel Image">
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_carousel', 'simple_carousel_shortcode');