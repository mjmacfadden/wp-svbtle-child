<?php

/****************REGISTER NAVIGATION MENU********************/

function register_my_menu() {
  register_nav_menus(
    array( 'navigation-menu' => __( 'Navigation' ) )
  );
}
add_action( 'init', 'register_my_menu' );

/****************REGISTER HEADER WIDGET********************/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Header Widget',
		'id' => 'header_widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
