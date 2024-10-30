<?php
/*
Plugin Name: Admin Style
Plugin URI: http://wordpress.org/plugins/bwp-adminstyle/
Description: This is a plugin to change the style of the WordPress dashboard to a more beautiful look.
Author: BrozWP
Version: 1.0.0
Author URI: https://brozwp.ir
*/

define("PS_URI", plugin_dir_url(__FILE__));
define("PS_CSS", trailingslashit(PS_URI . "assets/css"));

if (!function_exists('wpadminfonts' )) {
  function wpadminfonts() {
    wp_enqueue_style('custom_admin_panel_style', PS_CSS  ."wpadminfont.css" );
  }
add_action('admin_enqueue_scripts','wpadminfonts' );
}


function my_login_logo() {
     wp_enqueue_style('custom_admin_panel_style', PS_CSS  ."wpadminfont.css" );
 }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>
