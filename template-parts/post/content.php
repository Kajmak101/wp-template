<?php /**
 * 
 * Template part for displaying posts
 * 
 *  */ ?>

<article id="post-<?php the_ID(  ); ?>">
<header class="entry-header">
<?php 
the_title( '<h2> class="entry-title"><a href="'.esc_url( get_permalink( ) ).'">','</a></h2>');

?>


</header>
<div class="entry-content">
<?php
the_excerpt(  );
?>
</div>

<footer class="entry-footer default-max-width">


</footer>

</article>
<?php the_ID() ?>