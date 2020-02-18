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
function fn_abt__unitheme2_render_blocks(&$grid, &$block, $that, &$content){
$device = Registry::get('settings.abt__device');
if (
AREA == 'C'
and $grid['abt__ut2_show_in_tabs'] == 'Y'
and $block['status'] == 'A'
and !empty($block['availability'][$device == 'mobile' ? 'phone' : $device])
) {
$block['tab_id'] = 'abt__ut2_grid_tab_' . $grid['grid_id'] . '_' . $block['block_id'];
$block['abt__ut2_use_ajax'] = $grid['abt__ut2_use_ajax'];
$tab_data = array('title' => $block['name']);
if ($grid['abt__ut2_use_ajax'] == 'Y') {
$tab_data['ajax'] = true;
$tab_data['block'] = $grid['grid_id'] . '_' . $block['block_id'];
$tab_data['abt__ut2_grid_tabs'] = true;
$block['first'] = empty($content);
} else {
$tab_data['js'] = true;
}
Registry::set("navigation.{$grid['grid_id']}." . $block['tab_id'], $tab_data);
}
}
function fn_abt__unitheme2_render_block_content_after($block_schema, $block, &$block_content){
if (AREA == 'C' && !defined('AJAX_REQUEST') and !empty($block['tab_id']) && !empty($block_content)) {
if ($block['abt__ut2_use_ajax'] != 'Y' || !empty($block['first'])) {
$block_content = '<div id="content_' . $block['tab_id'] . '">' . $block_content . '</div>';
} else {
$block_content = '<div id="content_' . $block['tab_id'] . '"><span></span></div>';
}
}
}
