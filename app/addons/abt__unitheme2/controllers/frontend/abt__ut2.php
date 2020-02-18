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
if (!defined('BOOTSTRAP')) {die('Access denied');}
if ($_SERVER[ab_____(base64_decode('U0ZSVkZUVWBORlVJUEU='))] == ab_____(base64_decode('UVBUVQ=='))) {
if ( $mode == 'ajax_block_upload' && defined('AJAX_REQUEST') ) {
$res = array();
switch ( $action ) {
case "social_buttons":
Tygh::$app['view']->assign('provider_settings', fn_get_sb_provider_settings( array(
'object_id' => $_REQUEST['additional'],
'object' => 'products',
'language' => CART_LANGUAGE
) ));
$res = array('html' => Tygh::$app['view']->fetch('addons/social_buttons/blocks/components/providers.tpl'));
break;
case 'load_menu':
$result_ids = (array) explode(',', $_REQUEST['result_ids']);
if (!empty($result_ids)){
foreach ($result_ids as $result_id){
Tygh::$app['ajax']->assignHtml($result_id, fn_abt__ut2_ajax_menu_get($result_id));
}
}
exit;
default:
$res = array('html' => 'no data');
}
Tygh::$app['ajax']->assign('result', $res);
}
}