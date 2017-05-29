<?php
function pain_script_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/pain.css', array(), '1.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/pain.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'pain_script_enqueue');

function pain_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary','main menu');
	register_nav_menu('social','social menu');
}
add_action('init', 'pain_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');	/*===POST THUMBNAILS IN POT AND PAGES===*/
set_post_thumbnail_size( 825, 510, true );
add_theme_support( 'title-tag' );	/*===DOCUMENT TITLE===*/
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
add_theme_support( 'post-formats', array('image', 'video', 'gallery', 'aside' ) );
add_theme_support( 'automatic-feed-links' );	/*===ADD DEFAULT POSTS AND COMMENTS RSS FEED LINKS TO HEAD===*/
add_theme_support( 'editor_style');


load_theme_textdomain( 'pain', get_template_directory() . '/languages' ); /*===TRANSLATIONS===*/

/*===SIDEBAR===*/
function pain_widget_setup() {
	
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);	
}

add_action('widgets_init','pain_widget_setup');

/*===FAVICON===*/
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="', get_stylesheet_directory_uri() . '/ico/favicon.ico" />'. "\n";
}
add_action( 'wp_head', 'favicon_link' );

/*===HOME TITLE===*/
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

/*===CONTENT WIDTH===*/
if ( ! isset( $content_width ) ) {
	$content_width = 1000;
}

/*===COMMENTS REPLY===*/

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

function pain_enqueue_comments_reply() {
if( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'comment_form_before', 'pain_enqueue_comments_reply' );

/*===EDITOR STYLES===*/


function pain_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'pain_add_editor_styles' );


