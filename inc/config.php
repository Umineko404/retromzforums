<?php
$config['database']['type'] = 'mysqli';
$config['database']['database'] = 'railway';
$config['database']['table_prefix'] = 'mybb_';
$config['database']['hostname'] = 'mysql.railway.internal'; // e.g., containers-us-west-123.railway.app
$config['database']['username'] = 'root';
$config['database']['password'] = 'RefrZNUiMAUsRMsGAQUArxERdJsyrVAy';

$config['admin_dir'] = 'admin';
$config['hide_admin_links'] = 1;
$config['cookie_domain'] = '.retromzforums-production.up.railway.app'; // or leave blank if unsure
$config['cookie_path'] = '/';
$config['cookie_prefix'] = 'mybb_';

$config['cache_store'] = 'files';
$config['cache']['type'] = 'file';
$config['debug_mode'] = false;

define("IN_MYBB", 1);
?>
