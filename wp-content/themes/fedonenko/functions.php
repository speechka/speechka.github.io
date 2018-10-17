<?php
function load_style_script()
{
    wp_enqueue_script('jquery_my',
                get_template_directory_uri().'/js/jquery-1.10.1.min.js');
    wp_enqueue_script('jqFancyTransitions_my',
                get_template_directory_uri().'/js/jqFancyTransitions.1.8.min.js');

    wp_enqueue_style('style',
                get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'load_style_script');

$args = array('name'            =>'Меню',
                'id'            =>'menu_header',
                'description'   =>'',
                'class'         =>'',
                'before_widget' =>'',
                'agter_widget'  =>'',
                'before_title'  =>'',
                'after_title'   =>'');

register_sidebar($args);
?>