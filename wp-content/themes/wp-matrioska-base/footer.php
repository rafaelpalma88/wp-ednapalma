<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-widgets">
            <?php
            // Exibe widgets de rodapé se houver
            if (is_active_sidebar('footer-1')) :
                dynamic_sidebar('footer-1');
            endif;
            ?>
        </div>

        <nav id="footer-navigation" class="footer-navigation" role="navigation">
            <?php
            // Exibe o menu de navegação do rodapé se houver
            // wp_nav_menu(array(
            //     'theme_location' => 'menu-rodape',
            //     'menu_id'        => 'footer-menu',
            // ));
            ?>
        </nav>

        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); // Hook necessário para incluir scripts e estilos adicionais ?>
</body>
</html>
