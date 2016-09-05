<?php /* Smarty version Smarty-3.1.19, created on 2016-09-05 08:09:45
         compiled from "C:\xampp\htdocs\pollitonena\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322057cd0c2922d247-41953780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e64009d1c6828ac78a3712e3be7758792472d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pollitonena\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1466024474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322057cd0c2922d247-41953780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57cd0c292529c2_58949776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd0c292529c2_58949776')) {function content_57cd0c292529c2_58949776($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
