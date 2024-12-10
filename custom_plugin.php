<?php

/*
Plugin Name:  Custom Plugin
Plugin URI:   https://www.wpbeginner.com
Description:  Custom Music Plugin
Version:      1.0
Author:       Mike Sirois
Author URI:   https://www.wpbeginner.com
Text Domain:  custom_plugin
*/

// Define the plugin's absolute path, for use in INCLUDE and REQUIRE functions
if ( ! defined( 'CUSTOM_PLUGIN_ABSPATH' ) ) 
{ define( 'CUSTOM_PLUGIN_ABSPATH', plugin_dir_path( __FILE__ ) );}

// Define the prefix for the plugin's options - Shared across all custom plugin
if ( ! defined( 'CUST_PREFIX' ) )
{ define( 'CUST_PREFIX', 'custom_' );}

// Initialize the main plugin functions
require_once __DIR__ . '/includes/functions-main.php';