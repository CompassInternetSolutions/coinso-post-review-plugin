<?php
/*
Plugin Name: Coinso Post Review Plugin
Plugin URI:
Description: Plugin to add review to posts
Version: 0.1.0
Author: ido @ Coinso
Author URI: http://coinso.com
Text Domain: coinso_ppr
Domain Path: /languages
*/

if( !defined('ABSPATH') ){
    exit();
}

add_action('admin_menu', 'coinso_ppr_plugin_menu');
add_action('admin_init', 'coinso_ppr_admin_init');

/*
 * add plugin's options page
 *
 */
function coinso_ppr_plugin_menu(){
    add_options_page('Compass Post Reviews','Compass Post Reviews', 'manage_options','coinso_ppr','coinso_ppr_options' );
}
/*
 * register the settings
 */
function coinso_ppr_admin_init(){
    register_setting('coinso_ppr_group', 'coinso_ppr_dashboard_title');
    register_setting('coinso_ppr_group', 'coinso_ppr_number_of_items');
}
function coinso_ppr_options(){

}