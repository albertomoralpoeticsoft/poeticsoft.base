<?php

/**
 *
 * Plugin Name: Poetic Soft Base
 * Plugin URI: http://poeticsoft.com/plugins/poeticsoft-base
 * Description: Basic Utils & Functions for all Poeticsoft Tools
 * Version: 0.00
 * Author: Poeticsoft Team
 * Author URI: http://poeticsoft.com/team
 */

if (! defined('ABSPATH')) { exit; }

require __DIR__ . '/tools/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
  'https://poeticsoft.com/plugins/poeticsoft-base/poeticsoft-base.json',
  __FILE__,
  'poeticsoft-base'
);

require_once __DIR__ . '/class/poeticsoft-base.php';

Poeticsoft_Base::get_instance();