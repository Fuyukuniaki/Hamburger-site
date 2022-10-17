<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );
    function hamburger_script() {
        wp_enqueue_style( 'webfonts', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&family=M+PLUS+1:wght@100;300;500;700;800;900&display=swap', array() );
        wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/958005243b.js', array() );
        wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.6.1.slim.min.js', array(), '1.0.0' );
        wp_enqueue_script('javascript',  get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );
        wp_enqueue_style( 'ress', '//unpkg.com/modern-css-reset/dist/reset.min.css', array() );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    function hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );

    function new_excerpt_more($more) {
        return ' ';
    }
    add_filter('excerpt_more', 'new_excerpt_more');