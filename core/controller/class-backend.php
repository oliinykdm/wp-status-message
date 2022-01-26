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
		?>
		<div class="wrap my-tools-parent">

			<p>Foo bar. Bla bla. Your content here.</p>
		</div>
		<?php
	}
}
