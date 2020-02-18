<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:52:31
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\views\companies\components\company_status_switcher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146647705e4bfa2f0b68b3-55068148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f8ba9a669ff43e9a05ae1d28e8ed9d5b805442' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\views\\companies\\components\\company_status_switcher.tpl',
      1 => 1564032886,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '146647705e4bfa2f0b68b3-55068148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa2f0c9f37_00700225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa2f0c9f37_00700225')) {function content_5e4bfa2f0c9f37_00700225($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.enum.php';
?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status']==smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_tmp1,"data-ca-opened-status"=>$_tmp2,"data-ca-closed-status"=>$_tmp3,"data-ca-return-url"=>$_tmp4)), 0);?>

<?php }} ?>
