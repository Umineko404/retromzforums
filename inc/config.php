<?php
/* Database Configuration */
$config['database']['type'] = 'pgsql';
$config['database']['hostname'] = getenv('PGHOST');
$config['database']['username'] = getenv('PGUSER');
$config['database']['password'] = getenv('PGPASSWORD');
$config['database']['database'] = getenv('PGDATABASE');
$config['database']['table_prefix'] = 'mybb_';

/* Admin CP, Cookie, and other settings */
$config['admin_dir'] = 'admin';
$config['hide_admin_links'] = 1;
$config['cookie_domain'] = '.retromzforums-production.up.railway.app'; // Adjust to your Railway domain
$config['cookie_path'] = '/';
$config['cookie_prefix'] = 'mybb_';

/* Other MyBB settings */
$config['cache']['type'] = 'file'; // Default cache type
$config['debug_mode'] = false;

/* End of configuration */
define("IN_MYBB", 1);
?>