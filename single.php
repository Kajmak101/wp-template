<?php
/**
 * single page template
 * 
 */
get_header( );
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php
while(have_posts(  )) :
    the_post( );
    the_title( '<h2>','</h2>');
    the_content( );

endwhile;  

?>

</main>
<?php get_footer(); ?>
</div>

