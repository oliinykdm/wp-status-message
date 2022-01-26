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
	 * Init function
	 *
	 * @return mixed
	 */
	abstract public function init();
}