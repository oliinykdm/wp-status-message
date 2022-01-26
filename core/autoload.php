<?php if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
const CORE_DIR = __DIR__;
/**
 * WP Status Message Core Loader
 * @param $class
 */
function wpsm_core_loader( $class ) {

}
spl_autoload_register( 'wpsm_core_loader', true, true );
