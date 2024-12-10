<?php

// What are you doing here? Get out of here!
if ( ! defined( 'ABSPATH' ) ) { exit; }

// Main plugin functionality
// Using 'file_exists' to check if the file exists

// The list of the Arrays used throughout the theme
if ( file_exists( CUST_PLUGIN_ABSPATH . 'includes/arrays.php' ) )
    include_once CUST_PLUGIN_ABSPATH . 'includes/arrays.php';