<?php
if (!defined('config')) {
    define('config', 'true', false);


define('DB_NAME', 'kms_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASS', '');


define('DB_HOST', 'localhost');

$GLOBALS['CONFIG']['db_prefix'] = 'odm_';


if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
}
