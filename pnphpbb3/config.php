<?php
// phpBB 3.0.x configuration file
// Adapted for use in PNphpBB3
// Do not change anything in this file!

$info = DBConnectionStack::getConnectionInfo();

$dbms = $info['dbtype'];
$dbhost = $info['dbhost'];
$dbport = '';
$dbname = $info['dbname'];
$dbuser = $info['dbuname'];
$dbpasswd = $info['dbpass'];

$table_prefix = pnConfigGetVar('prefix') . '_phpbb3_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
@define('DEBUG', true);
@define('DEBUG_EXTRA', true);

$modname = basename(dirname( __FILE__ ));
@define('PHPBB_MODULE_NAME', $modname);
@define('PHPBB_ROOT_PATH', 'modules/' . $modname . '/');
?>