<?php

$databases['default']['default'] = array (
    'database' => 'drupal10',
    'username' => 'drupal10',
    'password' => 'drupal10',
    'prefix' => '',
    'host' => 'database',
    'port' => '3306',
    'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
    'driver' => 'mysql',
    'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
  );

// No preprocessing for local development.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// No cache
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/services.lando.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$config['system.logging']['error_level'] = 'verbose';
