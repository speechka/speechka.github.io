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

add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);

$args = array('name'            =>'Меню',
                'id'            =>'menu_header',
                'description'   =>'',
                'class'         =>'',
                'before_widget' =>'',
                'agter_widget'  =>'',
                'before_title'  =>'',
                'after_title'   =>'');

register_sidebar($args);

$args = array(
                'name'          =>'Sidebar',
                'id'            =>'sidebar',
                'description'   =>'',
                'class'         =>'',
                'before_widget' =>'<div class="sidebar-widget %2$s">',
                'agter_widget'  =>'</div>',
                'before_title'  =>'<h3>',
                'after_title'   =>'</h3>');

register_sidebar($args);


$args = array(
    'name'          => 'Footer',
    'id'            => 'footer',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="footer-info  %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>' );

register_sidebar($args);






if ( ! function_exists( 'twentyfifteen_comment_nav' ) ) :
/**
 * Display navigation to next/previous comments when applicable.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_comment_nav() {
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
        <div class="nav-links">
            <?php
                if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-previous">%s</div>', $prev_link );
                endif;

                if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-next">%s</div>', $next_link );
                endif;
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .comment-navigation -->
    <?php
    endif;
}
endif;




function banner_posts() {
    $labels = array(
        'name'                  => 'Баннеры',
        'singular_name'         => 'Баннер',
        'menu_name'             => 'Баннеры',
        'name_admin_bar'        => 'Баннер',
        'add_new'               => 'Добавить новый',
        'add_new_item'          => 'Добавить новый баннер',
        'new_item'              => 'Новый баннер',
        'edit_item'             => 'Редактировать баннер',
        'view_item'             => 'Посмотреть баннер',
        'all_items'             => 'Все баннеры',
        'search_items'          => 'Поиск баннера',
        'parent_item_colon'     => '',
        'not_found'             => 'Баннер не найден',
        'not_found_in_trash'    => 'В корзине баннера не найдено'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title',  'thumbnail' )
    );
 
    register_post_type( 'banner', $args );
}
 
add_action( 'init', 'banner_posts' );





function slider_posts() {
    $labels = array(
        'name'                  => 'Слайдеры',
        'singular_name'         => 'Слайдер',
        'menu_name'             => 'Слайдеры',
        'name_admin_bar'        => 'Слайдео',
        'add_new'               => 'Добавить новый',
        'add_new_item'          => 'Добавить новый слайдер',
        'new_item'              => 'Новый слайдер',
        'edit_item'             => 'Редактировать слайдер',
        'view_item'             => 'Посмотреть слайдер',
        'all_items'             => 'Все слайдеры',
        'search_items'          => 'Поиск слайдера',
        'parent_item_colon'     => '',
        'not_found'             => 'слайдер не найден',
        'not_found_in_trash'    => 'В корзине слайдера не найдено'
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title',  'thumbnail' )
    );
 
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'slider_posts' );
