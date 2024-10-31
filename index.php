<?php
/*

Plugin Name: PixoPoint Menu Plugin
Plugin URI: http://pixopoint.com/pixopoint-menu/
Description: A WordPress plugin which adds a menu to your WordPress site. Visit the <a href="http://pixopoint.com/pixopoint-menu/">PixoPoint Menu Plugin page</a> for more information about the plugin, or our navigation <a href="http://pixopoint.com/forum/index.php?board=4.0">support board</a> for help with adding the menu to your theme.
Author: PixoPoint Web Development / Ryan Hellyer
Version: 0.8
Author URI: http://pixopoint.com/

Copyright (c) 2009 PixoPoint Web Development

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

*/

// Set developmental mode (when set to 'on' this will activate new features of the plugin which are actively under development)
$pixo_developmental = '';

// Version number as displayed in source code
$pixopoint_menu_version = '0.8';

// URL for coding engine
$pixopoint_codingengine = 'http://pixopoint.com/codingengine/0.4alpha/';

// Add localization support
function my_init() {load_plugin_textdomain ('pixopoint_theme', "/wp-content/plugins/pixopoint-menu/languages/", false );} // If you know how to avoid using "wp-content" here please contact me ... http://pixopoint.com/contact/?
add_action('init', 'my_init');

// Sets javsscript and images location and gets CSS
$pixopoint_menu_images = WP_PLUGIN_URL.'/pixopoint-menu/images/';
$javascript_location = WP_PLUGIN_URL.'/pixopoint-menu/scripts/';
$pixopoint_menu_css = get_option('suckerfish_css');

//	Checks if editing pane is set to be on or not
if (isset($_POST['enableeditingpane'])) {update_option('suckerfish_editingpane', 'on');} // Enable editing pane
elseif (isset($_POST['disableeditingpane'])) {update_option('suckerfish_editingpane', '');} // Disable editing pane

// If in admin page, then load admin page stuff
if (is_admin()) {require('admin_page.php');}

// If not on admin page ...
else {

	// If maintenance mode is off then immediately loads plugin
	if (get_option('pixopoint_menu_maintenance') != 'on' || (get_option('pixopoint_menu_maintenance') == 'on' AND $_REQUEST['pixopoint-menu'] == 'on')) {
		// Load Generator
		if (get_option('suckerfish_editingpane') == 'on') {require('generator.php');}
		// Load plugin core
		require('core.php');
	}

}


?>
