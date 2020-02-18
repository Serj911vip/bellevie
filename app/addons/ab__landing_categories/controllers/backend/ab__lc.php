<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2019   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
if (!defined('BOOTSTRAP')) { die('Access denied'); }
use Tygh\Registry;
use Tygh\Ab_landingCategories\Demodata;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if( $mode == 'demodata' ) {
switch ( $action ) {
case 'category':
if( Demodata::install_category() ){
fn_set_notification('N', __('notice'), 'Demo category was installed successfully');
} else {
fn_set_notification('E', __('error'), 'An error has been occurred! Please, try again');
};
break;
case 'add_all':
fn_ab__landing_categories_install_demodata();
break;
default:
fn_print_die("There is no such demodata");
break;
}
} elseif ($mode == 'export_category' && !empty($action)) {
Demodata::export_category(explode(',', $action));
}
return;
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aWZtcQ==')) and call_user_func(ab_____(base64_decode('an'.'RgY'.'nNz'.'Yno=')),call_user_func(ab_____(base64_decode('V'.'Xpo'.'aV1CQ'.'0JOYm9'.'iaG'.'ZzOz'.'tkaWBi')),true)) ) {
return;
}