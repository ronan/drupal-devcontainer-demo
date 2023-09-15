<?php
assert_options(ASSERT_ACTIVE, TRUE);
assert_options(ASSERT_EXCEPTION, TRUE);

$config['system.site']['name'] = 'My Drupal site';

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

# $settings['cache']['bins']['render'] = 'cache.backend.null';
# $settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';
# $settings['cache']['bins']['page'] = 'cache.backend.null';
# $settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
# $settings['extension_discovery_scan_tests'] = TRUE;

$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;
# $settings['config_exclude_modules'] = ['devel', 'stage_file_proxy'];
$databases['default']['default'] = array (
  'database' => 'drupal10',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'isolation_level' => 'READ COMMITTED',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['config_sync_directory'] = 'sites/default/files/config_RVEBvMII0CR4mHJ_5z26YRQVUSwDbDBiJOz85M3Rw74nuOtkKWlFDdMu26VUnJUNGeE5xmm9_g/sync';
$settings['hash_salt'] = 'x';