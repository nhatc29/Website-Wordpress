<?php
/**
 * Plugin Name: Post List Designer by Category
 * Plugin URL: https://premium.infornweb.com/post-list-designer-pro/
 * Description: Display WordPress Post on your website in List, simple/minimal list and archive list view. Display category post list as well.
 * Version: 2.1.4
 * Author: InfornWeb
 * Author URI: https://premium.infornweb.com/
 * Text Domain: post-list-designer
 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( function_exists( 'pld_fs' ) ) {
	pld_fs()->set_basename( false, __FILE__ );
}

/**
 * Basic plugin definitions
 * 
 * @package Post List Designer
 * @since 1.0.0
 */
if( !defined( 'PLD_VERSION' ) ) {
    define( 'PLD_VERSION', '2.1.4' ); // Version of plugin
}
if( !defined( 'PLD_DIR' ) ) {
    define( 'PLD_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'PLD_URL' ) ) {
    define( 'PLD_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'PLD_PLUGIN_BASENAME' ) ) {
    define( 'PLD_PLUGIN_BASENAME', plugin_basename( __FILE__ ) ); // Plugin base name
}
if( !defined('PLD_POST_TYPE') ) {
    define('PLD_POST_TYPE', 'post'); // Post type name
}
if( !defined('PLD_CAT') ) {
    define('PLD_CAT', 'category'); // Plugin category name
}

/**
 * Activation Hook
 * 
 * Register plugin activation hook.
 * 
 * @package Post List Designer
 * @since 1.0
 */
register_activation_hook( __FILE__, 'pld_install' );

/**
 * Plugin Setup (On Activation)
 * 
 * Does the initial setup,
 * stest default values for the plugin options.
 * 
 * @package Post List Designer
 * @since 1.0.6
 */
function pld_install() {
	
	// Deactivate free version
	if( is_plugin_active('post-list-designer-pro/post-list-designer-pro.php') ) {
		add_action( 'update_option_active_plugins', 'pld_deactivate_pro_version' );
	}	
}

/**
 * Deactivate free plugin
 * 
 * @package Post List Designer
 * @since 1.0.6
 */
function pld_deactivate_pro_version() {
	deactivate_plugins('post-list-designer-pro/post-list-designer-pro.php', true);
}

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package Post List Designer
 * @since 1.0
 */
function pld_load_textdomain() {
    load_plugin_textdomain( 'post-list-designer', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Action to load plugin text domain
add_action('plugins_loaded', 'pld_load_textdomain');

// Including freemius file
include_once( PLD_DIR . '/freemius.php' );

// Functions file
require_once( PLD_DIR . '/includes/bld-functions.php' );

// Script Class File
require_once( PLD_DIR . '/includes/class-bld-script.php' );

// Admin Class File
require_once( PLD_DIR . '/includes/admin/class-bld-admin.php' );

// Shortcode File
require_once( PLD_DIR . '/includes/shortcode/bld-post-list.php' );
require_once( PLD_DIR . '/includes/shortcode/bld-simple-list.php' );
require_once( PLD_DIR . '/includes/shortcode/bld-archive-list.php' );