<?php
/*
Plugin Name: Login URL WP Simple
Plugin URI: https://github.com/eltondev/Login-URL-WP-Simple
Description: Simple custom url for login wordpress
Version: 1.0
Author: EltonDEV
Author URI: http://eltondev.com.br
*/

register_activation_hook( __FILE__, 'login_url_wp_true' );
    function login_url_wp_true() {
      login_url_wp_rewrite();
      flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'login_url_wp_false' );
   function login_url_wp_false() {
     flush_rewrite_rules();
}
add_action( 'init', 'login_url_wp_rewrite' );
    function login_url_wp_rewrite() {
      add_rewrite_rule( 'administrator/?$', 'wp-login.php', 'top' );
}
