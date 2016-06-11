<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
    
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'AXOM' ),
) );

/*Max image size*/
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}
add_image_size( 'full-width-horizontal', 640, 320,true );
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar_one',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
register_sidebar( array(
		'name'          => 'Right sidebar Two',
		'id'            => 'right_sidebar_two',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
