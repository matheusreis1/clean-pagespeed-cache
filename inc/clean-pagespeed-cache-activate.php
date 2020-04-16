<?php
/**
 * @package clean-pagespeed-cache
 * 
*/

class CleanPagespeedCacheActivate {

    public static function activate() {
        flush_rewrite_rules();
    }

}
