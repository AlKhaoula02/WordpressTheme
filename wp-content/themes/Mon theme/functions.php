<?php

function katheme_scripts() {
	wp_enqueue_style( 'katheme_bootstrap_core', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'katheme_custom', get_template_directory_uri().'/style.css', array('katheme_bootstrap_core'),'1.0.0','all');
	wp_enqueue_script( 'katheme_script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'katheme_custom', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css');
	wp_enqueue_style( 'katheme_custom', 'http://localhost/WordpressTheme/wp-content/themes/Mon theme/js/kascript.js');
	
	
}
add_action('wp_enqueue_scripts','katheme_scripts');

function katheme_admin_scripts() {
	wp_enqueue_style( 'bootstrap_adm_core', get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.0.0','all');

}
add_action('admin_init','katheme_admin_scripts');



function katheme_activ_options(){
	$theme_opts = get_option('katheme_opts');
	if(!$theme_opts){
		$opts = array (
			'image_01_url' =>'',
			'legend_01' =>''
		);
		add_option('katheme_opts' ,$opts);
	}
}
add_action('after_switch_theme', 'katheme_activ_options');


function katheme_setup (){
 add_theme_support('post-thumbnails');
 add_theme_support('title-tag');
 require_once('includes/class-wp-bootstrap-navwalker.php');
 register_nav_menus(array('primary' => 'principal' ));


}
add_action('after_setup_theme','katheme_setup');

function add_widget_Support() {
	register_sidebar( array(
					'name'          => 'Sidebar',
					'id'            => 'sidebar',
					'before_widget' => '<div class="sidebar">',
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



  /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
		// File does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// File exists... require it.
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	};
}
add_action( 'after_setup_theme', 'register_navwalker' );


function katheme_give_me_meta_01($date1, $date2, $cat,$tags){
    $chaine = 'publié le <time class ="entry-date" datetime="';
    $chaine .=$date1;
    $chaine .='">';
    $chaine .=$date2;
    $chaine .= '</time> dans la catégorie ' ;
    $chaine .= $cat ;
    $chaine .=' avec les étiquettes '.$tags;
    return $chaine ;
}



function katheme_excerpt_more($more){
    return '<a class="more-link" href="' .get_permalink() .'">' . '[lire la suite]' .'</a>';
}

add_filter('expert_more' , 'katheme_excerpt_more');


?>