<?php
/**
 * @package Internals
 *
 * Code used when the plugin is removed (not just deactivated but actively deleted through the WordPress Admin).
 */

if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();

global $wpdb;
	// Delete options table data of wp ab theme testing plugin.
	$wpdb->query("DELETE FROM $wpdb->options WHERE option_name like 'wpabtheme%'");
