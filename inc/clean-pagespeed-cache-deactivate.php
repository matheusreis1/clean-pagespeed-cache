<?php
/**
 * @package clean-pagespeed-cache
 * 
*/

class CleanPagespeedCacheDeactivate {

    public static function deactivate() {
        flush_rewrite_rules();
    }

}
