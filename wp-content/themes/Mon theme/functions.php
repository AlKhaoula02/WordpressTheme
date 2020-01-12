<?php

function katheme_scripts() {
	wp_enqueue_style( 'katheme_bootstrap_core', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'katheme_custom', get_template_directory_uri().'/style.css', array('katheme_bootstrap_core'),'1.0.0','all');
	wp_enqueue_script( 'katheme_script', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'katheme_custom', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css');
	

}
add_action('wp_enqueue_scripts','katheme_scripts');

function katheme_admin_scripts() {
	wp_enqueue_style( 'bootstrap_adm_core', get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0','all');

}
add_action('admin_init','katheme_admin_scripts');

function katheme_setup (){
 add_theme_support('post-thumbnails');
 add_theme_support('title-tag');

}
add_action('after_setup_theme','katheme_setup');

function add_widget_Support() {
	register_sidebar( array(
					'name'          => 'Sidebar',
					'id'            => 'sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h2>',
					'after_title'   => '</h2>',
	) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );
function add_Main_Nav() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );
  