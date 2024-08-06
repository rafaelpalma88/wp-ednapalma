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

<?php if ( is_singular() ) : ?>

    <article id="post-<?php the_ID(); ?>" class="box-single-post" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
                <span class="posted-on"><?php echo get_the_date(); ?></span>
                <span class="byline"><?php echo __('by', 'wp-matrioska-base'); ?> <?php the_author(); ?></span>
            </div>
        </header>
        <div class="entry-content">
            <?php
            the_content(); 

            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'wp-matrioska-base' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>
        <footer class="entry-footer">
            <?php
            echo '<span class="cat-links">' . __( 'Postado em', 'wp-matrioska-base' ) . ' ' . get_the_category_list( ', ' ) . '</span>';
            ?>

            <span>Tags:</span>
            <?php
            echo '<span class="tags-links">' . get_the_tag_list( '', ', ' ) . '</span>';

            if ( current_user_can( 'edit_posts' ) ) {
                echo '<span class="edit-link"><a href="' . get_edit_post_link() . '">' . __( 'Edit', 'wp-matrioska-base' ) . '</a></span>';
            }
            ?>
        </footer>
    </article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>
    <article id="post-<?php the_ID(); ?>" class="box-item-post" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
        <?php endif; ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>

        <div class="entry-meta">
            <span class="posted-on"><?php echo get_the_date(); ?></span>
            <span class="byline"><?php echo __('by', 'wp-matrioska-base'); ?> <?php the_author(); ?></span>
        </div>
    </header>
    
    <div class="entry-content">
        <?php
        
        the_excerpt(); 

        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'wp-matrioska-base' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>

    <footer class="entry-footer">
        <?php
        echo '<span class="cat-links">' . __( 'Postado em', 'wp-matrioska-base' ) . ' ' . get_the_category_list( ', ' ) . '</span>';
        ?>

        <span>Tags:</span>
        <?php
        echo '<span class="tags-links">' . get_the_tag_list( '', ', ' ) . '</span>';

        if ( current_user_can( 'edit_posts' ) ) {
            echo '<span class="edit-link"><a href="' . get_edit_post_link() . '">' . __( 'Edit', 'wp-matrioska-base' ) . '</a></span>';
        }
        ?>
    </footer>
</article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>




