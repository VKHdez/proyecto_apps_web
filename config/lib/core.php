<?php

# ---------- PRINCIPAL PATH
// Defines Web Root
define('WEB_ROOT', substr( $_SERVER['SCRIPT_NAME'], 0, strpos($_SERVER['SCRIPT_NAME'], '/index.php')));

// Defines Path to the Files
define('ROOT_PATH', realpath(dirname(__FILE__).'/../../'));

// Defines CMS path
define('CMS_PATH', ROOT_PATH . '/src/base/');

/*echo WEB_ROOT.'<br>';
echo ROOT_PATH.'<br>';
echo CMS_PATH.'<br>';*/

# ---------- ROUTES PATH
// Includes System Routes path
