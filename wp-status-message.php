<?php
/*
Plugin Name: WP Status Message
Plugin URI: https://github.com/oliynykdm/wp-status-message
Description: A great plugin to show the status in the WordPress Admin Dashboard (especially for WPMU DEV team)
Author: Dima Oliynyk
Version: 1.0
Author URI: https://www.oliynyk.net
*/

require_once __DIR__ . '/core/autoload.php';

$plugin_startup = new \WPStatusMessage\Classes\Plugin();





load_plugin_textdomain( 'wp-status-message', false, basename( __DIR__ ) . '/languages/' );
