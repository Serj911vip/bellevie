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
use Tygh\Languages\Languages;
foreach (glob(Registry::get('config.dir.addons') . '/abt__unitheme2/functions/fn.abt__ut2_*.php') as $functions) require_once $functions;
function fn_abt__ut2_install () {
$objects = array(
array( 't' => '?:bm_grids',
'i' => array(
array('n' => 'abt__ut2_extended', 'p' => 'char(1) NOT NULL DEFAULT \'0\'',),
array('n' => 'abt__ut2_padding', 'p' => 'varchar(20) NOT NULL DEFAULT \'\'',),
),
),
array( 't' => '?:bm_blocks',
'i' => array(
array('n' => 'abt__ut2_show_on_desktop', 'p' => 'char(1) NOT NULL DEFAULT \'Y\'',),
array('n' => 'abt__ut2_show_on_mobile', 'p' => 'char(1) NOT NULL DEFAULT \'Y\'',),
),
),
array( 't' => '?:bm_grids',
'i' => array(
array('n' => 'abt__ut2_show_in_tabs', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',),
array('n' => 'abt__ut2_use_ajax', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',),
),
),
array( 't' => '?:banners',
'i' => call_user_func(function (){
$devices_enabled_fields = array (
'tablet' => fn_get_schema('abt__ut2_banners', 'tablet', 'php', true),
'mobile' => fn_get_schema('abt__ut2_banners', 'mobile', 'php', true),
);
$fields = array(
'use_avail_period' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'', 'add_sql' => array('ALTER TABLE ?:banners CHANGE `type` `type` CHAR(20) NOT NULL DEFAULT \'G\'')),
'avail_from' => array('p' => 'int(11) NOT NULL DEFAULT \'0\''),
'avail_till' => array('p' => 'int(11) NOT NULL DEFAULT \'0\''),
'button_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\''),
'button_text_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'button_text_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'button_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'button_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'title_font_size' => array('p' => 'varchar(7) NOT NULL DEFAULT \'18px\'',),
'title_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'title_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'title_font_weight' => array('p' => 'varchar(4) NOT NULL DEFAULT \'300\'',),
'title_tag' => array('p' => 'enum(\'div\',\'h1\',\'h2\',\'h3\') NOT NULL DEFAULT \'div\'',),
'background_image_size' => array('p' => 'enum(\'cover\',\'contain\') NOT NULL DEFAULT \'cover\'',),
'title_shadow' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'description_font_size' => array('p' => 'varchar(7) NOT NULL DEFAULT \'13px\'',),
'description_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'description_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'description_bg_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'description_bg_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'main_image' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'background_image' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'object' => array('p' => 'enum(\'image\',\'video\') NOT NULL DEFAULT \'image\'',),
'background_color' => array('p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
'background_color_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'class' => array('p' => 'varchar(100) NOT NULL DEFAULT \'\'',),
'color_scheme' => array('p' => 'enum(\'light\',\'dark\') NOT NULL DEFAULT \'light\'',),
'content_valign' => array('p' => 'enum(\'top\',\'center\',\'bottom\') NOT NULL DEFAULT \'center\'',),
'content_align' => array('p' => 'enum(\'left\',\'center\',\'right\') NOT NULL DEFAULT \'center\'',),
'content_full_width' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'content_bg' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'padding' => array('p' => 'varchar(27) NOT NULL DEFAULT \'\'',),
'how_to_open' => array('p' => 'enum(\'in_this_window\',\'in_new_window\',\'in_popup\') NOT NULL DEFAULT \'in_this_window\'',),
'data_type' => array('p' => 'enum(\'url\',\'blog\',\'promotion\') NOT NULL DEFAULT \'url\'',),
'youtube_use' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'youtube_autoplay' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
'youtube_hide_controls' => array('p' => 'char(1) NOT NULL DEFAULT \'N\'',),
);
$t = array();
foreach ($fields as $f => $data){
if (!preg_match('/_image$/', $f)){
$data['n'] = "abt__ut2_{$f}";
$t[] = $data;
}
foreach ($devices_enabled_fields as $device => $device_fields){
if (in_array($f, $device_fields)){
if (!preg_match('/_image$/', $f)){
$data['n'] = "abt__ut2_{$device}_{$f}";
$t[] = $data;
}
$t[] = array('n' => "abt__ut2_{$device}_{$f}_use_own", 'p' => 'char(1) NOT NULL DEFAULT \'N\'',);
}
}
}
$t[] = array('n' => 'abt__ut2_tablet_use', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',);
$t[] = array('n' => 'abt__ut2_mobile_use', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',);
return $t;
}),
),
array( 't' => '?:banner_descriptions',
'i' => call_user_func(function (){
$devices_enabled_fields = array (
'tablet' => fn_get_schema('abt__ut2_banners', 'tablet'),
'mobile' => fn_get_schema('abt__ut2_banners', 'mobile'),
);
$fields = array(
'button_text' => array('p' => 'varchar(50) NOT NULL DEFAULT \'\''),
'title' => array('p' => 'varchar(255) NOT NULL DEFAULT \'\''),
'url' => array('p' => 'varchar(255) NOT NULL DEFAULT \'\''),
'description' => array('p' => 'mediumtext'),
'youtube_id' => array('p' => 'varchar(15) NOT NULL DEFAULT \'\''),
);
$t = array();
foreach ($fields as $f => $data){
$t[] = array('n' => "abt__ut2_{$f}", 'p' => $data['p']);
foreach ($devices_enabled_fields as $device => $device_fields){
if (in_array($f, $device_fields)){
$t[] = array('n' => "abt__ut2_{$device}_{$f}", 'p' => $data['p']);
$t[] = array('n' => "abt__ut2_{$device}_{$f}_use_own", 'p' => 'char(1) NOT NULL DEFAULT \'N\'',);
}
}
}
return $t;
}),
),
array( 't' => '?:static_data',
'i' => array(
array('n' => 'abt__ut2_mwi__status', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',),
array('n' => 'abt__ut2_mwi__text_position', 'p' => 'varchar(32) NOT NULL DEFAULT \'bottom\'',),
array('n' => 'abt__ut2_mwi__dropdown', 'p' => 'char(1) NOT NULL DEFAULT \'N\'',),
array('n' => 'abt__ut2_mwi__label_color', 'p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
array('n' => 'abt__ut2_mwi__label_background', 'p' => 'varchar(11) NOT NULL DEFAULT \'\'',),
),
),
array( 't' => '?:static_data_descriptions',
'i' => array(
array('n' => 'abt__ut2_mwi__desc', 'p' => 'mediumtext',),
array('n' => 'abt__ut2_mwi__text', 'p' => 'mediumtext',),
array('n' => 'abt__ut2_mwi__label', 'p' => 'varchar(100) NOT NULL DEFAULT \'\'',),
),
),
);
if (!empty($objects) and is_array($objects)){
foreach ($objects as $o){
$fields = db_get_fields('DESCRIBE ' . $o['t']);
if (!empty($fields) and is_array($fields)){
if (!empty($o['i']) and is_array($o['i'])){
foreach ($o['i'] as $f) {
if (!in_array($f['n'], $fields)){
db_query('ALTER TABLE ?p ADD ?p ?p', $o['t'], $f['n'], $f['p']);
if (!empty($f['add_sql']) and is_array($f['add_sql'])){
foreach ($f['add_sql'] as $sql) db_query($sql);
}
}
}
}
if (!empty($o['indexes']) and is_array($o['indexes'])){
foreach ($f['indexes'] as $index => $keys){
$existing_indexes = db_get_array('SHOW INDEX FROM ?p WHERE key_name = ?s', $o['t'], $index);
if (empty($existing_indexes) and !empty($keys)){
db_query('ALTER TABLE ?p ADD INDEX ?p (?p)', $o['t'], $index, $keys);
}
}
}
}
}
}
if (Registry::get('addons.buy_together.status') == 'A') {
db_query('ALTER TABLE ?:buy_together_descriptions MODIFY COLUMN name varchar(255)');
}
$repo_path = Registry::get('config.dir.themes_repository') . 'abt__unitheme2';
$file_content = fn_get_contents($repo_path . '/css/addons/abt__unitheme2/icons.less');
$file_content = str_replace( 'media/custom_fonts', 'media/fonts/addons/abt__unitheme2', $file_content );
file_put_contents(Registry::get('config.dir.design_backend') . 'css/addons/abt__unitheme2/front_icons.less', $file_content);
$extensions = array('eot', 'woff', 'ttf', 'svg');
$fonts_dir = Registry::get('config.dir.design_backend') . 'media/fonts/addons/abt__unitheme2/';
fn_mkdir( $fonts_dir );
for ( $i = 0; $i < count($extensions); $i++ ) {
copy($repo_path . '/media/custom_fonts/uni2-icons.' . $extensions[$i], $fonts_dir . 'uni2-icons.' . $extensions[$i]);
}
}
function fn_abt__unitheme2_get_products_post(&$products, $params, $lang_code){
if (AREA == "C" and Registry::get("addons.discussion.status") == "A" and empty($params['get_conditions']) and $products){
$company_cond = "";
if (Registry::ifGet('addons.discussion.product_share_discussion', 'N') == 'N') {
$company_cond = fn_get_discussion_company_condition('?:discussion.company_id');
}
$posts = db_get_hash_single_array("SELECT p.product_id, ifnull(count(dp.post_id),0) as discussion_amount_posts
FROM ?:discussion
INNER JOIN ?:products as p ON (?:discussion.object_id = p.product_id)
INNER JOIN ?:discussion_posts as dp ON (?:discussion.thread_id = dp.thread_id AND ?:discussion.object_type = 'P' ?p)
WHERE dp.status = 'A' and p.product_id in (?n)
GROUP BY p.product_id", array('product_id', 'discussion_amount_posts'), $company_cond, array_keys($products));
foreach ($products as $p_id => $p) {
$products[$p_id]['discussion_amount_posts'] = !empty($posts[$p_id]) ? $posts[$p_id] : 0;
}
}
}
function fn_abt__unitheme2_get_products($params, &$fields, $sortings, $condition, &$join, $sorting, $group_by, $lang_code, $having){
$settings = fn_get_abt__ut2_settings();
$auth = & Tygh::$app['session']['auth'];
if (AREA == 'C' && $settings['product_list']['show_qty_discounts'] == 'Y') {
$join .= db_quote(' LEFT JOIN ?:product_prices AS opt_prices ON opt_prices.product_id = products.product_id AND opt_prices.lower_limit > 1 AND opt_prices.usergroup_id IN (?n)', $auth['usergroup_ids']);
$fields[] = ' (opt_prices.product_id IS NOT NULL) AS ab__is_qty_discount';
}
}
function fn_abt__unitheme2_get_products_pre( &$params ) {
if ( (isset($params['area']) && $params['area'] == 'C' ) || AREA == 'C' ) {
if (!empty($params['for_required_product'])) {
if (!empty($params['extend'])) {
array_push($params['extend'], 'description');
} else {
$params['extend'] = array('description');
}
};
}
}
function fn_abt__unitheme2_update_addon_status_post($addon, $status, $show_notification, $on_install, $allow_unmanaged, $old_status, $scheme){
if ($addon == 'buy_together' && $status == 'A') {
db_query('ALTER TABLE `?:buy_together_descriptions` MODIFY COLUMN `name` VARCHAR(255)');
}
}
function fn_abt__ut2_get_sub_or_parent_categories()
{
if(!empty($_REQUEST['category_id'])) {
$subcategories = fn_get_subcategories($_REQUEST['category_id']);
if (empty($subcategories)) {
$parent_category_id = db_get_field("SELECT parent_id FROM ?:categories WHERE company_id = ?i AND category_id = ?i", fn_get_runtime_company_id(), $_REQUEST['category_id']);
$subcategories = fn_get_subcategories($parent_category_id);
}
return $subcategories;
} else {
return false;
}
}
function fn_abt__ut2_get_light_menu ($params) {
$return = array();
uasort($params['item_ids'], 'abt_ut2_sort_item_positions');
foreach ($params['item_ids'] as $key => $menu) {
$get_params = array(
'section' => 'A',
'get_params' => true,
'icon_name' => '',
'use_localization' => true,
'status' => 'A',
'request' => array(
'menu_id' => $key,
),
'multi_level' => true,
'generate_levels' => true
);
$get_params['abt__ut2_light_menu'] = Registry::get('settings.abt__device') == 'mobile';
$m = array();
$m['menus'] = fn_top_menu_form(fn_get_static_data($get_params));
$icons = fn_get_image_pairs(array_keys($m['menus']), 'abt__ut2/menu-with-icon', 'M', true, false);
foreach ($m['menus'] as $m_key => &$item) {
$item['image'] = array_shift($icons[$m_key]);
if(Registry::get('settings.abt__device') == 'desktop' && $params['properties']['abt_menu_icon_items'] == 'Y' && $item['subitems']) {
$subicons = fn_get_image_pairs(array_keys($item['subitems']), 'abt__ut2/menu-with-icon', 'M', true, false);
foreach ($item['subitems'] as $subkey=>&$subitem) {
$subitem['image'] = array_shift($subicons[$subkey]);
}
}
}
if ( $menu['abt__ut2_menu_state'] == 'hide_items' )
$m['menu_name'] = fn_get_menu_name($key);
$m['user_class'] = $menu['abt__ut2_custom_class'];
$return[$key] = $m;
}
return array($return);
}
function abt_ut2_sort_item_positions ($a, $b) {
return ($a['position'] - $b['position']);
}
function fn_abt__ut2_check_versions() {
$ret = array(
'core' => PRODUCT_NAME . ': version ' . PRODUCT_VERSION . ' ' . PRODUCT_EDITION . (PRODUCT_STATUS != '' ? (' (' . PRODUCT_STATUS . ')') : '') . (PRODUCT_BUILD != '' ? (' ' . PRODUCT_BUILD) : '')
);
$theme = Registry::get('settings.theme_name');
if ( $theme == 'abt__unitheme2' ) {
$data = json_decode(fn_get_contents(Registry::get('config.dir.root') . "/design/themes/$theme/manifest.json"), true);
if ( $data !== false ) {
$ret['theme'] = "v{$data['ab']['version']} " . __('from') . " {$data['ab']['date']}";
$ret['addon'] = 'v' . fn_get_addon_version($theme);
}
}
return $ret;
}