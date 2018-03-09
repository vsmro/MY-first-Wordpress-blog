<?php
/**
 * Created by PhpStorm.
 * User: VSM
 * Date: 06-Mar-18
 * Time: 3:05 PM
 */
// reguiew NAW WALKER
require_once('class-wp-bootstrap-navwalker.php');

// Theme Support

function wpb_theme_setup() {
    add_theme_support('post-thumbnails');
    //Support for nav menu's
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

    //POst formats
    add_theme_support('post-formats', array('aside','gallery'));
}

add_action('after_setup_theme','wpb_theme_setup' );
//function prefix_modify_nav_menu_args( $args ) {
//    return array_merge( $args, array(
//        'walker' => WP_Bootstrap_Navwalker(),
//    ) );
//}
//add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

function set_excerpt_length() {
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

//widget locations
function wpb_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');

//Customize File
require get_template_directory(). '/inc/customizer.php';