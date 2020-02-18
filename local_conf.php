<?php

// if ($_SERVER['REMOTE_ADDR'] == '176.99.104.72') {
// if ($_SERVER['REMOTE_ADDR'] == '46.148.183.143') {
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {

    define('DEBUG_MODE', true);
    define('DEVELOPMENT', true);

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    ini_set('display_startup_errors', true);
    
    $config['tweaks'] = array (
        'disable_block_cache' => true,
    );

}


$config['db_host'] = 'localhost';
$config['db_name'] = 'bellevie';
$config['db_user'] = 'root';
$config['db_password'] = '';

$config['http_host'] = 'bellevie.gift';
$config['http_path'] = '';

$config['https_host'] = 'bellevie.gift';
$config['https_path'] = '';


$config['cache_backend'] = 'file';
$config['session_backend'] = 'database';

$config['admin_index'] = 'my_admin_panel.php';