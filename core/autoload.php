<?php
/**
 * Autoload file
 * @package wp-status-message
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
const CORE_DIR = __DIR__;
/**
 * SPL Autoloader class
 *
 * @param string $class Class name with namespace.
 */
function wpsm_core_loader( $class ) {
	if ( preg_match( '/^WPStatusMessage\\\\(.+)?([^\\\\]+)$/U', ltrim( $class, '\\' ), $match ) ) {
		$file = __DIR__ . DIRECTORY_SEPARATOR
			. strtolower( str_replace( '\\', DIRECTORY_SEPARATOR, preg_replace( '/([a-z])([A-Z])/', '$1_$2', $match[1] ) ) )
			. 'class-' . strtolower( $match[2] )
			. '.php';
		if ( is_readable( $file ) ) {
			require_once $file;
		}
	}
}
spl_autoload_register( 'wpsm_core_loader', true, true );
