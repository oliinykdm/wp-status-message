<?php
/**
 * Backend controller file
 *
 * @package wp-status-message
 */

namespace WPStatusMessage\Controller;

/**
 * Class Plugin
 */
class Backend extends \WPStatusMessage\Controller\Base\Controller {

	public function init() {

	}
	public function index() {
		$a = array('test' => array( 1=> 'test2', 2=> 'test3'));
		$this->render( 'index', $a );
	}
}
