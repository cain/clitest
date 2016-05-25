<?php
define('DB_NAME', 'server1-wp-mBdXdYAS');
define('DB_USER', 'P5kQxUohCBx1');
define('DB_PASSWORD', 'RYTuYImyUZrBvPPb');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'xdkBp7gx5xqAmr7OVcypkO1R9wPQVEZoZJ3PpmtK');
define('SECURE_AUTH_KEY',  '1oNRp2KfRLQu1Dpr8nF97pPPP2teBcfYrwM9Ii5V');
define('LOGGED_IN_KEY',    'YET8cZghz6Zv9Ti5ngU0xwExYfqvikBZTje9idSO');
define('NONCE_KEY',        '92Tlw7PyrS47ehTB4TbM8OuW3XkmRCZcl91qeHHP');
define('AUTH_SALT',        'nlJJIjNGw3CJZG5VVmeV7PZcxC5j9hTh0w393Yug');
define('SECURE_AUTH_SALT', 'vPVuXFvuQwk8kBTQxzgxX19IWwShKo2eSnEsvwD6');
define('LOGGED_IN_SALT',   'J75EMJChFHEGXIPm2uKqNCLAu21U1ppfB6BA6890');
define('NONCE_SALT',       'b7QKItzcXcEcdSb1huRYvxaoUKUqlUDqHIRsx1az');

$table_prefix  = 'wp_fc9895f9ad_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
