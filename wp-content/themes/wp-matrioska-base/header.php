<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); // Hook necessário para incluir scripts e estilos ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="masthead" class="site-header" role="banner">
  <div class="site-branding">
    <?php 
    if (has_custom_logo()) {
        the_custom_logo(); // Exibe o logo definido no Personalizador
    } else {
        // Caso não haja logo definido, exibe o nome do site
        echo '<a href="' . esc_url(home_url('/')) . '" rel="home">' . esc_html(get_bloginfo('name')) . '</a>';
    }
    ?>
  </div>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-header',
        'menu_id'        => 'primary-menu',
    ));
    ?>
  </nav>
</header>