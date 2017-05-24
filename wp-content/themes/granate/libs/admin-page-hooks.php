<?php
/*add_action( 'admin_head-post.php', 'admin_head_post_editing' );
add_action( 'admin_head-post-new.php',  'admin_head_post_new' );
add_action( 'admin_head-edit.php', 'admin_head_post_listing' );

function admin_head_post_editing() {
	echo 'you are editing a post';
}

function admin_head_post_new() {
	echo 'you are adding a post';
}

function admin_head_post_listing() {
	// sample code, handy for custom post types
	global $post_type;
	echo 'you are listing posts, post_type: ' . $post_type ;*
}*/


//---- Показываем админбар только админам ----//
add_action('after_setup_theme', function(){
	if ( ! is_admin() && ! current_user_can('manage_options') )
		show_admin_bar( false );
});

 ?>
