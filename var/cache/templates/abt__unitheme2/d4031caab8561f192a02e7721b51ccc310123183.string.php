<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:10
         compiled from "d4031caab8561f192a02e7721b51ccc310123183" */ ?>
<?php /*%%SmartyHeaderCode:13081174345e4bfa56dbda73-04913295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4031caab8561f192a02e7721b51ccc310123183' => 
    array (
      0 => 'd4031caab8561f192a02e7721b51ccc310123183',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '13081174345e4bfa56dbda73-04913295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa56dc4a96_90670246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa56dc4a96_90670246')) {function content_5e4bfa56dc4a96_90670246($_smarty_tpl) {?><ul>
    <li>c. <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_city'], ENT_QUOTES, 'UTF-8');?>
</li>
    <li><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <li><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
</a></li>
<li>Пн.-Сб. 9.00 - 18.00</li>
    <li><a href="<?php echo htmlspecialchars(fn_url('pages.view&page_id=20'), ENT_QUOTES, 'UTF-8');?>
" class="ty-exception__links-a"><?php echo $_smarty_tpl->__('view_on_map');?>
</a></li>

</ul><?php }} ?>
