<?php
/**
 * Main plugin class file
 *
 * @package wp-status-message
 */

namespace WPStatusMessage\Classes;

/**
 * Class Plugin
 */
class Plugin {
	/**
	 * Backend controller instance
	 *
	 * @var object Backend controller object
	 */
	private $backend;

	/**
	 * Construct
	 */
	public function __construct() {
		$this->backend = new \WPStatusMessage\Controller\Backend();
		add_action( 'admin_menu', array( $this, 'add_subsite_menu' ), 999 );
		add_action( 'admin_init', array( $this, 'register_settings' ), 1 );
	}

	public function register_settings() {
		register_setting( 'wpsm-options', 'wpsm_enabled', 'intval' );
		register_setting( 'wpsm-options', 'wpsm_override', 'intval' );
		register_setting( 'wpsm-options', 'wpsm_text', 'string' );
	}

	/**
	 * Add subsite menu under WP Admin -> Tools
	 */
	public function add_subsite_menu() {
		add_submenu_page(
			'tools.php',
			'Status message',
			'Status message',
			'manage_options',
			'wpsm-options',
			array( $this->backend, 'index' ),
		);
	}
}
