<?php
// Inclui o cabeçalho do site
get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="container site-main">
        <?php
        // Inicia o loop para exibir o conteúdo da página
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if (!is_front_page()) : ?>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php
                    // Exibe o conteúdo da página
                    the_content();

                    // Exibe links de paginação se o conteúdo estiver dividido em várias páginas
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . __('Pages:', 'textdomain'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                
                <footer class="entry-footer">
                    <?php
                    // Se aplicável, exibe campos personalizados ou outras informações adicionais
                    edit_post_link(
                        sprintf(
                            __('Edit<span class="screen-reader-text"> "%s"</span>', 'textdomain'),
                            get_the_title()
                        ),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    ?>
                </footer>
            </article>
        <?php
            endwhile;
        else :
            // Se nenhuma página for encontrada, exibe uma mensagem de erro
            echo '<p>' . __('Sorry, no pages matched your criteria.', 'textdomain') . '</p>';
        endif;
        ?>
    </main>
</div>

<?php
// Inclui a barra lateral, se aplicável
get_sidebar();
// Inclui o rodapé do site
get_footer(); 
?>