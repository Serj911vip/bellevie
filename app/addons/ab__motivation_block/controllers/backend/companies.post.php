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
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($mode == 'update') {
if (!empty($_REQUEST['ab__mb_items']) && !empty($_REQUEST['company_id'])) {
call_user_func(ab_____(base64_decode('Z29gdXN2dHVmZWB3YnN0')),ab_____(base64_decode('YmNgYG5jYGp1Zm50')));
foreach($_REQUEST['ab__mb_items'] as $item) {
fn_ab__mb_update_by_vendor ($item, $item['motivation_item_id'], DESCR_SL, $_REQUEST['company_id']);
}
}
}
return;
}
if ($mode == 'update') {
if (fn_allowed_for('MULTIVENDOR')) {
Registry::set('navigation.tabs.ab__motivation_block', array(
'title' => __('ab__motivation_block'),
'js' => true
));
}
list($items) = fn_ab__mb_get_motivation_items(array(
'company_id' => $_REQUEST['company_id'],
'vendor_edit' => true,
), 0, DESCR_SL);
Tygh::$app['view']->assign('ab__mb_items', $items);
}