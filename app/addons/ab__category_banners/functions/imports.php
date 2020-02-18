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
function fn_ab__category_banners_install_demodata() {
$arr = array(
'fn_ab__category_banners_install_banners'
);
$answer = array();
foreach( $arr as $func ){
if( is_callable($func) ) {
$val = $func('A');
if( !$val ) return false;
$answer[$func] = $val;
}
};
return $answer;
}
function fn_ab__category_banners_install_banners( $status = 'A' ) {
$path_part = 'ab__data/ab__category_banners/demodata/banners';
$path = Registry::get('config.dir.var') . $path_part;
$data = fn_get_contents("{$path}/data.json");
if ( empty($data) ) {
return false;
}
$data = json_decode($data, true);
$ids = $cats = array();
$img_path = fn_get_files_dir_path() . $path_part;
fn_rm($img_path);
fn_mkdir($img_path);
fn_copy($path, $img_path);
foreach( $data as $banner ) {
$company = fn_get_runtime_company_id();
$banner['status'] = $status;
$cat_id = db_get_field("SELECT ct.category_id FROM ?:category_descriptions AS ctd INNER JOIN ?:categories AS ct ON ct.category_id=ctd.category_id
WHERE level=1 AND status='A' AND is_trash='N' AND company_id={$company} AND ctd.category='Electronics'");
$cat_id = empty($cat_id) ? db_get_field("SELECT category_id FROM ?:categories WHERE level=1 AND status='A' AND is_trash='N' AND company_id={$company}") : $cat_id;
if ( !$cat_id ) { return false; }
$banner['category_ids'] = $cat_id;
$id = fn_ab__update_category_banner($banner, 0);
$langs = array_keys( fn_get_languages() );
foreach ($banner['images'] as $key=>$name) {
foreach($langs as $lang) {
$i_id = db_get_field("SELECT category_banner_image_id FROM ?:ab__category_banner_images_and_descr WHERE category_banner_id={$id} AND lang_code='{$lang}'");
fn_ab__category_banners_save_image($banner, $key, $path_part, $i_id, $lang);
$_REQUEST = array();
}
}
if ( in_array('ru', $langs) ) {
fn_ab__update_category_banner(array_merge($banner, $banner['ru']), $id, 'ru');
}
$ids[] = $id;
$cats[] = $cat_id;
}
$id_s = implode(', ', $ids);
fn_set_notification("N", __('notice'), "Banners {$id_s} was installed successfully!");
return $cats;
}
function fn_ab__category_banners_save_image( $banner, $name, $path, $id, $lang) {
$img = array(
"{$name}_data" => array(
array(
'type' => $name == 'category_banners_main_image' ? 'M' : 'L',
'object_id' => 0
)
),
"file_{$name}_icon" => array( "{$path}/{$banner['images'][$name]}" ),
"type_{$name}_icon" => array('server')
);
$_REQUEST = array_merge($_REQUEST, $img);
fn_attach_image_pairs( ($name == 'category_banners_main_image' ? 'category_banners_main' : 'category_banners_list_image'), 'category_banner', $id, $lang);
}