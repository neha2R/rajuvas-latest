<?php
/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since qmp 1.0
 */

 function themename_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

}
add_action('after_setup_theme','themename_setup');


function sharbh_widgets_init() {
	add_theme_support( 'post-thumbnails' );
	
	register_sidebar( array(
		'name' => __( 'Social Widget Area', 'Rajuvas' ),
		'id' => 'social-widget-area',
		'description' => __( 'Appears in the Header section of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title heading">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Banner Widget Area', 'Rajuvas' ),
		'id' => 'banner-widget-area',
		'description' => __( 'Appears in the Banner section of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title heading">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'Rajuvas' ),
		'id' => 'footer-widget-area',
		'description' => __( 'Appears in the Header section of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title heading">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Map Widget Area', 'Rajuvas' ),
		'id' => 'map-widget-area',
		'description' => __( 'Appears in the content section of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title heading">',
		'after_title' => '</h3>',
	) );
	
        register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'Rajuvas' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'Appears in the Right Sidebar of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s sidemenu">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title heading">',
		'after_title' => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Bottom Widget Area', 'Rajuvas' ),
		'id' => 'bottom-widget-area',
		'description' => __( 'Appears in the Bottom section of the site.', 'Rajuvas' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title visitor-heading">',
		'after_title' => '</h1>',
	) );
	/***********************************************/
	
	

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'Rajuvas' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'Rajuvas' ),
	) );
	

}

add_action( 'widgets_init', 'sharbh_widgets_init' );


function custom_excerpt_length($length)
	{
		return 20;		
	}
	add_filter('excerpt_length','custom_excerpt_length',999);
	
function new_excerpt_more($more)
	{
		global $post;
		return '<a class="moretag" href="'.get_permalink($post->ID).'">READ MORE</a>';
	}
	add_filter('excerpt_more','new_excerpt_more');

function my_search_form( $form ) {
    $form = '<form role="search" method="get" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( '' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="search this website..." />
    <input type="submit" id="searchsubmit" class="search-btn" value="" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

function student_reviews_init() {
    $args = array(
      'label' => 'Student',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'student-reviews'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'student', $args );
}
add_action( 'init', 'student_reviews_init' );

function faculty_reviews_init() {
    $args = array(
      'label' => 'Faculty',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'faculty-reviews'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'faculty', $args );
}
add_action( 'init', 'faculty_reviews_init' );
function upload_size_limit_filterw( $size ) {
return 1536000*14;//Size in Kb
}
add_filter( 'upload_size_limit', 'upload_size_limit_filterw',12 );

function myplugin_enqueue() {
    // wp_register_script(...
    // wp_enqueue_script(...
}


add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
?>