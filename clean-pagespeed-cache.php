<?php
/**
 * @package clean-pagespeed-cache
 * 
 * Plugin Name: Clean PageSpeed Cache
 * Description: Plugin to clean PageSpeed Cache
 * Version: 1.0.0
 * Author: Matheus "matheusreis1" Reis
 * Author URI: https://github.com/matheusreis1
 * License: GPLv2 or later
 * Text Domain: clean-pagespeed-cache
*/

defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

class CleanPagespeedCache {

}

if (class_exists('CleanPagespeedCache')) {
    $cleanPagespeedCache = new CleanPagespeedCache();

}
