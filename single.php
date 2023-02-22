<?php
/**
 * single page template
 * 
 */
get_header( );
echo get_post_format();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php
while(have_posts(  )) :
    the_post( );
    get_template_part( 'template-parts/post/content', get_post_format() );
    // the_title( '<h2>','</h2>');
    //the_content( );

    if ( comments_open(  ) || get_comments_number () ):
        comments_template(); 
    endif;

endwhile;  

?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
</div>

