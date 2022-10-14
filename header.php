<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php wp_head(); ?>
    </head>

    <body  <?php body_class("c-font-family p-body__FrontPage c-background c-margin__AllZero c-padding__AllZero c-grid__FrontPage c-position__FrontPage c-z-index__FrontPage c-overflow__FrontPage c-size__FrontPage js-body"); ?>>
        <header class="l-header c-background__Header c-grid__FrontPage-header js-header">
            <h1 class="p-logo c-margin__Logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-text-size__Logo c-text-weight--bold c-text-color__Logo c-text-decoration__None"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <?php get_search_form(); ?>
        </header>