<?php 
/**
 * the template for displaying archive pages.
 */
get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
    <?php if (have_posts(  )): ?>
        <header class="archive-header">
        <?php 
        the_archive_title('<h1 class="archive-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');

        ?>
        </header>

        <?php 
        while (have_posts ()) :
            the_post();
            get_template_part('template-parts/post/content') ;
        endwhile;
        the_posts_pagination(array(
            'prev_text' => esc_html__('prev' ), 
            'prev_text' => esc_html__('next' ), 

        ) );
        else :
            get_template_part('template-parts/post/content', 'none');

        ?>
    <?php endif; ?>
</main>
</div>