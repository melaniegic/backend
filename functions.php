<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . 'https://cdn2.wpformation.com/style.css' );

}

// ma première action
function dire_bonjour(){
	echo '<p class="hello"> Hello tout le monde !!</p>';
}
add_action( 'mg', 'dire_bonjour');
