<?php /* Smarty version Smarty-3.1.19, created on 2016-09-05 08:09:46
         compiled from "C:\xampp\htdocs\pollitonena\admin\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3018257cd0c2ac25b29-19139786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de2ccd948cf8e2994db664c194ba16b33dbac6bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pollitonena\\admin\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1466024474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3018257cd0c2ac25b29-19139786',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57cd0c2ac2fb06_67035922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd0c2ac2fb06_67035922')) {function content_57cd0c2ac2fb06_67035922($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
