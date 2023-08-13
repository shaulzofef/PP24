<?php 

// Theme Support
function sz_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sz_theme_support');

//Menu Locations
function sz_menus(){
	$locations = array(
		'primary' => "Primary Menu",
		'secondary' => "Secondary Menu"
	);
	
	register_nav_menus($locations);
}
add_action('init','sz_menus');

//Load CSS
function sz_register_styles(){
	wp_enqueue_style('sz_css_normalize', get_template_directory_uri() . "/normalize.css", array(), '1.0', 'all');
	wp_enqueue_style('sz_css_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
	wp_enqueue_style('sz_css_font-awsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0', 'all');
}
add_action('wp_enqueue_scripts', 'sz_register_styles');

//Load JS
function sz_register_scripts(){
	wp_enqueue_script('sz_js_jquery', 'https://code.jquery.com/jquery-latest.min.js', array(), '1.0', true);
	wp_enqueue_script('sz_js_modernizr', get_template_directory_uri() . '/assets/js/modernizr-3.12.0.min.js', array(), '3.12', true);
	wp_enqueue_script('sz_js_main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sz_register_scripts');

//Add Thumbnail within Post Text
add_filter('the_content', 'put_thumbnail_in_posting');

function put_thumbnail_in_posting($content) {
	global $post;
	
	if (is_singular() && has_post_thumbnail() && ($post->post_type == 'post')) {
		$thumbnail = get_the_post_thumbnail($post, 'medium', array('class' => 'article-feature', 'alt' => get_the_title()));
		$content = $thumbnail . $content;
	}
	
	return $content;
}

function custom_excerpt_length($length) {
	return 70; // Change this number to the desired length of words
}
add_filter('excerpt_length', 'custom_excerpt_length');


?>