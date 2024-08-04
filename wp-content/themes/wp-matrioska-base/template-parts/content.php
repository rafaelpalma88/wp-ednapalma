<?php
/**
 * Template part for displaying posts
 *
 * @package wp-matrioska-base
 */

// Evitar acesso direto
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php else : ?>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>
        <?php endif; ?>

        <div class="entry-meta">
            <span class="posted-on"><?php echo get_the_date(); ?></span>
            <span class="byline"><?php echo __('by', 'wp-matrioska-base'); ?> <?php the_author(); ?></span>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        if ( is_singular() ) {
            the_content(); // Exibe o conteúdo completo se for uma visualização singular
        } else {
            the_excerpt(); // Exibe o resumo se for uma listagem
        }

        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'wp-matrioska-base' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        echo '<span class="cat-links">' . __( 'Posted in', 'wp-matrioska-base' ) . ' ' . get_the_category_list( ', ' ) . '</span>';
        echo '<span class="tags-links">' . get_the_tag_list( '', ', ' ) . '</span>';

        if ( current_user_can( 'edit_posts' ) ) {
            echo '<span class="edit-link"><a href="' . get_edit_post_link() . '">' . __( 'Edit', 'wp-matrioska-base' ) . '</a></span>';
        }
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->