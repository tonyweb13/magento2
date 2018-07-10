<?php
return [
  'backend' => [
    'frontName' => 'admin_magento'
  ],
  'crypt' => [
    'key' => 'a0cef28101d11efb9581a136e0606c1f'
  ],
  'db' => [
    'table_prefix' => 'tbl_',
    'connection' => [
      'default' => [
        'host' => 'localhost',
        'dbname' => 'db_magento',
        'username' => 'root',
        'password' => '',
        'active' => '1'
      ]
    ]
  ],
  'resource' => [
    'default_setup' => [
      'connection' => 'default'
    ]
  ],
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'session' => [
    'save' => 'files'
  ],
  'cache_types' => [
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1
  ],
  'install' => [
    'date' => 'Wed, 16 May 2018 04:07:48 +0000'
  ]
];
