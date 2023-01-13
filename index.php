<?php
/*
Plugin Name: Redirect Tag Pages
Plugin URI: http://yourdomain.com/
Description: Redirects all pages marked with a particular tag to an alternate Wordpress page named Tags
Version: 1.0
Author: David Menache
*/

add_action( 'template_redirect', 'redirect_tag_pages' );

function redirect_tag_pages() {
    if ( is_tag() ) {
        wp_redirect( home_url( 'tags' ) );
        exit;
    }
}
?>
