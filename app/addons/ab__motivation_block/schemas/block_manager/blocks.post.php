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
$schema['ab__motivation_block'] = array(
'templates' => 'addons/ab__motivation_block/blocks/ab__motivation_block.tpl',
'content' => array(
'ab__mb_items' => array(
'type' => 'enum',
'items_function' => 'fn_ab__mb_get_motivation_items',
'remove_indent' => true,
'hide_label' => true,
'fillings' => array(
'all' => array(
'params' => array(
'request' => array(
'company_id' => '%COMPANY_ID%',
),
),
),
)
),
),
'wrappers' => 'blocks/wrappers',
'cache' => array(
'update_handlers' => array(
'ab__mb_motivation_items',
'ab__mb_motivation_item_descriptions',
'ab__mb_vendors_descriptions'
),
'request_handlers' => array('company_id')
)
);
return $schema;
