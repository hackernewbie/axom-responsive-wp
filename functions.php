<?php
function loading_custom_scripts() {
// register script for sub-menu support
wp_register_script('custom_script',get_template_directory_uri() . '/js/scripts.js',array('jquery'),'1.0' );
// enqueue the script
wp_enqueue_script('custom_script');
}
add_action('wp_enqueue_scripts', 'loading_custom_scripts');
// register script for sub-menu support

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
    
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'AXOM' ),
) );
/**
 * Register sidebars and widgetized areas.
 *
 */
function sidebar_widgets_init() {
	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar_one',
		'before_widget' => '<div class="widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
register_sidebar( array(
		'name'          => 'Top Right sidebar',
		'id'            => 'top-sm-widget-area',
		'before_widget' => '<div class="top-right-widget-area">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
/*Add additional sidebar(s) below this*/
}
add_action( 'widgets_init', 'sidebar_widgets_init' );
/*Add Featured Post support*/
add_theme_support( 'post-thumbnails' );

?>
