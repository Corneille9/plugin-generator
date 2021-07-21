<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              !@AuthorUri@!
 * @since             1.0.0
 * @package           !@pluginslut@!
 *
 * @wordpress-plugin
 * Plugin Name:       !@PluginName@!
 * Plugin URI:        !@PluginUri@!
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            !@AuthorName@!
 * Author URI:        !@AuthorUri@!
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       !@pluginslut@!
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( '!@PLUGINSLUT@!_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-!@pluginslut@!-activator.php
 */
function activate_!@pluginslut@!() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-!@pluginslut@!-activator.php';
	!@pluginslut@!_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-!@pluginslut@!-deactivator.php
 */
function deactivate_!@pluginslut@!() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-!@pluginslut@!-deactivator.php';
	!@pluginslut@!_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_!@pluginslut@!' );
register_deactivation_hook( __FILE__, 'deactivate_!@pluginslut@!' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-!@pluginslut@!.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_!@pluginslut@!() {

	$plugin = new !@pluginslut@!();
	$plugin->run();

}
run_!@pluginslut@!();
