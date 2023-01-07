<?php

/**
 * @link              https://alvindcaesar.com
 * @since             1.0.0
 * @package           GP_Shortcuts
 *
 * @wordpress-plugin
 * 
 * Plugin Name:       Shortcuts for GeneratePress
 * Plugin URI:        https://github.com/alvindcaesar/gp-shortcuts
 * Description:       Adds a menu to the admin bar to easily jump straight into GeneratePress and GenerateBlocks menus and settings.
 * Version:           1.0.3
 * Author:            Alvind Caesar
 * Author URI:        https://alvindcaesar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gp-shortcuts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( "WPINC" ) ) die;

// Make sure GeneratePress or GeneratePress Child is activated before proceeding.
if ( "generatepress" != ( wp_get_theme() )->get_template() ) return;


define( "GP_SHORTCUTS_URL", plugin_dir_url( __FILE__ ) );
define( "GP_SHORTCUTS_PATH", plugin_dir_path( __FILE__ ) );

function gp_shortcuts_init()
{
	require_once( GP_SHORTCUTS_PATH . "includes/class-gp-shorcuts-init.php" );
	new GP_Shortcuts_Init();
}

add_action( "plugins_loaded", "gp_shortcuts_init" );