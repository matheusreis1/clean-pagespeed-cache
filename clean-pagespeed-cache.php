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

    private $pluginName;

    public function __construct() {
        $this->pluginName = plugin_basename(__FILE__);
    }

    public function register() {
        add_action('admin_menu', array($this, 'add_admin_page'));
    }

    public function add_admin_page() {
        add_menu_page('Clean PageSpeed Cache', 'Clean PageSpeed Cache', 'manage_options', 'clean_pagespeed_cache', array($this, 'admin_index'),
            'dashicons-trash', 110);
    }

    public function admin_index() {
        require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
    }

}

if (class_exists('CleanPagespeedCache')) {
    $cleanPagespeedCache = new CleanPagespeedCache();
    $cleanPagespeedCache->register();
}

// activation
require_once plugin_dir_path(__FILE__) . 'inc/clean-pagespeed-cache-activate.php';
register_activation_hook(__FILE__, array('CleanPagespeedCacheActivate', 'activate'));

// deactivation
require_once plugin_dir_path(__FILE__) . 'inc/clean-pagespeed-cache-deactivate.php';
register_activation_hook(__FILE__, array('CleanPagespeedCacheDeactivate', 'deactivate'));
