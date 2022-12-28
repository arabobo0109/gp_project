<?php

/**
 * @link              https://alvindcaesar.com
 * @since             1.0.0
 * @package           GP_Shortcuts
 *
 * @wordpress-plugin
 * 
 * Plugin Name:       GP Shortcuts
 * Plugin URI:        https://github.com/alvindcaesar/gp-shortcuts
 * Description:       Adds a menu to the admin bar to easily jump straight into GeneratePress and GenerateBlocks menus and settings.
 * Version:           1.0.0
 * Author:            Alvind Caesar
 * Author URI:        https://alvindcaesar.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gp-shortcuts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Make sure GeneratePress or GeneratePress Child is activated before proceeding.
if (("generatepress" != get_option("template")) or 
("generatepress_child" != get_option("stylesheet") and "generatepress" != get_option("stylesheet"))) return;

function my_custom_admin_bar_menu() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('gp_elements-menu');
}

add_action('wp_before_admin_bar_render', 'my_custom_admin_bar_menu');

add_action( "admin_bar_menu", "gp_jumper_admin_menu", 999 );

function gp_jumper_admin_menu( WP_Admin_Bar $wp_admin_bar )
{
	$iconurl = plugin_dir_url( __FILE__ ) . 'assets/images/gp-logo.png';

	$iconspan = '<span class="gp-ab-icon" style="
    float:left; width:22px !important; height:22px !important;
    margin-left: 5px !important; margin-top: 5px !important;
    background-image:url(\'' . $iconurl . '\')!important;background-size: contain;background-repeat: no-repeat;"></span>';

	$wp_admin_bar->add_node(
		array(
			'id'    => 'gp-shortcuts-main',
			'title' => $iconspan . __( 'GP Shortcuts', 'gp-shortcuts' ),
			'href'  => admin_url( 'customize.php?return=%2Fwp-admin%2Fthemes.php%3Fpage%3Dgenerate-options' ),
		)
	);
}