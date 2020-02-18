<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2018   *
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
$schema = array(
'section' => 'products',
'name' => __('ab__video_gallery'),
'pattern_id' => 'ab__video_gallery',
'key' => array('video_id'),
'order' => 99,
'table' => 'ab__video_gallery',
'permissions' => array(
'import' => 'manage_catalog',
'export' => 'view_catalog',
),
'references' => array(
'ab__video_gallery_descriptions' => array(
'reference_fields' => array('video_id' => '#key', 'lang_code' => '#lang_code'),
'join_type' => 'LEFT',
),
'images_links' => array(
'reference_fields' => array('object_id' => '#key', 'object_type' => 'ab__vg_video', 'type' => 'M'),
'join_type' => 'LEFT',
'import_skip_db_processing' => true
),
),
'import_get_primary_object_id' => array(
'get_video_id' => array(
'function' => 'fn_ab__vg_exim_get_video_id',
'args' => array('$pattern', '$alt_keys', '$object', '$skip_get_primary_object_id'),
'import_only' => true,
),
),
'pre_processing' => array(
'remove_videos' => array(
'function' => 'fn_ab__vg_exim_remove_videos',
'args' => array('@remove_videos', '$import_data', '$processed_data'),
'import_only' => true,
),
),
'range_options' => array(
'selector_url' => 'products.manage',
'object_name' => __('products'),
),
'options' => array(
'lang_code' => array(
'title' => 'language',
'type' => 'languages',
'default_value' => array(DEFAULT_LANGUAGE),
),
'remove_videos' => array(
'title' => 'ab__vg.exim.remove_videos',
'description' => 'ab__vg.exim.remove_videos.text',
'type' => 'checkbox',
'import_only' => true
),
),
'export_fields' => array(
'Video ID' => array(
'alt_key' => true,
'db_field' => 'video_id'
),
'Product ID' => array(
'required' => true,
'db_field' => 'product_id'
),
'Language' => array(
'table' => 'ab__video_gallery_descriptions',
'db_field' => 'lang_code',
'type' => 'languages',
'alt_key' => false,
'required' => true,
'multilang' => true
),
'Youtube ID' => array(
'required' => true,
'table' => 'ab__video_gallery_descriptions',
'db_field' => 'youtube_id',
'multilang' => true,
),
'Title' => array(
'table' => 'ab__video_gallery_descriptions',
'db_field' => 'title',
'multilang' => true,
),
'Description' => array(
'table' => 'ab__video_gallery_descriptions',
'db_field' => 'description',
'multilang' => true,
),
'Position' => array(
'db_field' => 'pos',
),
'Status' => array(
'db_field' => 'status',
),
'Width' => array(
'db_field' => 'width',
),
'Height' => array(
'db_field' => 'height',
),
'Icon Type' => array(
'db_field' => 'icon_type',
),
'Image' => array(
'db_field' => 'image_id',
'table' => 'images_links',
'process_get' => array('fn_exim_export_image', '#this', 'ab__vg_video', '@images_path'),
'process_put' => array('fn_exim_import_images', '@images_path', '%Thumbnail%', '#this', '0', 'M', '#ab__video_gallery.video_id', 'ab__vg_video')
),
),
);
return $schema;