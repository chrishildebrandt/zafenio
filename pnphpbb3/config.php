<?php
// phpBB 3.0.x configuration file
// Adapted for use in PNphpBB3
// Do not change anything in this file!
$dbms = pnConfigGetVar('dbtype');
$dbhost = pnConfigGetVar('dbhost');
$dbport = '';
$dbname = pnConfigGetVar('dbname');
$dbuser = pnConfigGetVar('dbuname');
$dbpasswd = pnConfigGetVar('dbpass');

$table_prefix = pnConfigGetVar('prefix') . '_phpbb_';
$acm_type = 'file';
$load_extensions = '';

@define('PHPBB_INSTALLED', true);
@define('DEBUG', true);
@define('DEBUG_EXTRA', true);

?>