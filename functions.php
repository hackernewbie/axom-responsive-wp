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
/*Adding views column on the admin panel*/
add_filter('manage_posts_columns', 'my_columns');
function my_columns($columns) {
    $columns['views'] = 'Views';
    return $columns;
}
add_action('manage_posts_custom_column',  'my_show_columns');
function my_show_columns($name) {
    global $post;
    switch ($name) {
        case 'views':
            $views = get_post_meta($post->ID, 'views', true);
            echo $views;
    }
}

/******************************FB OG *********************************/
function insert_image_src_rel_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
	if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
		$default_image="http://goandwander.com/images/default.jpg"; //replace this with a default image on your server or an image in your media library
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "
";
}
add_action( 'wp_head', 'insert_image_src_rel_in_head', 5 );
/******************************FB OG *********************************/
?>
