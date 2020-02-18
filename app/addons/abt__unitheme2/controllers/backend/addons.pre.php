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
if ($mode == 'refresh') {
if (!empty($_REQUEST['addon']) and $_REQUEST['addon'] == 'abt__unitheme2') {
$addon = 'abt__unitheme2';
$config= array(
'gid' => '241807509',
'conds_words' => array(
'abt_menu_icon_items',
'abt_menu_long_names',
'abt_menu_long_names_max_width',
'no_hidden_elements_second_level_view',
'elements_per_column_third_level_view',
'abt_menu_ajax_load',
),
);
$po_head = array(
'ru' => "msgid \"\"\nmsgstr \"Project-Id-Version: tygh\\n\"\n\"Content-Type: text/plain; charset=UTF-8\\n\"\n\"Language-Team: Russian\\n\"\n\"Language: ru_RU\\n\"\n",
'en' => "msgid \"\"\nmsgstr \"Project-Id-Version: tygh\\n\"\n\"Content-Type: text/plain; charset=UTF-8\\n\"\n\"Language-Team: English\\n\"\n\"Language: en_US\\n\"\n",
);
$langs = array(1 => 'ru', 2 => 'en');
$conds_words = array('abt__', 'ab__',);
$no_trim_str = array(' - ', ' ');
$content = '';
if (!empty($content) and is_array($content)) {
$po_content = array('ru' => '', 'en' => '',);
$data = array();
foreach ($content as $str){
$check = false;
$cws = (!empty($config['conds_words'])) ? array_merge($conds_words, $config['conds_words']) : $conds_words;
foreach ($cws as $w){
if (strpos($str, $w) !== false){
$check = true;
break;
}
}
if ($check){
$s = str_getcsv($str);
$id = isset($s[0]) ? trim($s[0]) : "";
if ($id){
$msgctxt = $id;
$msgid = $id;
if (strpos($id, 'name::') === 0){
$msgctxt = "Addons::{$id}";
$msgid = str_replace('name::', '', $id);
}elseif (strpos($id, 'description::') === 0){
$msgctxt = "Addons::{$id}";
$msgid = str_replace('description::', '', $id) . "_description";
}elseif (strpos($id, 'SettingsSections::' . $addon . '::') !== false){
$msgctxt = $id;
$msgid = str_replace('SettingsSections::' . $addon . '::', '', $id);
}elseif (strpos($id, 'SettingsOptions::' . $addon . '::') !== false){
$msgctxt = $id;
$msgid = str_replace('SettingsOptions::' . $addon . '::', '', $id);
}elseif (strpos($id, 'SettingsTooltips::' . $addon . '::') !== false){
$msgctxt = $id;
$msgid = str_replace('SettingsTooltips::' . $addon . '::', '', $id);
}elseif (strpos($id, 'SettingsVariants::' . $addon . '::') !== false){
$msgctxt = $id;
list(,,,$msgid) = explode('::', $id);
}else{
$msgctxt = "Languages::{$id}";
}
$text = array();
foreach ($langs as $k => $l){
$text[$l] = isset($s[$k]) ? $s[$k] : $id;
$text[$l] = str_replace(array('"', ' ', "\n"), array('\"', '', "\"\n\""), $text[$l]);
if (!in_array($text[$l], $no_trim_str)) {
$text[$l] = trim($text[$l]);
}
if (preg_match_all('/\{\s*(?P<str>[^}]+?)\s*\}/', $text[$l], $matches)){
foreach ($matches[1] as $match){
if (!empty($data[$match][$l])){
$text[$l] = str_replace('{' . $match .'}', $data[$match][$l], $text[$l]);
}
}
}
$data[$id][$l] = $text[$l];
$po_content[$l] .= "\nmsgctxt \"{$msgctxt}\"\nmsgid \"{$msgid}\"\nmsgstr \"{$text[$l]}\"\n";
}
}
}
}
foreach ($langs as $k => $l){
if (strlen(trim($po_content[$l]))){
$po_file = Registry::get('config.dir.lang_packs') . "$l/addons/$addon.po";
fn_put_contents($po_file, $po_head[$l] . $po_content[$l] . "\n#. Alexbranding. Do not modify this file manually!");
fn_set_notification('N', __('notice'), $po_file . ' was updated!');
}
}
}
}
}
}