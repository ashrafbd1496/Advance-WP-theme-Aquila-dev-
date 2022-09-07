<?php 
/**
 * Header Template.
 *
 * @package Aquila
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet"> -->
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if (function_exists('wp_body_open')) {
     wp_body_open();
    }?>

    <div id="page" class="site">
        <div class="site-header" id="masthead" role="banner">
            <?php get_template_part('template-parts/header/nav'); ?>
        </div>
            <div class="content" class="site-content">