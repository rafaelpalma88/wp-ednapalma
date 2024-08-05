<?php get_header(); ?>

<div id="main-content" class="container">
    <h1>Posts</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;
    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>