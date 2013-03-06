<?php
// Settings for the Open Ready-to-use Blog 7.x-2.0-b4 profile
// Extract the site URL
if ($_SERVER['SERVER_NAME']) {
  $site_url = $_SERVER['SERVER_NAME'];
}
else {
  $site_url = str_replace(array('sites/', '/files'), '', $conf['file_public_path']);
}
/**
 * Memcache settings
 */
$conf['cache_backends'][] = 'sites/all/modules/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
// The 'cache_form' bin must be assigned no non-volatile storage.
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
// Separate cache data for each site
$conf['memcache_key_prefix'] = $site_url;
// Specify the array of memcache servers and bins
$conf['memcache_servers'] = array(
        'localhost:11211' => 'default',
);
$conf['memcache_bins'] = array(
        'cache' => 'default',
);

