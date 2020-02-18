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
$schema['central']['ab__addons']['items']['ab__motivation_block'] = array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'ab__motivation_block.manage',
'position' => 700,
'subitems' => array(
'ab__mb.settings' => array(
'href' => 'addons.update&addon=ab__motivation_block',
'position' => 0
),
'ab__motivation_block.manage' => array(
'href' => 'ab__motivation_block.manage',
'position' => 10
),
'ab__motivation_block.icons' => array(
'href' => 'ab__motivation_block.icons',
'position' => 20
),
'ab__motivation_block.demodata' => array(
'href' => 'ab__motivation_block.demodata',
'position' => 30
),
'ab__motivation_block.help' => array(
'href' => 'ab__motivation_block.help',
'position' => 40
),
)
);
return $schema;
