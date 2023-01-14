<?php
/*
Plugin Name: Redirect Tag Pages
Plugin URI: http://devopsandplatforms.com/
Description: Redirects tag links to do a search for that tag.
Version: 1.0
Author: David Menache
*/

function wp_redirect_tag_to_home() {
	global $wp_query;
	if ( is_tag() ) {
		$tag = get_queried_object()->name;
		wp_redirect( home_url('/?s='.$tag), 301 );
		exit;
	}
}
add_action('template_redirect', 'wp_redirect_tag_to_home');
?>
