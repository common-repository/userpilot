<?php
/*
 * Plugin Name: Userpilot
 * Version: 1.1.3
 * Description: Product Experience Software.
 * Author: userpilot
 * Author URI: https://userpilot.io
 */

defined('ABSPATH') or die("Restricted access!");

define('userpilot_DIR_74BFEF808DDF3', plugin_dir_path(__FILE__));
define('userpilot_URL_74BFEF808DDF3', plugin_dir_url(__FILE__));
defined('userpilot_PATH_74BFEF808DDF3') or define('userpilot_PATH_74BFEF808DDF3', untrailingslashit(plugins_url('', __FILE__)));

require_once(userpilot_DIR_74BFEF808DDF3 . 'includes/core.php');
require_once(userpilot_DIR_74BFEF808DDF3 . 'includes/nav.php');
require_once(userpilot_DIR_74BFEF808DDF3 . 'includes/admin.php');
require_once(userpilot_DIR_74BFEF808DDF3 . 'includes/widget.php');


?>
