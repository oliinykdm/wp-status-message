<?php
/**
 * Abstract controller
 *
 * @package wp-status-message
 */

namespace WPStatusMessage\Controller\Base;

/**
 * Class Plugin
 */
abstract class Controller {
	/**
	 * Autoload init function
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Internal render settings
	 *
	 * @param string $filename File name.
	 * @param array  $params Params.
	 * @param string $controller_name Controller name.
	 *
	 * @return false|string|void
	 */
	private function pre_render( $filename, $params, $controller_name ) {
		$file = join(
			'/',
			array(
				CORE_DIR,
				'view',
				$controller_name,
				'templates',
				$filename . '.php',
			)
		);
		if ( file_exists( $file ) ) {
			ob_start();
			/**
			 * Create $data array that will have all data in the template
			 */
			$data = $params;
			require $file;
			return ob_get_clean();
		} else {
			die( 'Error loading template: ' . esc_attr( $file ) );
		}
	}

	/**
	 * Render method
	 *
	 * @param string $filename File name.
	 * @param array  $params Params.
	 * @param false  $display Return or echo.
	 * @param null   $object Object.
	 *
	 * @return false
	 */
	public function render( $filename, $params = array(), $display = true, $object = null ) {
		if ( $display ) {
			echo self::pre_render( $filename, $params, $this->get_name( ( $object ) ? $object : get_class( $this ) ) );
		} else {
			return self::pre_render( $filename, $params, $this->get_name( ( $object ) ? $object : get_class( $this ) ) );
		}
		return false;
	}

	/**
	 * Get object name
	 *
	 * @param object $object Object name.
	 *
	 * @return string
	 */
	public function get_name( $object ) {
		$path = explode( '\\', $object );
		return strtolower( array_pop( $path ) );
	}

	/**
	 * Send json to the client
	 *
	 * @param string $status Status.
	 * @param array  $data Data array.
	 */
	public function send_json( $status, $data ) {
		wp_send_json(
			array(
				'result' => $status,
				'data'   => $data,
			)
		);

		wp_die();
	}
	/**
	 * Init function
	 *
	 * @return mixed
	 */
	abstract public function init();
}