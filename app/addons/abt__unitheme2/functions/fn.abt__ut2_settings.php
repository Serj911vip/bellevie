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
function fn_abt__unitheme2_dispatch_assign_template (){
Registry::set('settings.abt__ut2', fn_get_abt__ut2_settings());
Registry::set('settings.abt__device', fn_abt__ut2_get_device_type());
}
function fn_abt__ut2_get_device_type () {
static $res = '';
if (defined('CONSOLE')) return 'desktop';
if (empty($res)){
$tablet_browser = 0;
$mobile_browser = 0;
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
$tablet_browser++;
}
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
$mobile_browser++;
}
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
$mobile_browser++;
}
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array ('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi',
'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-',
'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi',
'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp',
'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki',
'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage',
'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-',
'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi',
'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda ', 'xda-');
if (in_array($mobile_ua, $mobile_agents)) {
$mobile_browser++;
}
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'opera mini') > 0) {
$mobile_browser++;
$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) ? $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'] : (isset($_SERVER['HTTP_DEVICE_STOCK_UA']) ? $_SERVER['HTTP_DEVICE_STOCK_UA'] : ''));
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
$tablet_browser++;
}
}
$res = ($tablet_browser ? 'tablet' : ($mobile_browser ? 'mobile' : 'desktop'));
}
return $res;
}
function fn_get_abt__ut2_settings($type = '', $full_info = false, $style = '', $from_cache = true){
static $settings;
$lang_code = DESCR_SL;
$company_id = fn_get_runtime_company_id();
$cache_prefix = 'abt__ut2';
$key = "_{$lang_code}_" . md5('settings' . $type . ($full_info ? 'true' : 'false') . $style);
$cache_tables = array('abt__ut2_settings');
if (fn_allowed_for('MULTIVENDOR')) {
$cache_tables[] = 'companies';
}
Registry::registerCache(
array($cache_prefix, $key),
$cache_tables,
Registry::cacheLevel('static'),
true
);
$is_device = function ($i) {
return (empty($i['is_for_all_devices']) or $i['is_for_all_devices'] != 'Y');
};
$is_group = function ($i){
return (!empty($i['is_group']) and $i['is_group'] == 'Y' and !empty($i['items']));
};
if (empty($settings[$key])){
if ($cache = Registry::get($key) and $from_cache) $settings[$key] = $cache;
else {
$schema_settings = fn_get_schema('abt__ut2_settings', ($type == 'less' ? 'less_' : '') . 'objects');
ksort($schema_settings);
uasort($schema_settings, function ($a, $b){
return version_compare($a['position'], $b['position']);
});
foreach ($schema_settings as &$schema_setting) {
ksort($schema_setting['items']);
uasort($schema_setting['items'], function ($a, $b){
return version_compare($a['position'], $b['position']);
});
}
$db_settings = array();
if ($type == 'less'){
$db_temp = db_get_array('SELECT * FROM ?:abt__ut2_less_settings WHERE style = ?s ?p', $style, fn_get_company_condition('?:abt__ut2_less_settings.company_id'));
}else{
$db_temp = db_get_array('SELECT * FROM ?:abt__ut2_settings WHERE lang_code = ?s ?p', $lang_code, fn_get_company_condition('?:abt__ut2_settings.company_id'));
}
if (!empty($db_temp)){
foreach ($db_temp as $db_item){
$db_settings[$db_item['section']][$db_item['name']] = unserialize($db_item['value']);
}
}
foreach ($schema_settings as $s => $section) {
if (!empty($section['items'])){
$items = array();
foreach ($section['items'] as $k => $i) {
if ($is_group($i)){
if ($full_info){
$items[$k] = $i;
foreach ($items[$k]['items'] as $sub_k => $sub_i){
if (isset($db_settings[$s][$k . '.' . $sub_k])){
if ($is_device($sub_i) and isset($items[$k]['items'][$sub_k]['value'])){
$items[$k]['items'][$sub_k]['value'] = array_merge($items[$k]['items'][$sub_k]['value'], $db_settings[$s][$k . '.' . $sub_k]);
}else{
$items[$k]['items'][$sub_k]['value'] = $db_settings[$s][$k . '.' . $sub_k];
}
}
}
}else{
foreach ($i['items'] as $sub_k => $sub_i){
$items[$k][$sub_k] = $sub_i['value'];
if (isset($db_settings[$s][$k . '.' . $sub_k])){
if ($is_device($sub_i) and isset($items[$k][$sub_k])){
$items[$k][$sub_k] = array_merge($items[$k][$sub_k], $db_settings[$s][$k . '.' . $sub_k]);
}else{
$items[$k][$sub_k] = $db_settings[$s][$k . '.' . $sub_k];
}
}
if (!empty($sub_i['suffix'])){
if ($is_device($sub_i)){
$items[$k][$sub_k]['desktop'] .= $sub_i['suffix'];
$items[$k][$sub_k]['tablet'] .= $sub_i['suffix'];
$items[$k][$sub_k]['mobile'] .= $sub_i['suffix'];
}else{
$items[$k][$sub_k] .= $sub_i['suffix'];
}
}
}
}
}else{
if ($full_info){
$items[$k] = $i;
if (isset($db_settings[$s][$k])){
if ($is_device($i) and isset($items[$k]['value'])){
$items[$k]['value'] = array_merge($items[$k]['value'], $db_settings[$s][$k]);
}else{
$items[$k]['value'] = $db_settings[$s][$k];
}
}elseif ($type == 'less' and !empty($i['value_styles'][$style])) {
$items[$k]['value'] = $i['value_styles'][$style];
}
}else{
$items[$k] = $i['value'];
if (isset($db_settings[$s][$k])){
if ($is_device($i) and isset($items[$k])){
$items[$k] = array_merge($items[$k], $db_settings[$s][$k]);
}else{
$items[$k] = $db_settings[$s][$k];
}
}elseif ($type == 'less' and !empty($i['value_styles'][$style])) {
$items[$k] = $i['value_styles'][$style];
}
if (!empty($i['suffix']) and $type != 'less'){
if ($is_device($i)){
$items[$k]['desktop'] .= $i['suffix'];
$items[$k]['tablet'] .= $i['suffix'];
$items[$k]['mobile'] .= $i['suffix'];
}else{
$items[$k] .= $i['suffix'];
}
}
}
}
}
if (!empty($items)){
$settings[$key][$s] = $items;
}
}
}
Registry::set($key, $settings[$key]);
}
}
return $settings[$key];
}
function fn_update_abt__ut2_settings($data, $type = '', $style = ''){
$lang_code = DESCR_SL;
$company_id = fn_get_runtime_company_id();
$settings = fn_get_abt__ut2_settings($type, true, $style);
foreach ($settings as $section => $items) {
foreach ($items as $k => $item) {
if (!empty($item['is_group']) and $item['is_group'] == 'Y' and !empty($item['items'])){
foreach ($item['items'] as $sub_k => $sub_item) {
$name = $k . '.' . $sub_k;
fn_update_abt__ut2_setting($type, $section, $name, $company_id, $lang_code, $sub_item, $data[$section][$name], $style);
}
}else{
$name = $k;
fn_update_abt__ut2_setting($type, $section, $name, $company_id, $lang_code, $item, $data[$section][$name], $style);
}
}
}
return true;
}
function fn_update_abt__ut2_setting ($type, $section, $name, $company_id, $lang_code, $item, $v, $style){
$v = serialize($v);
$d = array(
'section' => $section,
'name' => $name,
'company_id' => $company_id,
'lang_code' => $lang_code,
'value' => $v,
);
if ($type == 'less'){
$d['style'] = $style;
db_query("REPLACE INTO ?:abt__ut2_less_settings ?e", $d);
$less_file = Registry::get('config.dir.design_frontend') . 'abt__unitheme2/styles/data/' . $style;
if (file_exists($less_file)){
$less = fn_get_contents($less_file);
if (!empty($less)){
$v = unserialize($v);
if ($item['type'] == 'checkbox'){
$v = ($v == 'Y') ? 'true' : 'false';
}
$v .= (!empty($item['suffix'])) ? $item['suffix'] : '';
$less_var = '@abt__ut2_' . $section . '_' . $name . ': ' . $v . ";\n";
if (preg_match('/@abt__ut2_' . $section . '_' . $name . ':.*?;/m', $less)) {
$less = preg_replace('/(*ANYCRLF)@abt__ut2_' . $section . '_' . $name . ':.*?;$/m', str_replace("\n", '', $less_var), $less);
} else {
$less .= $less_var;
}
fn_put_contents($less_file, $less);
}
}
}else{
$n = db_get_field('SELECT `name` FROM ?:abt__ut2_settings
WHERE `section` = ?s AND `name` = ?s ?p', $section, $name, fn_get_company_condition('?:abt__ut2_settings.company_id'));
if (empty($n)){
foreach (fn_get_translation_languages() as $d['lang_code'] => $l) {
db_query('INSERT INTO ?:abt__ut2_settings ?e', $d);
}
}else{
db_query('REPLACE INTO ?:abt__ut2_settings ?e', $d);
}
if (!isset($item['multilanguage']) or $item['multilanguage'] == 'N'){
db_query('UPDATE ?:abt__ut2_settings SET value = ?s WHERE `section` = ?s AND `name` = ?s ?p', $v, $section, $name, fn_get_company_condition('?:abt__ut2_settings.company_id'));
}
}
return true;
}
