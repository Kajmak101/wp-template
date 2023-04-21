<?php 
/**
 * This is a template i think? that displays all of the <head> section
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head( ); 
    ?>
</head>
<?php
    get_template_part('template-parts/navigation/navmenu');


?>

<body <?php body_class(  ); ?> >
    
