<?php
    register_nav_menus(
        array('primary-menu'=>'Top Menu','footer-menu'=>'Footer Menu'),
    );
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_filter( 'widget_text', 'do_shortcode' );
?>