<?php
/**
 * Theme Functions.
 */

add_action( 'wp_enqueue_scripts', 'blogger_base_enqueue_styles' );
	function blogger_base_enqueue_styles() {
    	$parent_style = 'blogger-hub-style'; // Style handle of parent theme.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'blogger-base-style', get_stylesheet_uri(), array( $parent_style ) );
}

/* Theme Widgets Setup */
function blogger_base_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Home Sidebar', 'blogger-base' ),
		'description'   => __( 'Appears on Home Page', 'blogger-base' ),
		'id'            => 'home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'blogger_base_widgets_init' );

/* Excerpt Limit Begin */
function blogger_base_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

?>