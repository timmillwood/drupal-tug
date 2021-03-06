<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'drupal',
      'username' => 'admin',
      'password' => 'changeme',
      'host' => 'mysql-server',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

if(file_exists('sites/all/modules/memcache/memcache.inc')){
$conf['memcache_servers'] = array('memcache-server:11211'=>'default');
$conf['cache_backends'][] = 'sites/all/modules/memcache/memcache.inc';
$conf['lock_inc'] = 'sites/all/modules/memcache/memcache-lock.inc';
$conf['memcache_stampede_protection'] = TRUE;
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['page_cache_without_database'] = TRUE;
$conf['page_cache_invoke_hooks'] = FALSE;
}
