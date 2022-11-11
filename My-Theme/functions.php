<?php
require_once( get_template_directory() . '/inc/wp-bootstrap-navwalker.php');
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    add_theme_support('post-thubnails');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => 'primary'        
            )
        );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts(){
    wp_enqueue_style('my-theme-booststrap', get_template_directory_uri() . '/assents/css/bootstrap.min.css');
    wp_enqueue_script('my-theme-booststrap', get_template_directory_uri() . '/assents/js/bootstrap.min.js', array('jquery'), true);

}
add_action('widgets_init', 'my_theme_sidebars');
function my_theme_sidebars() {
    
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Prymary Sidebar',
        'description' => 'Sidebar that appears across the entire website',
        'before_widget' => '<div id="%1$s" class="widget %2$s"> ',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

    
}
?>