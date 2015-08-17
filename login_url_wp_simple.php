<?php
/*
Plugin Name: Login URL WP Simple
Plugin URI: https://github.com/eltondev/Login-URL-WP-Simple
Description: Simple custom url for login wordpress
Version: 1.0
Author: EltonDEV
Author URI: http://eltondev.com.br
*/

register_activation_hook( __FILE__, 'login_url_wp_activation' );
function login_url_wp() {
    login_url_wp_rewrite();
    flush_rewrite_rules();
}
 
register_deactivation_hook( __FILE__, 'login_url_wp_deactivate' );
function login_url_wp_deactivate() {
    flush_rewrite_rules();
}
 
// Create new rewrite rule
add_action( 'init', 'login_url_wp_deactivate_rewrite' );
function login_url_wp_deactivate_rewrite() {
    add_rewrite_rule( 'administrador/?$', 'wp-login.php', 'top' );
}
