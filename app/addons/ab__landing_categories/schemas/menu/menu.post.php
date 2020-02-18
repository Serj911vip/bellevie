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
$schema['central']['ab__addons']['items']['ab__landing_categories'] = array(
'attrs' => array(
'class'=>'is-addon'
),
'position' => 11000,
'href' => 'ab__lc.help',
'subitems' => array(
'ab__lc.help' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'ab__lc.help',
'position' => 100,
),
'ab__lc.demodata' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'ab__lc.demodata',
'position' => 200
),
/*'ab__lc.export' => array(
'attrs' => array(
'class'=>'is-addon'
),
'href' => 'ab__lc.export',
'position' => 300
)*/
)
);
return $schema;